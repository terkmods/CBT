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

    function get_bookings($c_id, $date) {
        $this->db->select('court_id, cast(start_time as time) as start, cast(end_time as time) as end, start_time');
        $this->db->from('reserve');
//        $this->db->join('member', 'booking.member_id = member.id');
        $this->db->where('reserve.court_id', $c_id);
        $this->db->like('start_time', $date, 'after');
        $query = $this->db->get();
        return $query->result();
    }

    function get_bookings_stadium($stId) {
        $this->db->select('*');
        $this->db->from('reserve');
//        $this->db->join('member', 'booking.member_id = member.id');
        $this->db->where('reserve.stadium_id', $stId);
                $query = $this->db->get();
        return $query->result();
    }

}
