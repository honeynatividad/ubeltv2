<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Reports extends CI_Controller {  
      
    public function __construct() {
		
        parent::__construct();
	$this->load->library(array('session'));
	$this->load->helper(array('url'));
        $this->load->model('report');
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
        
        $users = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
        $data['user'] = $users;
        
        $data['isAdmin']    = $users['name'];
        
        $members = $this->report->getMember();
        $victory_groups = $this->report->getVictoryGroup();
        $interns = $this->report->getIntern();
        
        $data['members'] = $members;
        $data['victory_groups'] = $victory_groups;
        $data['interns'] = $interns;
        $data['count'] = $this->report->getHighestNo();
        
        $count = $this->report->getHighestNo();
        $maxVictoryGroup = $count[0]['total'];
        
        $countMember = $this->report->getTotalMember();
        
        $totalMember = $countMember[0]['total'];
        
        //print_r($members);
        
        
        //$this->load->view('template/header-main');
        //$this->load->view('template/nav-top');
        //$this->load->view('template/nav-left',$data);
        //$this->load->view('reports/index', $data);
        //$this->load->view('template/footer-main');
        
        
        
        
        
        $this->load->library('excel');
        //activate worksheet number 1
        $this->excel->setActiveSheetIndex(0);
        //name the worksheet
        $this->excel->getActiveSheet()->setTitle('ENCUBelt Database');
        //set cell A1 content with some text
      
        $x=2;
        foreach($members as $member){
            $this->excel->getActiveSheet()->setCellValue('A'.$x, $member['first_name']);
            $this->excel->getActiveSheet()->setCellValue('B'.$x, $member['middle_name']);
            $this->excel->getActiveSheet()->setCellValue('C'.$x, $member['last_name']);
            $x++;
        }
        
        //change the font size
        $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
        //make the font become bold
        $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
        //merge cell A1 until D1
        //$this->excel->getActiveSheet()->mergeCells('A1:D1');
        //set aligment to center for that merged cell (A1 to D1)
        //$this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $filename='just_some_random_name.xls'; //save our workbook as this file name
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache

        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        
    }
}