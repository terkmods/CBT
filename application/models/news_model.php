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
        $query = $this->db->query('SELECT * FROM `announcement` where stadium_id = ' . $stId . ' order by news_id desc')->result();
        ;
        return $query;
    }
    function NewsView($stId,$perpage,$uri){
        
        $query = $this->db->query('SELECT * FROM `announcement` where stadium_id = ' . $stId . ' order by news_id desc LIMIT '.$uri.','.$perpage)->result();
        ;
        return $query;
    }
                function getNewsSelect($id) {
        $query = $this->db->query('SELECT * FROM `announcement` where news_id = ' . $id . ' order by news_id desc')->result();
        ;
        return $query;
    }

    public function get_count($stId) {
       // return $this->db->count_all("announcement");
//
        $this->db->like('stadium_id', $stId);
        $this->db->from('announcement');
        return $this->db->count_all_results();
    }
    function get_by_range(){
    $query = $this->db->get('announcement', $pagingConfig['per_page'], (($page-1) * $pagingConfig['per_page']));
    return $query->result();
}

}
