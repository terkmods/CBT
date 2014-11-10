<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Booking_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function addBooking() {
        
    }

    function getAllBooking($userId) {
        $query = $this->db->query('SELECT reserve.reserve_id, reserve.stadium_id, reserve.court_id, reserve.start_time, reserve.end_time, stadium.stadium_name, court.court_name
FROM  `reserve` 
JOIN stadium ON reserve.stadium_id = stadium.stadium_id
JOIN court ON reserve.court_id = court.court_id
WHERE reserve.user_id =' . $userId)->result();


        return $query;
    }

    function getAllBooking_today($userId, $today) {
        $query = $this->db->query('SELECT reserve.reserve_id, reserve.stadium_id, reserve.court_id, reserve.start_time, reserve.end_time, stadium.stadium_name, court.court_name
FROM  `reserve` 
JOIN stadium ON reserve.stadium_id = stadium.stadium_id
JOIN court ON reserve.court_id = court.court_id
WHERE reserve.user_id =' . $userId . ' and start_time ' . $today . ' current_timestamp')->result();


        return $query;
    }

    function getAllBookingja($userId, $today) {
        $query = $this->db->query('SELECT reserve.reserve_id, reserve.stadium_id, reserve.court_id, reserve.start_time, reserve.end_time, stadium.stadium_name, court.court_name
FROM  `reserve` 
JOIN stadium ON reserve.stadium_id = stadium.stadium_id
JOIN court ON reserve.court_id = court.court_id
WHERE reserve.user_id =' . $userId . ' and start_time like "' . $today . '%"')->result();


        return $query;
    }

    function getAllBookingna($userId, $today) {
        $query = $this->db->query('SELECT reserve.reserve_id, reserve.stadium_id, reserve.court_id, reserve.start_time, reserve.end_time, stadium.stadium_name, court.court_name
FROM  `reserve` 
JOIN stadium ON reserve.stadium_id = stadium.stadium_id
JOIN court ON reserve.court_id = court.court_id
WHERE reserve.user_id =' . $userId . ' and start_time < "' . $today . '"')->result();


        return $query;
    }

    function getAllBookingyo($userId, $today) {
        $query = $this->db->query('SELECT reserve.reserve_id, reserve.stadium_id, reserve.court_id, reserve.start_time, reserve.end_time, stadium.stadium_name, court.court_name
FROM  `reserve` 
JOIN stadium ON reserve.stadium_id = stadium.stadium_id
JOIN court ON reserve.court_id = court.court_id
WHERE reserve.user_id =' . $userId . ' and start_time > "' . $today . '"')->result();


        return $query;
    }

    public function get_bookings($c_id, $date) {
        $this->db->select('court_id, cast(start_time as time) as start, cast(end_time as time) as end, start_time');
        $this->db->from('reserve');
//        $this->db->join('member', 'booking.member_id = member.id');
        $this->db->where('reserve.stadium_id', $c_id);
        $this->db->like('start_time', $date, 'after');
        $this->db->order_by("court_id", "asc");
        $this->db->order_by("start_time", "asc");

        $query = $this->db->get();
        return $query->result();
    }

    function get_bookings_stadium($stId) {
        $sql = 'SELECT reserve_id, court.court_id, reserve.stadium_id, User.user_id, CAST( start_time AS TIME ) AS 
START , CAST( end_time AS TIME ) AS 
END , start_time, sumprice, court_name, fname, lname, 
STATUS , phone
FROM reserve
JOIN court ON reserve.court_id = court.court_id
JOIN User ON User.user_id = reserve.user_id
WHERE reserve.stadium_id =' . $stId . ''
        ;

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function showIdMax() {
        $rs = $this->db->select_max('reserve_id')->get('reserve');
        if ($rs->num_rows() == 0) {
            return array();
        } else {
            return $rs->result_array();
        }
    }

    function getbookingDashboard($owner_id) {
            $query = $this->db->query('SELECT * 
FROM  `reserve` 
JOIN stadium ON reserve.stadium_id = stadium.stadium_id
JOIN court ON reserve.court_id = court.court_id
JOIN User ON User.user_id = reserve.user_id
WHERE reserve.stadium_id
IN (

SELECT stadium_id
FROM stadium
WHERE owner_id = '.$owner_id.'
)
AND DATE( start_time ) = CURDATE( ) ')->result();
        return $query;
    }

    function getbookingDashboard_Playing($owner_id) {
        $query = $this->db->query('SELECT * 
FROM  `reserve` 
JOIN stadium ON reserve.stadium_id = stadium.stadium_id
JOIN court ON reserve.court_id = court.court_id
JOIN User ON User.user_id = reserve.user_id
WHERE reserve.stadium_id
IN (

SELECT stadium_id
FROM stadium
WHERE owner_id = '.$owner_id.'
)
AND DATE( start_time ) = CURDATE( ) 
AND CURTIME( ) >= TIME( start_time ) 
AND CURTIME( ) <= TIME( end_time ) ')->result();
        return $query;
    }
    function getbookingDashboard_Pass($owner_id) {
        $query = $this->db->query('SELECT * 
FROM  `reserve` 
JOIN stadium ON reserve.stadium_id = stadium.stadium_id
JOIN court ON reserve.court_id = court.court_id
JOIN User ON User.user_id = reserve.user_id
WHERE reserve.stadium_id
IN (

SELECT stadium_id
FROM stadium
WHERE owner_id = '.$owner_id.'
)
AND DATE( start_time ) = CURDATE( ) 

AND CURTIME( ) > TIME( end_time ) ')->result();
        return $query;
    }
    function getbookingDashboard_comming($owner_id) {
        $query = $this->db->query('SELECT * 
FROM  `reserve` 
JOIN stadium ON reserve.stadium_id = stadium.stadium_id
JOIN court ON reserve.court_id = court.court_id
JOIN User ON User.user_id = reserve.user_id
WHERE reserve.stadium_id
IN (

SELECT stadium_id
FROM stadium
WHERE owner_id = '.$owner_id.'
)
AND DATE( start_time ) = CURDATE( ) 

AND CURRENT_TIMESTAMP < start_time ')->result();
        return $query;
    }
    function getSumpricetoday($usid){
         $query = $this->db->query( 'select s.stadium_name, stat.count
from (select stadium_id,stadium_name from stadium where owner_id = (select owner_id from owner where user_id= '.$usid.')) s left join
(select stadium_id, sum(sumprice) as count
from reserve
where stadium_id in (select stadium_id from stadium where owner_id = (select owner_id from owner where user_id= '.$usid.'))
AND DATE( start_time ) = CURDATE( )
group by stadium_id) stat
on s.stadium_id = stat.stadium_id')->result();
          return $query;
    }
 
   
}
