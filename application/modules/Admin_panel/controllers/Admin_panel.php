<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Dhaka');

class Admin_panel extends MX_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Rest_model');
        $this->load->library('session');
        $this->load->helper('text');
    }
    
    public function index()
    {
        $userID = $this->session->userdata('userID');
        if (isset($userID)) {
            redirect(base_url().'Admin_panel/dashboard','refresh');
        }else{
            $this->load->view('index');
        }
    }
    public function login(){
        $username=$this->input->post('username');
        $password = md5($this->input->post('password'));
        $d=$this->Rest_model->SelectData_1('admin','*',array('username'=>$username,'password'=>$password));
        if (!empty($d)) {
            $this->session->set_userdata(array('userID'=>$d->adminID,'role'=>$d->role));
            redirect(base_url().'Admin_panel/dashboard','refresh');
        }else{
            redirect(base_url().'Admin_panel','refresh');
        }
    }
    public function profile()
    {
        $userID = $this->session->userdata('userID');
        if (isset($userID)) {
            $data['edit']=$this->Rest_model->SelectData_1('admin','*',array('adminID'=>$userID));
            $this->load->view('profile',$data);
        }else{
            redirect(base_url().'Admin_panel', 'refresh');
        }
    }
    public function edit_profile()
    {
        $data=$this->input->post();
        if(isset($data['adminID'])){
            if($data['password']==''){
                unset($data['password']);
            }else{
                $data['password']=md5($data['password']);
            }
            $this->Rest_model->UpdateData('admin',$data,array('adminID'=>$data['adminID']));
        }else{
            $data['password']=md5($data['password']);
            $this->Rest_model->SaveData('admin',$data);
        }
        redirect(base_url().'Admin_panel/dashboard','refresh');
    }
    public function dashboard()
    {
        $userID = $this->session->userdata('userID');
        if (isset($userID)) {
            $session['menu']='home';
            $this->session->set_userdata($session);
            $data['member']=$this->Admin_model->get_total_member();
            $data['balance']=$this->Admin_model->get_total_balance();
            $from=date('Y-m-d');
            $to=date("Y-m-d",strtotime(date("Y-m-d", strtotime(date('Y-m-d')))."+3 month"));
            $exp=$this->Admin_model->get_expire_soon($from,$to);
            $ex=0;
            foreach ($exp as $k) {
                $ex+=1;
            }
            $data['expire']=$ex;
            $this->load->view('dashboard',$data);
        }else{
            redirect(base_url().'Admin_panel', 'refresh');
        }
    }
    public function signout(){
        session_destroy();
        redirect(base_url().'Admin_panel','refresh');
    }
    public function admin_list($id=NULL)
    {
        $userID = $this->session->userdata('userID');
        if (isset($userID)) {
            if(isset($id)){
                $data['edit']=$this->Rest_model->SelectData_1('admin','*',array('adminID'=>$id));
            }
            $data['admin']=$this->Rest_model->SelectData('admin','*','');
            $this->load->view('admin_list',$data);
        }else{
            redirect(base_url().'Admin_panel', 'refresh');
        }
    }
    public function add_admin()
    {
        $data=$this->input->post();
        if(isset($data['adminID'])){
            if($data['password']==''){
                unset($data['password']);
            }else{
                $data['password']=md5($data['password']);
            }
            $this->Rest_model->UpdateData('admin',$data,array('adminID'=>$data['adminID']));
        }else{
            $data['password']=md5($data['password']);
            $this->Rest_model->SaveData('admin',$data);
        }
        redirect(base_url().'Admin_panel/admin_list','refresh');
    }
    public function delete_admin($id)
    {
        $userID = $this->session->userdata('userID');
        if (isset($userID)) {
            $this->Rest_model->DeleteData('admin',array('adminID'=>$id));
            redirect(base_url().'Admin_panel/admin_list','refresh');
        }else{
            redirect(base_url().'Admin_panel', 'refresh');
        }
    }
    public function add_member($id=NULL)
    {
        $userID = $this->session->userdata('userID');
        $data=array();
        if (isset($userID)) {
            if(isset($id)){
                $data['edit']=$this->Rest_model->SelectData_1('members','*',array('id'=>$id));
            }
            $data['roads']=$this->Rest_model->SelectData('roads','*','');
            $this->load->view('add_member',$data);
        }else{
            redirect(base_url().'Admin_panel', 'refresh');
        }
    }
