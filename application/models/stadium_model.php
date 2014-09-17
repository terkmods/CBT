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

    function getcourt($stId) {
        $query = $this->db->query('select * from court where stadium_id = ' . $stId)->row();
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

    function gettableCourt($cId) {
        $query = $this->db->query('SELECT * FROM court '
                        . 'WHERE  court.stadium_id= ' . $cId)->result_array();
        ;
        return $query;
    }
    function getTotalcourt($cId){
         $query = $this->db->query('SELECT count(court_id) as "courtnum" FROM court '
                        . 'WHERE  court.stadium_id= ' . $cId)->row();
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

    public function showIdCourtMax() {
        $rs = $this->db->select_max('court_id')->get('court');
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
        //print_r($datar);
        //print_r($data);
        foreach ($data as $r) {




            $sql = 'INSERT INTO  `backeyefin_cbt`.`facility` (`stadium_id` ,`facility`)
                VALUES (' . $stId . ',  "' . $r . '")';

            $this->db->query($sql);
        }
    }

    public function addcourt($data, $stId) {
        foreach ($data as $r) {
            $sql = 'INSERT INTO  `backeyefin_cbt`.`court` (
                                                    `court_id` ,
                                                    `stadium_id` ,
                                                    `court_name` ,
                                                    `type` ,
                                                    `m_f` ,
                                                    `st_sun` ,
                                                    `m_f_price` ,
                                                    `st_sun_price`
                                                    )
                VALUES (`0`' . $stId . ','
                    . '  "' . $r['court_name'] . '", '
                     . '  "' . $r['type'] . '", '
                     . '  " ", '
                     . '  " ", '
                    . '  " ", '
                    . ' " ")'
                
                ;
        }
        $this->db->query($sql);
    }

    public function addtime($data, $stId) {


        // echo $data['open_time']['0'];
        //printf($datar['type']['0']);
        // print_r($datar);
        $n = 0;
        for ($n; $n < sizeof($data['type']); $n++) {

            $sql = 'INSERT INTO `backeyefin_cbt`.`stadium_time` (`stadium_id`, `open_time`, `end_time`, `type`)
                   VALUES ("' . $stId . '",  "' . $data['open_time'][$n] . '",  "' . $data['end_time'][$n] . '",  "' . $data['type'][$n] . '")';
            $this->db->query($sql);

            //$sql = 'INSERT INTO  `backeyefin_cbt`.`stadium_time` (`stadium_id` ,`facility`)
            //    VALUES (' . $stId . ',  "' . $r['0'] . ',  "' . $r['end_time']['1'] . ',  "' . $r['2'] . '")';
            //  $this->db->query($sql);
        }
    }

    public function addcourttime($data, $stId) {


        // echo $data['open_time']['0'];
        //printf($datar['type']['0']);
        // print_r($datar);
        $n = 0;
        for ($n; $n < sizeof($data['price']); $n++) {

            $sql = 'UPDATE  `backeyefin_cbt`.`court`
                   set "0","' . $data['court_id'] . '","' . $data['court_day'][$n] . '",  "' . $data['price'][$n] . '"';
            $this->db->query($sql);

            //$sql = 'INSERT INTO  `backeyefin_cbt`.`stadium_time` (`stadium_id` ,`facility`)
            //    VALUES (' . $stId . ',  "' . $r['0'] . ',  "' . $r['end_time']['1'] . ',  "' . $r['2'] . '")';
            //  $this->db->query($sql);x`
        }
    }

    function setstadium($stId) {



        $query = $this->db->query('select * from stadium  where stadium_id = ' . $stId)->row();




        return $query;
    }

    function setTime($stId) {
        $query = $this->db->query('select * from  stadium_time  where stadium_time.stadium_id = ' . $stId)->result_array();

        return $query;
    }

    function showfacility($stId) {
        $query = $this->db->query('select facility from stadium join facility where facility.stadium_id = ' . $stId . ' and stadium.stadium_id = ' . $stId)->result_array();
        return $query;
    }

    public function delstadium($stId) {
        foreach ($stId as $r) {
            $query = $this->db->query('DELETE FROM `backeyefin_cbt`.`stadium` WHERE `stadium`.`stadium_id` = "' . $r . '"');
            $this->db->query('DELETE FROM `backeyefin_cbt`.`facility` WHERE `facility`.`stadium_id` = "' . $r . '"');
            $this->db->query('DELETE FROM `backeyefin_cbt`.`stadium_time` WHERE `stadium_time`.`stadium_id` = "' . $r . '"');
        }
        return $query;
    }

}
