<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Members extends CI_Controller {  
      
    public function __construct() {
		
        parent::__construct();
	$this->load->library(array('session'));
	$this->load->helper(array('url'));
	$this->load->model('member');
        $this->load->model('campus');
        $this->load->helper('form');
        $this->load->library('form_validation');
		
    }
    
    public function index()  
    {  
        
        $this->load->view('template/header');  
        
        $this->load->view('member_index');  
        $this->load->view('template/footer'); 
    }  
    
    public function add(){
        $data = array();
        $userData = array();
        if($this->input->post('memberSubmit')){
            //echo '<pre>';
            //print_r("TEST");
            //echo '</pre>';
            $this->form_validation->set_rules('first_name', 'First Name', 'required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'required');
            $this->form_validation->set_rules('middle_name', 'Middle Name', 'required');
            $this->form_validation->set_rules('contact_number', 'Contact Number', 'required');
            $this->form_validation->set_rules('birthday', 'Birthday', 'required');
            $this->form_validation->set_rules('email_address', 'Email Address', 'required');
            $this->form_validation->set_rules('facebook_name', 'Facebook Name', 'required');
            $this->form_validation->set_rules('complete_home_address', 'Complete Home Address', 'required');
            $this->form_validation->set_rules('campus', 'Campus', 'required');
            $this->form_validation->set_rules('area', 'Area', 'required');
            $this->form_validation->set_rules('year_level', 'Year Level', 'required');
            $this->form_validation->set_rules('graduating', 'Graduating', 'required');
            $this->form_validation->set_rules('campus', 'Campus', 'required');
            $this->form_validation->set_rules('th-5pm', 'Thursday 5pm', '');
            
            
            
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
            $th_5pm = strip_tags($this->input->post('th-5pm'));
            $th_7pm = strip_tags($this->input->post('th-7pm'));
            $f_3pm = strip_tags($this->input->post('f-3pm'));
            $f_5pm = strip_tags($this->input->post('f-5pm'));
            $f_7pm = strip_tags($this->input->post('f-7pm'));
            $service_other = strip_tags($this->input->post('service-other'));
            
            $youth_services_you_attend = $th_5pm.",".$th_7pm.",".$f_3pm.",".$f_5pm.",".$f_7pm.",".$service_other;
            
            $ministry_admin = strip_tags($this->input->post('ministry-admin'));
            $ministry_communication = strip_tags($this->input->post('ministry-communication'));
            $ministry_kids = strip_tags($this->input->post('ministry-kids'));
            $ministry_music = strip_tags($this->input->post('ministry-music'));
            $ministry_production = strip_tags($this->input->post('ministry-production'));
            $ministry_technical = strip_tags($this->input->post('ministry-technical'));
            $ministry_ushering = strip_tags($this->input->post('ministry-ushering'));
            $ministry_none  = strip_tags($this->input->post('ministry-none'));
            
            $ministry_involvement = $ministry_admin.",".$ministry_communication.",".$ministry_kids.",".$ministry_music.",".$ministry_production.",".$ministry_technical.",".$ministry_ushering.",".$ministry_none;
            
            $number_of_victory_groups = strip_tags($this->input->post('number_victory_groups'));
            $userData = array(
                'first_name'                    => strip_tags($this->input->post('first_name')),
                'middle_name'                   =>  strip_tags($this->input->post('middle_name')),
                'last_name'                     =>  strip_tags($this->input->post('last_name')),
                'contact_number'                =>  strip_tags($this->input->post('contact_number')),
                'birthday'                      =>  strip_tags($this->input->post('birthday')),
                'email_address'                 =>  strip_tags($this->input->post('email_address')),
                'facebook_name'                 =>  strip_tags($this->input->post('facebook_name')),
                'complete_home_address'         => strip_tags($this->input->post('complete_home_address')),
                'campus'                        => strip_tags($this->input->post('campus')),
                'area'                          =>  strip_tags($this->input->post('area')),
                'year_level'                    =>  strip_tags($this->input->post('year_level')),
                'graduating'                    =>  strip_tags($this->input->post('graduating')),                
                'youth_services_you_attend'     =>  $youth_services_you_attend,
                'ministry_involvement'          =>  $ministry_involvement,
                'name_of_your_leadership_group' =>  strip_tags($this->input->post('name_leader')),
                'one_2_one'                     => strip_tags($this->input->post('one_2_one')),
                'victory_weekend'               =>  strip_tags($this->input->post('victory_weekend')),
                'water_baptism'                 =>  strip_tags($this->input->post('water_baptism')),
                'making_disciples'              =>  strip_tags($this->input->post('making_disciples')),
                'church_community'             =>  strip_tags($this->input->post('church_community')),
                'foundation_class'              =>  strip_tags($this->input->post('foundation_class')),
                'empowering_leaders'            =>  strip_tags($this->input->post('empowering_leaders')),
                'leadership_113'                =>  strip_tags($this->input->post('leadership_113')),
                'how_many_victory_groups_you_are_leading' => strip_tags($this->input->post('number_victory_groups'))
                
            );
            //echo '<pre>';
            //print_r($userData);
            //echo '</pre>';
            //if($this->form_validation->run() == true){
                $insert = $this->member->insert($userData);
                if($insert){
                    $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                    if($number_of_victory_groups>0){
                        redirect(base_url('victory_groups/add/'.$insert));
                    }else{
                        redirect(base_url('members/index'));
                    }
                    
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            //}
        }
        $campusData = $this->campus->getRows();
        //echo '<pre>';
        //print_r($campusData);
        //echo '</pre>';
        $data['campuses'] = $campusData;
        //load the view
        $this->load->view('template/header-main');
        $this->load->view('template/nav-top');
        $this->load->view('template/nav-left');
        $this->load->view('member/admin/add', $data);
        $this->load->view('template/footer-main');
    }
    
    public function all(){
        $memberData = $this->member->getRows();
        //echo '<pre>';
        //print_r($campusData);
        //echo '</pre>';
        $data['members'] = $memberData;
    
        $this->load->view('template/header-main');
        $this->load->view('template/nav-top');
        $this->load->view('template/nav-left');
        $this->load->view('member/admin/all', $data);
        $this->load->view('template/footer-main');
    }
    
    public function view($id){
        $member_id = $id;
        $userData = array(
            'member_id' =>  $id
        );
        
        $memberData = $this->member->getRows($userData);
        
        $data['members']    = $memberData;
        $this->load->view('template/header-main');
        $this->load->view('template/nav-top');
        $this->load->view('template/nav-left');
        $this->load->view('member/admin/view', $data);
        $this->load->view('template/footer-main');
    }
}