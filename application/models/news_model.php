<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class News_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    function getallNews($stId) {
        $query = $this->db->query('SELECT * FROM `announcement` where stadium_id = '.$stId)->result();
        ;
        return $query;
    }

    
}