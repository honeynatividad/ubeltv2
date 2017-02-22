<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Interns extends CI_Controller {  
    public function __construct() {
		
        parent::__construct();
	$this->load->library(array('session'));
	$this->load->helper(array('url'));
	$this->load->model('member');
        $this->load->model('campus');
        $this->load->model('victory_group');
        $this->load->helper('form');
        $this->load->library('form_validation');
		
    }
    
    public function add($member_id, $victory_group_id){
        $data['member_id'] = $member_id;
        $data['victory_gorup_id'] = $victory_group_id;
        $campusData = $this->campus->getRows();
        //echo '<pre>';
        //print_r($campusData);
        //echo '</pre>';
        $data['campuses'] = $campusData;
        
        $this->load->view('template/header-main');
        $this->load->view('template/nav-top');
        $this->load->view('template/nav-left');
        $this->load->view('interns/admin/add', $data);
        $this->load->view('template/footer-main');
        
    }
}