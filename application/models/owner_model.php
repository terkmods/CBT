<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Owner_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
        public function showIdOwnerMax() {
        $rs = $this->db->select_max('owner_id')->get('owner');
        if ($rs->num_rows() == 0) {
            return array();
        } else {
            return $rs->result_array();
        }
    }
    
}