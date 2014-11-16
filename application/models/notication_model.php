<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Notication_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function gettotalnoti() {
        $userid = $this->session->userdata('id');
        $query = $this->db->get_where('recive_noti', array('seen_date' => null, 'user_id' => $userid))->num_rows();
        return $query;
    }

    function getnoti() {
        $userid = $this->session->userdata('id');
        $sql = 'SELECT * , TIMEDIFF( NOW( ) , notification.DATE ) AS time_diff, DATEDIFF( NOW( ) , notification.DATE ) AS day_diff
FROM  `notification` 
JOIN recive_noti ON notification.noti_id = recive_noti.recive_id
join stadium on notification.stadium_id = stadium.stadium_id
join User on notification.user_id = User.user_id
WHERE seen_date IS NULL AND recive_noti.user_id =' . $userid . ' ORDER BY notification.date DESC  LIMIT 0 , 4 ';
        $query = $this->db -> query($sql);
        return $query->result();
    }
        function getnoti_all() {
        $userid = $this->session->userdata('id');
        $sql = 'SELECT * , TIMEDIFF( NOW( ) , notification.DATE ) AS time_diff, DATEDIFF( NOW( ) , notification.DATE ) AS day_diff
FROM  `notification` 
JOIN recive_noti ON notification.noti_id = recive_noti.recive_id
join stadium on notification.stadium_id = stadium.stadium_id
WHERE seen_date IS not NULL AND recive_noti.user_id =' . $userid . ' ORDER BY notification.date DESC ';
        $query = $this->db -> query($sql);
        return $query->result();
    }

}
