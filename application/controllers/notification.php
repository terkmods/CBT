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
        function  mynotification(){
            $this->load->library('pagination');
            $total_rows = $this->noti->get_count();
        $config['per_page'] = 5;

        $config['base_url'] = base_url() . 'notification/mynotification/' ;
        $config['total_rows'] = $total_rows;
        $config['uri_segment'] = 3;

//pagination customization using bootstrap styles
        $config['full_tag_open'] = ' <ul class="pagination pagination-sm pull-right ">';
        $config['full_tag_close'] = '</ul><!--pagination-->';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&larr; Previous';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $uri = $this->uri->segment(3);
        if ($uri == null) {
            $uri = 0;
        }

        $this->pagination->initialize($config);
            $result['noti'] = $this->noti->getnoti_all($config['per_page'], $uri);
//print_r($result);
         $today = date("Y-m-d");
                  $userid = $this->session->userdata('id');
            $this->db->update('recive_noti', array('seen_date'=>$today), array('user_id' => $userid));
//            redirect('stadium/historyBooking');
        $this->load->view('notification_view',$result);
            
        }
        function seennoti($link,$rId,$st){
            $today = date("Y-m-d");
            
             $userid = $this->session->userdata('id');
            $this->db->update('recive_noti', array('seen_date'=>$today), array('user_id' => $userid,'recive_id' => $rId));
            
            if($link == "book")
            {            redirect('stadium/historystadium/'.$st);}
        else if ($link == "come"){
            redirect('booking/historybooking');
        }
            
        }
        function test(){
            $total_rows = $this->noti->get_count();
            echo $total_rows;
        }

}