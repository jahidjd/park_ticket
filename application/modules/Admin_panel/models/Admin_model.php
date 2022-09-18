<?php
class Admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function register($data){
        $this->db->insert('admin',$data);
    }
    public function login($email,$password){
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $query=$this->db->get('admin');
        return $query->row();
    }
    public function get_case_number($id)
    {
        $d=$this->db->query("SELECT COUNT(*) as c FROM cases WHERE member_id=$id");
        return $d->row()->c;
    }
    public function get_expire_soon($from,$to)
    {
        $d=$this->db->query("SELECT * FROM members WHERE expire_date between '".$from."' and '".$to."'");
        return $d->result();
    }
    public function get_total_member()
    {
        $d=$this->db->query("SELECT COUNT(*) as c FROM members");
        return $d->row()->c;
    }
    public function get_total_balance()
    {
        $d=$this->db->query("SELECT sum(amount) as c FROM payments")->row()->c;
        $w=$this->db->query("SELECT sum(amount) as c FROM withdraw")->row()->c;
        return $d-$w;
    }
    public function get_payment($date)
    {
        $d=$this->db->query("SELECT sum(amount) as c FROM payments WHERE date='".$date."'")->row()->c;
        return $d;
    }
    public function get_withdraw($date)
    {
        $d=$this->db->query("SELECT sum(amount) as c FROM withdraw WHERE date='".$date."'")->row()->c;
        return $d;
    }
    public function import_member($data){
        $this->db->insert_batch('members', $data);
    }
    function allcard_count(){   
        $query = $this
                ->db
                ->get('members');
    
        return $query->num_rows();  

    }
    function allcard($limit,$start,$col,$dir){   
       $query = $this
                ->db
                ->limit($limit,$start)
                ->order_by($col,$dir)
                ->get('members');
        
        if($query->num_rows()>0){
            return $query->result(); 
        }else{
            return null;
        }
        
    }
    function card_search($limit,$start,$search,$col,$dir){
        $query = $this
                ->db
                ->like('name',$search)
                ->or_like('card_no',$search)
                ->or_like('id',$search)
                ->limit($limit,$start)
                ->order_by($col,$dir)
                ->get('members');
        if($query->num_rows()>0){
            return $query->result();  
        }else{
            return null;
        }
    }
    function card_search_count($search){
        $query = $this
                ->db
                ->like('name',$search)
                ->or_like('card_no',$search)
                ->or_like('id',$search)
                ->get('members');
    
        return $query->num_rows();
    } 
    function fetch_data()
     {
      $this->db->select('*');
      $this->db->from('members');
      return $this->db->get();
     }
}


// report view report 

function getTicktes($table){
    $this->db->from($this->$table);
$this->db->order_by("id desc");
$query = $this->db->get(); 
return $query->result();
}
?>