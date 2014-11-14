<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class booking extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model', 'users');
        $this->load->model('stadium_model', 'mystadium');
        $this->load->model('booking_model', 'booking');
        $this->load->library('session');
        $this->load->helper('date');
    }

    function showcourtbook() {
        $court = $this->input->post('courtsend');
        $day = $this->input->post('daytypeja');
        
        $courtId = $court;
        $cause_court = array('court_id' => $courtId,'type'=>$day);
        $cause2 = array('court_id' => $courtId);
        $query = $this->db->get_where('court', $cause2)->row();
        $querycourt = $this->db->get_where('court_price', $cause_court)->row();
        
        $datasend = array(
          'court'=>  $query,
            'price' => $querycourt
        );
        echo json_encode($datasend);
    }

    
    
    function showTablebookNew(){
        $date = $this->input->post('date');
     
        $stId = $this->input->post('stId');

        $indexstartime = null;
        $indexendtime = null;
        $indexstartime1 = null;
        $indexendtime1 = null;
        //$day = substr($date,0,3);
        $type=null;
        $dayofweek = array(
                'Mon','Tue','Wed','Thu','Fri','Sat','Sun'
            );
        for($i=0;$i<count($dayofweek);$i++){
            if($dayofweek[$i]==$date){
                $type = $i;
                break;
            }
        }
        $cause = array('type' => $type, 'stadium_id' => $stId);
        $cause2 = array('stadium_id' => $stId);
        
        $time3 = $this->db->get_where('stadium_time', $cause)->row();
        $court = $this->db->get_where('court', $cause2)->result_array();
       
        $time = array(
            '00:00 - 00:30', '00:30 - 01:00', '01:00 - 01:30', '01:30 - 02:00', '02:00 - 02:30', '02:30 - 03:00', '03:00 - 03:30', '03:30 - 04:00', '04:00 - 04:30', '04:30 - 05:00', '05:00 - 05:30', '05:30 - 06:00', '06:00 - 06:30', '06:30 - 07:00', '07:00 - 07:30', '07:30 - 08:00', '08:00 - 08:30', '08:30 - 09:00', '09:00 - 09:30', '09:30 - 10:00', '10:00 - 10:30', '10:30 - 11:00', '11:00 - 11:30', '11:30 - 12:00'
            , '12:00 - 12:30', '12:30 - 13:00', '13:00 - 13:30', '13:30 - 14:00', '14:00  - 14:30', '14:30 - 15:00', '15:00 - 15:30', '15:30 - 16:00', '16:00 - 16:30', '16:30 - 17:00', '17:00 - 17:30', '17:30 - 18:00', '18:00 - 18:30', '18:30 - 19:00', '19:00 - 19:30', '19:30 - 20:00', '20:00 - 20:30', '20:30 - 21:00', '21:00 - 21:30', '21:30 - 22:00', '22:00 - 22:30', '22:30 - 23:00', '23:00 - 23:30', '23:30 - 24:00', '24:00 - 00:00');
        
        $data = array(
          'time'=> $time3,
            'court'=>$this->mystadium->gettableCourt($stId),
            
        );
        echo json_encode($data);
        
    }
            
    function showTablebook() {
        $date = $this->input->post('date');
        $stId = $this->input->post('stId');

        $indexstartime = null;
        $indexendtime = null;
        $indexstartime1 = null;
        $indexendtime1 = null;
        //$day = substr($date,0,3);
        $type=null;
        $dayofweek = array(
                'Mon','Tue','Wed','Thu','Fri','Sat','Sun'
            );
        for($i=0;$i<count($dayofweek);$i++){
            if($dayofweek[$i]==$date){
                $type = $i;
                break;
            }
        }
        $cause = array('type' => $type, 'stadium_id' => $stId);
        $cause2 = array('stadium_id' => $stId);

        $time3 = $this->db->get_where('stadium_time', $cause)->row();
        $court = $this->db->get_where('court', $cause2)->result_array();
        $time = array(
            '00:00 - 00:30', '00:30 - 01:00', '01:00 - 01:30', '01:30 - 02:00', '02:00 - 02:30', '02:30 - 03:00', '03:00 - 03:30', '03:30 - 04:00', '04:00 - 04:30', '04:30 - 05:00', '05:00 - 05:30', '05:30 - 06:00', '06:00 - 06:30', '06:30 - 07:00', '07:00 - 07:30', '07:30 - 08:00', '08:00 - 08:30', '08:30 - 09:00', '09:00 - 09:30', '09:30 - 10:00', '10:00 - 10:30', '10:30 - 11:00', '11:00 - 11:30', '11:30 - 12:00'
            , '12:00 - 12:30', '12:30 - 13:00', '13:00 - 13:30', '13:30 - 14:00', '14:00  - 14:30', '14:30 - 15:00', '15:00 - 15:30', '15:30 - 16:00', '16:00 - 16:30', '16:30 - 17:00', '17:00 - 17:30', '17:30 - 18:00', '18:00 - 18:30', '18:30 - 19:00', '19:00 - 19:30', '19:30 - 20:00', '20:00 - 20:30', '20:30 - 21:00', '21:00 - 21:30', '21:30 - 22:00', '22:00 - 22:30', '22:30 - 23:00', '23:00 - 23:30', '23:30 - 24:00', '24:00 - 00:00');

        if ($date == "เสาร์") {
            $cause = array('type' => "เสาร์-อาทิต", 'stadium_id' => $stId);
            $cause2 = array('stadium_id' => $stId);

            $time3 = $this->db->get_where('stadium_time', $cause)->row();
            $court = $this->db->get_where('court', $cause2)->result_array();

            $st = $time3->open_time;

            $et = $time3->end_time;
//            echo substr($st, 0, 2); // เวลาจาก Db ตัดเหลือ สองตัวแรก
//            echo ':::';
//            echo substr($time_mor[14], 0, 2); //เวลาจาก array   
//           echo sizeof($time_mor);
            $i = 0;
            $j = 0;

            for ($i; $i < 49; $i++) {
                if (substr($st, 0, 2) == substr($time[$i], 0, 2)) {
                    $indexstartime = $i;
                    break;
                }
            }
            for ($j; $j < 49; $j++) {
                if (substr($et, 0, 2) == substr($time[$j], 0, 2)) {
                    $indexendtime = $j;
                    break;
                }
            }
            $datasend = array(
                'starttime1' => $indexstartime,
//            echo $indexstartime1;
//            echo '---------';
                'endtime' => $indexendtime,
                'endtime1' => $indexendtime1
            );


            echo json_encode($datasend);
        } elseif ($date == "อาทิตย์") {
            $cause = array('type' => "เสาร์-อาทิต", 'stadium_id' => $stId);
            $cause2 = array('stadium_id' => $stId);

            $time3 = $this->db->get_where('stadium_time', $cause)->row();
            $court = $this->db->get_where('court', $cause2)->result_array();
            $st = $time3->open_time;

            $et = $time3->end_time;
//            echo substr($st, 0, 2); // เวลาจาก Db ตัดเหลือ สองตัวแรก
//            echo ':::';
//            echo substr($time_mor[14], 0, 2); //เวลาจาก array   
//           echo sizeof($time_mor);
            $i = 0;
            $j = 0;

            for ($i; $i < 49; $i++) {
                if (substr($st, 0, 2) == substr($time[$i], 0, 2)) {
                    $indexstartime = $i;
                    break;
                }
            }
            for ($j; $j < 49; $j++) {
                if (substr($et, 0, 2) == substr($time[$j], 0, 2)) {
                    $indexendtime = $j;
                    break;
                }
            }
            $datasend = array(
                'starttime1' => $indexstartime,
//            echo $indexstartime1;
//            echo '---------';
                'endtime' => $indexendtime,
                'endtime1' => $indexendtime1
            );


            echo json_encode($datasend);
        } else {
            $cause = array('type' => "จันทร์-ศุกร", 'stadium_id' => $stId);
            $cause2 = array('stadium_id' => $stId);

            $time3 = $this->db->get_where('stadium_time', $cause)->row();
            $court = $this->db->get_where('court', $cause2)->result_array();

            $st = $time3->open_time;

            $et = $time3->end_time;
//            echo substr($st, 0, 2); // เวลาจาก Db ตัดเหลือ สองตัวแรก
//            echo ':::';
//            echo substr($time_mor[14], 0, 2); //เวลาจาก array   
//           echo sizeof($time_mor);
            $i = 0;
            $j = 0;

            for ($i; $i < 49; $i++) {
                if (substr($st, 0, 2) == substr($time[$i], 0, 2)) {
                    $indexstartime = $i;
                    break;
                }
            }
            for ($j; $j < 49; $j++) {
                if (substr($et, 0, 2) == substr($time[$j], 0, 2)) {
                    $indexendtime = $j;
                    break;
                }
            }
            $datasend = array(
                'starttime1' => $indexstartime,
//            echo $indexstartime1;
//            echo '---------';
                'endtime' => $indexendtime,
                'endtime1' => $indexendtime1
            );


            echo json_encode($datasend);
        }
    }

    function reserve($stId) {
        $datestring = "%Y-%m-%d";
        if($this->session->userdata('id')!=null){
        $st = array(
           'data' => $this->mystadium->getstadiumprofile($stId),
            'court' => $this->mystadium->gettableCourt($stId),
            'total' => $this->mystadium->getTotalcourt($stId),
            'courtprice' => $this->mystadium->getcourtprice($stId), 
            'user' => $this->users->getUser($this->session->userdata('id')),
            'date' => $datestring
        );
//        print_r($st['date']);
//      echo  mdate($datestring);
        
        $this->load->view('booking_view_1', $st);
        }else $this->load->view('index');
    }

    function doBooking() {
        $d = $this->input->post('dateid');
        $date_elements = explode("/", $d);
        $date_inverse = $date_elements[2] . '-' . $date_elements[0] . '-' . $date_elements[1];
                $rs = $this->booking->showIdMax();

        foreach ($rs as $r) {
            $max = $r['reserve_id'] + "1";
        }
        $data = array(
            'reserve_id' => $max,
            'stadium_idja' => $this->input->post('stadiumid'),
            'court_idja' => $this->input->post('courtid'),
            'user_idja' => $this->input->post('userid'),
            'name'=>$this->input->post('bookingname'),
            'tel'=>$this->input->post('telephone'),
            'notification_user' => 1,
            'notification_owner' => 1,
            'start_time' => $date_inverse . ' ' . $this->input->post('start_time') . ':00',
            'end_time' => $date_inverse . ' ' . $this->input->post('end_time') . ':00',
            'sumprice' => $this->input->post('allprice'),
            'stadium_send'=>$this->mystadium->getstadiumprofile($this->input->post('stadiumid'))  ,
            'court_send'=>$this->mystadium->getonecourt($this->input->post('courtid')),
            'start_time_send' =>  $this->input->post('start_time') . ':00',
            'end_time_send' => $this->input->post('end_time') . ':00',
            'date'=>$d,
             'user' => $this->users->getUser($this->input->post('userid'))
            
        );
        $this->session->set_userdata($data);
//       print_r($data['sumprice']);
       // $this->db->insert("reserve", $data);
//       $test = $this->check_bookings();
//       print_r($test);
        $this->load->view("confrim_booking",$data);
    }
    function bookja(){
        
        $datasession = array (
                      'reserve_id' => $this->session->userdata('reserve_id'),
            'stadium_id' => $this->session->userdata('stadium_idja'),
            'court_id' => $this->session->userdata('court_idja'),
            'user_id' => $this->session->userdata('user_idja'),
            'notification_user' => 1,
            'notification_owner' => 1,
            'start_time' =>  $this->session->userdata('start_time') ,
            'end_time' =>  $this->session->userdata('end_time'),
            'sumprice' => $this->session->userdata('sumprice')
           
            
            );
        $noti = array(
          
            'user_id' =>$this->session->userdata('user_idja'),
            'stadium_id'=>$this->session->userdata('stadium_idja'),
            'text' => 'has booking you stadium',
            'link'=>''
            
        );
         //  print_r($datasession);
        $this->db->insert("reserve", $datasession);
        $this->db->insert("notification",$noti);
        $lastinsertid = $this->db->insert_id() ;
        $userid = $this->mystadium->getstadiumprofile($this->session->userdata('stadium_idja'));
        
        $notirecive = array (
            'user_id'=>$userid['0']->user_id,
        
        );
        $this->db->insert("recive_noti",$notirecive);
        
                $userId = $this->session->userdata('id');
        $datasend['allbooking'] = $this->booking->getAllBooking($userId);
         $today = date('Y-m-d');
        $datasend['today_booking'] = $this->booking->getAllBookingja($userId,$today);
        print_r($datasend['today_booking']);
        $this->load->view("history_booking",$datasend);
       
      
    }
    function historyBooking() {
        $userId = $this->session->userdata('id');
        if($userId!=null){
        $datasend['allbooking'] = $this->booking->getAllBooking($userId);
                 $today = date('Y-m-d');
        $datasend['today_booking'] = $this->booking->getAllBookingja($userId,$today);
        //print_r($datasend);
//                print_r($datasend['allbooking']);

        $this->load->view("history_booking", $datasend);
        }else            $this->load->view('index');
    }
     function historyBookingajax() {
        $userId = $this->session->userdata('id');
        $type = $this->input->post('type');
        $today = date('Y-m-d');
        if($type==2){
            $datasend = $this->booking->getAllBookingja($userId,$today);
        }
               else if($type==1){
            
             $datasend = $this->booking->getAllBookingna($userId,$today);
        }
         else if($type==3){
            
             $datasend = $this->booking->getAllBookingyo($userId,$today);
        }
       
        
      echo json_encode ($datasend);
       // print_r($datasend);
        //$this->load->view("history_booking", $datasend);
    }
    
    function cancelbooking($id) {

        $this->db->delete('reserve', array('reserve_id' => $id));
        $this->historyBooking();
    }

    public function get_bookings() {
        $c_id = $this->input->post('st_id');
        $date = $this->input->post('datesend');
        $data = $this->booking->get_bookings($c_id, $date);
//        $data = $this->booking->get_bookings_stadium($c_id);
//        print_r($data);
        
        echo json_encode($data);
       // echo 'eeeeee';
    }
        public function check_bookings() {
        $c_id = $this->input->post('stid');
        $date = $this->input->post('date');
        $start = $this->input->post('start');
        $end = $this->input->post('end');
        $ct_id = $this->input->post('ct');
        $data = $this->booking->check_bookings($c_id, $date,$start,$end,$ct_id);
//        $data = $this->booking->get_bookings_stadium($c_id);
//        print_r($data);
        //print_r($data);
//        echo $c_id;
        echo $data;
//        return $data;
    }
    function showstadiumbook(){
        $stId = $this->input->post("stadiumsend");
//        echo json_encode($stId);
        $query =  $this->booking->get_bookings_stadium($stId);
        echo json_encode($query);
        //print_r($query);
    }
    function get_booking_today(){
        $today = date("Y-m-d");
        $userId = $this->session->userdata('id');
     $bookToday = $this->booking->getAllBooking_today($userId,$today);  
//     print_r($bookToday);
     echo $userId;
     echo $today;
    }

    
}
