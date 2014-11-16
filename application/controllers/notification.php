<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class notification extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model', 'myusers');
        $this->load->model('stadium_model', 'mystadium');
        $this->load->model('coach_model', 'coach');
        $this->load->model('news_model', 'news');
         $this->load->model('notication_model', 'noti');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'html', 'form'));
             $this->load->helper('date');
    }

    function index() {
        
    }
    
    public function total_noti() {
		//$user_profile = $this->user_model->get_by_id($id);
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		$total = $this->noti->gettotalnoti();
		echo "event:total_noti\n";
                
             echo "data: " .$total. "\n\n";
	}
        function getnotification(){
            $result = $this->noti->getnoti();
//            print_r($result);
            echo json_encode($result);
        }
        function  mynotification()
        {$result['noti'] = $this->noti->getnoti_all();
print_r($result);
         $today = date("Y-m-d");
                  $userid = $this->session->userdata('id');
            $this->db->update('recive_noti', array('seen_date'=>$today), array('user_id' => $userid));
//            redirect('stadium/historyBooking');
        $this->load->view('notification_view',$result);
            
        }
        function seennoti($rId){
            $today = date("Y-m-d");
             $userid = $this->session->userdata('id');
            $this->db->update('recive_noti', array('seen_date'=>$today), array('user_id' => $userid,'recive_id' => $rId));
            redirect('stadium/historyBooking');
            
        }

}