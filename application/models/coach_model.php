<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Coach_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function showIdCoachMax() {
        $rs = $this->db->select_max('coach_id')->get('coach');
        if ($rs->num_rows() == 0) {
            return array();
        } else {
            return $rs->result_array();
        }
    }
    public function get_all_coach(){
        $this->db->select('*');
         
        $this->db->join('User', 'User.user_id = coach.user_id');
        $query = $this->db->get('coach');
        return $query->result();
    }

    public function getCoachajax($q) {


        $this->db->select('*');
        $this->db->join('User', 'User.user_id = coach.user_id');
        $this->db->like('fname', $q);
        $query = $this->db->get('coach');
        if ($query->num_rows > 0) {
            foreach ($query->result_array() as $row) {
                $new_row['name'] = htmlentities(stripslashes($row['fname']));
//                $new_row['lanme'] = htmlentities(stripslashes($row['lname']));
//                //$new_row['description'] = htmlentities(stripslashes($row['aka']));
//                $new_row['image'] = htmlentities(stripslashes($row['profilepic_path']));
                $row_set[] = $new_row; //build an array
            }
            return json_encode($row_set); //format the array into json data
        }
    }

}
