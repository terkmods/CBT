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
    }

    function showcourtbook() {
        $court = $this->input->post('courtsend');
        //echo print_r($court);
        $courtname = $court['0'];
        $courtId = $court['1'];
        $cause2 = array('court_id' => $courtId);
        $query = $this->db->get_where('court', $cause2)->row();

        echo json_encode($query);
    }

    function showTablebook() {
        $date = $this->input->post('date');
        $stId = $this->input->post('stId');
        $n = $this->input->post('i');
        $indexstartime = null;
        $indexendtime = null;
        $indexstartime1 = null;
        $indexendtime1 = null;
        //$day = substr($date,0,3);
        $cause = array('type' => "เสาร์-อาทิต", 'stadium_id' => $stId);
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

            for ($i; $i < 48; $i++) {
                if (substr($st, 0, 2) == substr($time[$i], 0, 2)) {
                    $indexstartime = $i;
                    break;
                }
            }
            for ($j; $j < 48; $j++) {
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

            for ($i; $i < 48; $i++) {
                if (substr($st, 0, 2) == substr($time[$i], 0, 2)) {
                    $indexstartime = $i;
                    break;
                }
            }
            for ($j; $j < 48; $j++) {
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
        $st = array(
            'data' => $this->mystadium->getstadiumprofile($stId),
            'court' => $this->mystadium->gettableCourt($stId),
            'user' => $this->users->getUser($this->session->userdata('id'))
        );
        //print_r($st['court']);
        $this->load->view('booking_view', $st);
    }

    function doBooking() {
        $d = $this->input->post('dateid');
        $date_elements = explode("/", $d);
        $date_inverse = $date_elements[2] . '-' . $date_elements[0] . '-' . $date_elements[1];
        $data = array(
            'reserve_id' => 0,
            'stadium_id' => $this->input->post('stadiumid'),
            'court_id' => $this->input->post('courtid'),
            'user_id' => $this->input->post('userid'),
            'notification_user' => 1,
            'notification_owner' => 1,
            'start_time' => $date_inverse . ' ' . $this->input->post('start_time') . ':00',
            'end_time' => $date_inverse . ' ' . $this->input->post('end_time') . ':00',
            'sumprice' => $this->input->post('allprice')
            
        );
        $datasend = array(
          'stadium'=>$this->mystadium->getstadiumprofile($this->input->post('stadiumid'))  ,
           'court'=>$this->mystadium->getonecourt($this->input->post('courtid')),
                        'start_time' =>  $this->input->post('start_time') . ':00',
            'end_time' => $this->input->post('end_time') . ':00',
            'date'=>$d,
            'sumprice' => $this->input->post('allprice')
        );
        print_r($datasend['court']);
        $this->db->insert("reserve", $data);
        $this->load->view("confrim_booking",$datasend);
    }

    function historyBooking() {
        $userId = $this->session->userdata('id');
        $datasend['allbooking'] = $this->booking->getAllBooking($userId);
        //print_r($datasend);
        $this->load->view("history_booking", $datasend);
    }

    function cancelbooking($id) {

        $this->db->delete('reserve', array('reserve_id' => $id));
        $this->historyBooking();
    }

    public function get_bookings($c_id, $date) {

        $data = $this->booking->get_bookings($c_id, $date);
       // print_r($data);
        
        echo json_encode($data);
       // echo 'eeeeee';
    }
    function showstadiumbook(){
        $stId = $this->input->post("stadiumsend");
//        echo json_encode($stId);
        $query =  $this->booking->get_bookings_stadium($stId);
        echo json_encode($query);
        //print_r($query);
    }

}
