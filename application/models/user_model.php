<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->helper('date');
    }

    function register($data) {
        $this->db->insert('member', $data);
    }

    public function getdate() {
        $format = 'DATE_RFC822';
        $time = time();

        return standard_date($format, $time);
    }

    public function showIdMax() {
        $rs = $this->db->select_max('user_id')->get('User');
        if ($rs->num_rows() == 0) {
            return array();
        } else {
            return $rs->result_array();
        }
    }

    function login($email, $password) {

        $query = $this->db->get_where('User', array('email' => $email, 'password' => $password));
        return $query->result();
    }

	
}

?>