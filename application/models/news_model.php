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
        $query = $this->db->query('SELECT * FROM `announcement` where stadium_id = '.$stId.' order by news_id desc')->result();
        ;
        return $query;
    }
    function getNewsSelect($id){
           $query = $this->db->query('SELECT * FROM `announcement` where news_id = '.$id.' order by news_id desc')->result();
        ;
        return $query;
    }

    
}