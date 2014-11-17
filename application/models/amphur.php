<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Amphur extends CI_Model {

    function __construct() {
        parent::__construct();
    } 

   function getprovince() {
        $query = $this->db->query('SELECT * FROM `province` ')->result();
        ;
        return $query;
    }
    
    function getkate() {
        $query = $this->db->query('SELECT * FROM `amphur` where PROVINCE_ID = 1 ')->result();
        ;
        return $query;
    }
    
    function getkwang() {
        $query = $this->db->query('SELECT * FROM `tumbon` WHERE PROVINCE_ID = 1 order by TUMBON_NAME')->result();
        ;
        return $query;
    }
 
}

?>
