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
    
}