<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Reports extends CI_Controller {  
      
    public function __construct() {
		
        parent::__construct();
	$this->load->library(array('session'));
	$this->load->helper(array('url'));
	$this->load->model('member');
        $this->load->model('campus');
        $this->load->model('user');
        $this->load->model('intern');
        $this->load->model('victory_group');
        $this->load->helper('form');
        $this->load->library('form_validation');
	$this->user_data = $this->session->userdata('userId');
        
    }
    
    public function index(){
        $data['user_data'] = $this->user_data;
        
       
        //load the view
        $this->load->view('template/header-main');
        $this->load->view('template/nav-top');
        $this->load->view('template/nav-left',$data);
        $this->load->view('reports/index', $data);
        $this->load->view('template/footer-main');
    }
}