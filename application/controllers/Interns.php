<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Interns extends CI_Controller {  
    public function __construct() {
		
        parent::__construct();
	$this->load->library(array('session'));
	$this->load->helper(array('url'));
	$this->load->model('member');
        $this->load->model('campus');
        $this->load->model('intern');
        $this->load->model('victory_group');
        $this->load->helper('form');
        $this->load->library('form_validation');
		
    }
    
    public function add($member_id, $victory_group_id){
        $data['member_id'] = $member_id;
        $data['victory_group_id'] = $victory_group_id;        
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
        
        $data = array();
        $userData = array();
        if($this->input->post('memberSubmit')){
            $member_id = strip_tags($this->input->post('member_id'));
            $victory_group_id = strip_tags($this->input->post('victory_group_id'));
            $no_of_intern = strip_tags($this->input->post('no_of_intern'));
            
            $userData = array(                
                'victory_group_id'                  =>  strip_tags($this->input->post('victory_group_id')),                
                'intern_name'                         =>  strip_tags($this->input->post('full_name')),
                'contact_number'                    =>  strip_tags($this->input->post('contact_number')),
                'campus'                            =>  strip_tags($this->input->post('campus')),
                'year_level'                        =>  strip_tags($this->input->post('year_level')),
                'graduating'                        =>  strip_tags($this->input->post('graduating')),
                'one_2_one'                         =>  strip_tags($this->input->post('one_2_one')),
                'victory_weekend'                   =>  strip_tags($this->input->post('victory_weekend')),
                'water_baptism'                     =>  strip_tags($this->input->post('water_baptism')),
                'making_disciples'                  =>  strip_tags($this->input->post('making_disciples')),
                'church_community'                  =>  strip_tags($this->input->post('church_community')),
                'foundation_class'                  =>  strip_tags($this->input->post('foundation_class')),
                'empowering_leaders'                =>  strip_tags($this->input->post('empowering_leaders')),
                'do_you_have_another_intern'        =>  strip_tags($this->input->post('do_you_have_another_intern')),
                
            );
            //$no_of_intern = strip_tags($this->input->post('do_you_have_intern'));
            $insert = $this->intern->insert($userData);
            $another_intern = strip_tags($this->input->post('do_you_have_another_intern'));
            if($insert){
                $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                if($another_intern=="Yes"){                    
                    redirect(base_url('interns/add/'.$member_id."/".$victory_group_id));
                }else{
                    redirect(base_url('members/index'));
                }
                    
            }else{
                $data['error_msg'] = 'Some problems occured, please try again.';
            }
        }
        
    }
}