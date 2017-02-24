<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Victory_groups extends CI_Controller {  
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
    
    public function add($member_id){
        $data['member_id'] = $member_id;
        $campusData = $this->campus->getRows();
        //echo '<pre>';
        //print_r($campusData);
        //echo '</pre>';
        $data['campuses'] = $campusData;
        
        $this->load->view('template/header-main');
        $this->load->view('template/nav-top');
        $this->load->view('template/nav-left');
        $this->load->view('victory_group/admin/add', $data);
        $this->load->view('template/footer-main');
        
        
        $data = array();
        $userData = array();
        if($this->input->post('memberSubmit')){
            $userData = array(
                'member_id'                         =>  strip_tags($this->input->post('member_id')),
                'campus'                            =>  strip_tags($this->input->post('campus')),
                'when_jumpstart'                    =>  strip_tags($this->input->post('when_jumpstart')),
                'how_many_times'                    =>  strip_tags($this->input->post('how_many_times')),
                'demographic'                       =>  strip_tags($this->input->post('demographic')),
                'number_of_victory_group_member'    =>  strip_tags($this->input->post('number_victory_group_member')),
                'schedule'                          =>  strip_tags($this->input->post('schedule')),
                'one_2_one'                         =>  strip_tags($this->input->post('one_2_one')),
                'victory_weekend'                   =>  strip_tags($this->input->post('victory_weekend')),
                'water_baptism'                     =>  strip_tags($this->input->post('water_baptism')),
                'making_disciples'                  =>  strip_tags($this->input->post('making_disciples')),
                'church_community'                  =>  strip_tags($this->input->post('church_community')),
                'foundation_class'                  =>  strip_tags($this->input->post('foundation_class')),
                'empowering_leaders'                =>  strip_tags($this->input->post('empowering_leaders')),
                'leadership_113'                    =>  strip_tags($this->input->post('leadership_113')),
                'do_you_have_intern'                =>  strip_tags($this->input->post('intern')),
                );
            
            $no_of_intern = strip_tags($this->input->post('intern'));
            $member_id = strip_tags($this->input->post('member_id'));
            
            
            $insert = $this->victory_group->insert($userData);
            
            if($insert){
                $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                if($no_of_intern==1){
                    redirect(base_url('interns/add/'.$member_id.'/'.$insert));
                }else{
                    redirect(base_url('members/index'));
                }
                    
            }else{
                $data['error_msg'] = 'Some problems occured, please try again.';
            }
        }
    }
}