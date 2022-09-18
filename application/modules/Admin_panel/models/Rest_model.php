<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function SelectData($table, $data, $where) {
        if ($where) {
            $this->db->where($where);
        }
        $this->db->select($data);
        $this->db->from($table);
        return $this->db->get()->result();
    }
    public function SelectData_1($table, $data, $where) {
        if ($where) {
            $this->db->where($where);
        }
        $this->db->select($data);
        $this->db->from($table);
        return $this->db->get()->row();
    }
    public function SelectDataOrder($table, $data, $where,$by,$type) {
        if ($where) {
            $this->db->where($where);
        }
        $this->db->select($data);
        $this->db->from($table);
        $this->db->order_by($by,$type);
        return $this->db->get()->result();
    }
    public function SelectDataGroup($table, $data, $where,$by) {
        if ($where) {
            $this->db->where($where);
        }
        $this->db->select($data);
        $this->db->from($table);
        $this->db->group_by($by);
        return $this->db->get()->result();
    }
    public function SelectDataGroupOrder($table, $data, $where,$by,$order_by,$type) {
        if ($where) {
            $this->db->where($where);
        }
        $this->db->select($data);
        $this->db->from($table);
        $this->db->group_by($by);
        $this->db->order_by($order_by,$type);
        return $this->db->get()->result();
    }
    public function SelectDataOrder_1($table, $data, $where,$by,$type,$limit) {
        if ($where) {
            $this->db->where($where);
        }
        $this->db->select($data);
        $this->db->from($table);
        $this->db->order_by($by,$type);
        $this->db->limit($limit);
        return $this->db->get()->result();
    }
    public function SelectDataJoin($table, $data,$join,$condition, $where,$order_by=NULL,$type=NULL) {
        if ($where) {
            $this->db->where($where);
        }
        $this->db->select($data);
        $this->db->from($table);
        $this->db->join($join,$condition);
        if(isset($order_by)){
        $this->db->order_by($order_by,$type);    
        }
        
        return $this->db->get()->result();
    }
    public function SelectDataJoin_1($table, $data,$join,$condition, $where) {
        if ($where) {
            $this->db->where($where);
        }
        $this->db->select($data);
        $this->db->from($table);
        $this->db->join($join,$condition);
        return $this->db->get()->row();
    }

    public function SaveData($table, $data) {
        if ($this->db->insert($table, $data))
            return TRUE;

        return FALSE;
    }
    
    public function DeleteData($table, $where) {
        if ($where) {
            $this->db->where($where);
        }
        if ($this->db->delete($table)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function UpdateData($table, $data, $where) {
        $this->db->where($where);
        if ($this->db->update($table, $data)) {
            return TRUE;
        } else
            return FALSE;
    }
    // public function SelectDataGroupBetween($table, $data, $where,$b,$by) {
    //     if ($where) {
    //         $this->db->where($where);
    //     }
    //     $this->db->select($data);
    //     $this->db->from($table);
    //     $this->db->group_by($by);
    //     return $this->db->get()->result();
    // }
}