// jahid starts with ride category

    public function ride_category(){
        $userID = $this->session->userdata('userID');
        if (isset($userID)) {
            $this->load->view('ride_category');

        }else{
            redirect(base_url().'Admin_panel', 'refresh');
        }

    }
    public function save_category(){
        $data=$this->input->post();
       $re =  $this->Rest_model->SaveData('ride_category',$data);
       if($re){
         redirect(base_url() . 'Admin_panel/ride_category_list');
       }
       
        echo '<pre>';
         var_dump((float)$data['children_price']);
    }
    public function ride_category_list(){
        $userID = $this->session->userdata('userID');
        if (isset($userID)) {
            $data['category']=$this->Rest_model->SelectData('ride_category','*','');
            // var_dump($data);
            $this->load->view('ride_category_list',$data);

        }else{
            redirect(base_url().'Admin_panel', 'refresh');
        }
    }
    public function ride_category_edit($id){
        $userID = $this->session->userdata('userID');
        if (isset($userID)) {
            $data['category']=$this->Rest_model->SelectData_1('ride_category','*',array('id'=>$id));
            // var_dump($data);
            $this->load->view('ride_category_edit',$data);

        }else{
            redirect(base_url().'Admin_panel', 'refresh');
        }
    }
    public function update_category(){
        $data=$this->input->post();
        $re =  $this->Rest_model->UpdateData('ride_category',$data,array('id'=>$data['id']));
        if($re){
            redirect(base_url() . 'Admin_panel/ride_category_list');
          }
    }
    public function ride_category_delete($id){
       $re = $this->Rest_model->DeleteData('ride_category',array('id'=>$id));
       if($re){
        redirect(base_url() . 'Admin_panel/ride_category_list');
      }
        
    }

    public function buy_tickets($id){
        $userID = $this->session->userdata('userID');
        if (isset($userID)) {
            $data['category']=$this->Rest_model->SelectData_1('ride_category','*',array('id'=>$id));
            $this->load->view('buy_tickets',$data);

        }else{
            redirect(base_url().'Admin_panel', 'refresh');
        }
    }
    public function save_ticket(){
        $data=$this->input->post();
        $category=$this->Rest_model->SelectData_1('ride_category','*',array('id'=>$data['category_id']));
        echo "<pre>";
        //  print_r($data);
        $childPrice = $category->children_price*$data['child_qty'];
        $adultPrice = $category->adult_price*$data['adult_qty'];
        $totalSubprice = $childPrice+$adultPrice;
        $array = [
            'category_id'=>$data['category_id'],
            'rider_name'=>$data['rider_name'],
            'phone'=>$data['phone'],
            'adult_qty'=>$data['adult_qty'],
            'child_qty'=>$data['child_qty'],
            'discount'=>$data['discount'],
              'vat'=>($totalSubprice*$category->vat)/100,
             'price'=>($totalSubprice+(($totalSubprice*$category->vat)/100))-$data['discount'],
             'created_by'=>$this->session->userdata('userID')
        ];
        $re =  $this->Rest_model->SaveData('tickets',$array);
        if($re){
          redirect(base_url() . 'Admin_panel/TicketList');
        }
    }

    public function TicketList(){
       
        $userID = $this->session->userdata('userID');
    //    echo '<pre>';
        if (isset($userID)) {
           
            $data['list']=$this->Rest_model->SelectDataOrder('tickets','*','','id','desc');
            $id  = $data['list'][0]->category_id;
            //  print_r($id);
            $data['category']=$this->Rest_model->SelectData_1('ride_category','*',array('id'=>$id));
            $this->load->view('ticket_report',$data);
            

        }else{
            redirect(base_url().'Admin_panel', 'refresh');
        }

        
    }
 
    public function ticket_edit($id){
        $data['tickets']=$this->Rest_model->SelectData_1('tickets','*',array('id'=>$id));
        $data['category']=$this->Rest_model->SelectData_1('ride_category','*',array('id'=>$data['tickets']->category_id));
        $this->load->view('ticket_update',$data);
    }
    public function updateTickets($id){
        $data=$this->input->post();
        $data['tickets']=$this->Rest_model->SelectData_1('tickets','*',array('id'=>$id));
        $category=$this->Rest_model->SelectData_1('ride_category','*',array('id'=>$data['category_id']));
        $childPrice = $category->children_price*$data['child_qty'];
        $adultPrice = $category->adult_price*$data['adult_qty'];
        $totalSubprice = $childPrice+$adultPrice;
        $array = [
            'category_id'=>$data['category_id'],
            'rider_name'=>$data['rider_name'],
            'phone'=>$data['phone'],
            'adult_qty'=>$data['adult_qty'],
            'child_qty'=>$data['child_qty'],
            'discount'=>$data['discount'],
              'vat'=>($totalSubprice*$category->vat)/100,
             'price'=>($totalSubprice+(($totalSubprice*$category->vat)/100))-$data['discount'],
             'created_by'=>$this->session->userdata('userID')
        ];
        echo "<pre>";
        print_r($data);
      $re =  $this->Rest_model->UpdateData('tickets',$array,array('id'=>$id));
        if($re){
            redirect(base_url() . 'Admin_panel/TicketList');
          }
    }
      public   function ticket_delete($id){
        $re = $this->Rest_model->DeleteData('tickets',array('id'=>$id));
       if($re){
        redirect(base_url() . 'Admin_panel/TicketList');
      }
    }








// jahid end



    
}
?>