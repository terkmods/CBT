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
    function gettotalnoti(){
        $userid = $this->session->userdata('id');
        $query = $this->db->get_where('recive_noti',array('seen_date' => null,'user_id' => $userid))->num_rows();
        return $query;
    }
}