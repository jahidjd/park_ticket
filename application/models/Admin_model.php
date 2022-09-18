<?php
/**
* 
*/
class Admin_model extends CI_Model
{
	
	function __construct() {
        parent::__construct();
    }
    
    public function get_category_list(){
        return array('Book','CD','DVD');
    }
    
}