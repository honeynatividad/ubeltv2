<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * User class.
 * 
 * @extends CI_Controller
 */
class Campuses extends CI_Controller {
    
    public function __construct() {
		
	parent::__construct();
	$this->load->library(array('session'));
	$this->load->helper(array('url'));
	$this->load->model('campus');
        $this->load->helper('form');
        $this->load->library('form_validation');
		
    }
    
    public function add(){
        $data = array();
        $campusData = array();
        if($this->input->post('campusSubmit')){
            $this->form_validation->set_rules('code', 'Code', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            

            $campusData = array(
                'code' => strip_tags($this->input->post('code')),
                'name' => strip_tags($this->input->post('name')),                
            );

            if($this->form_validation->run() == true){
                $insert = $this->campus->insert($campusData);
                if($insert){
                    $this->session->set_userdata('success_msg', 'Your registration was successfully.');
                    redirect('campuses/add');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        $data['camnpus'] = $campusData;
        //load the view
        $this->load->view('template/header-main');
        $this->load->view('template/nav-top');
        $this->load->view('template/nav-left');
        $this->load->view('campus/add', $data);
        $this->load->view('template/footer-main');
    }
}