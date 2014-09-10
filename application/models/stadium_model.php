<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Stadium_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getstadium($ownerid) {
        $query = $this->db->query('select * from stadium where owner_id = ' . $ownerid)->result();
        ;

        return $query;
    }
        function getstadiumprofile($stId) {
        $query = $this->db->query('select * from stadium where stadium_id = ' . $stId)->result();
        ;

        return $query;
    }

    function getallstadium() {
        $query = $this->db->query('SELECT * FROM `stadium` ORDER BY stadium_id DESC  ')->result();
        ;
        return $query;
    }

    public function showIdMax() {
        $rs = $this->db->select_max('stadium_id')->get('stadium');
        if ($rs->num_rows() == 0) {
            return array();
        } else {
            return $rs->result_array();
        }
    }

    public function addfacility($data, $stId) {
        $datar = array(
            'facility' => $data['0'],
        );
        print_r($datar);
        print_r($data);
        foreach ($data as $r) {




            $sql = 'INSERT INTO  `backeyefin_cbt`.`facility` (`stadium_id` ,`facility`)
                VALUES (' . $stId . ',  "' . $r . '")';

            $this->db->query($sql);
        }
    }

    function setstadium($stId) {
        


            $query = $this->db->query('select * from stadium where stadium_id = ' . $stId)->row();
            
       
        

        return $query;
    }
    function showfacility($stId){
        $query = $this->db->query('select facility from stadium join facility where facility.stadium_id = ' . $stId.' and stadium.stadium_id = '.$stId)->result_array();
        return $query;
    }

    public function delstadium($stId) {
        foreach ($stId as $r) {
        $query = $this->db->query('DELETE FROM `backeyefin_cbt`.`stadium` WHERE `stadium`.`stadium_id` = "' . $r . '"');
        $this->db->query('DELETE FROM `backeyefin_cbt`.`facility` WHERE `facility`.`stadium_id` = "' . $r . '"');
         }
         return $query;
    }

}
