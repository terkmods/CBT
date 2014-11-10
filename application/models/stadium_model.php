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

    function getcourtprice($stId) {
        $query = $this->db->query('select * from court join court_price on court.court_id = court_price.court_id where court.stadium_id = ' . $stId)->result_array();
        ;

        return $query;
    }

    function getonecourt($stId) {
        $query = $this->db->query('select * from court where court_id = ' . $stId)->row();
        ;

        return $query;
    }

    function getstadiumprofile($stId) {
        $query = $this->db->query('select * from stadium 
join owner on owner.owner_id = stadium.owner_id 
join User on User.user_id = owner.user_id

 where stadium_id =' . $stId)->result();
        ;

        return $query;
    }

    function getsumcourt($stId) {
        $query = $this->db->query('SELECT count(stadium_id) from court where stadium_id = ' . $stId)->result();
        return $query;
    }

    function getallstadium() {
        $query = $this->db->query('SELECT * FROM `stadium` ORDER BY stadium_id DESC  ')->result();
        ;
        return $query;
    }

    function getLaststadium() {
        $query = $this->db->query('SELECT * FROM `stadium` ORDER BY stadium_id DESC LIMIT 0 , 6  ')->result();
        ;
        return $query;
    }

    function getprovince() {
        $query = $this->db->query('SELECT distinct province FROM `stadium`')->result();
        ;
        return $query;
    }

    function getdistrict() {
        $query = $this->db->query('SELECT distinct district FROM `stadium` ')->result();
        ;
        return $query;
    }

    function gettableCourt($cId) {
        $query = $this->db->query('SELECT * FROM court '
                        . 'WHERE  court.stadium_id= ' . $cId)->result_array();
        ;
        return $query;
    }

    function getfloor($cId) {
        $query = $this->db->query('SELECT DISTINCT type FROM `court` WHERE stadium_id = ' . $cId)->result();
        ;
        return $query;
    }

    function gettimeprofile($cId) {
        $query = $this->db->query('SELECT * FROM `stadium_time` WHERE stadium_id = ' . $cId)->result();
        ;
        return $query;
    }

    function getTotalcourt($cId) {
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

    public function addfacility($stId) {






        $sql = 'INSERT INTO `backeyefin_cbt`.`facility` (`facility_id`, `stadium_id`, `Parking`, `Food`, `Bathroom`, `Lockerroom`, `Shop`, `Parking_detail`, `food_detail`, `bathroom_detail`, `lockerrom_detail`, `shop_detail`,other,other_detail)'
                . ' VALUES (NULL, ' . $stId . ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,,0,"");';

        $this->db->query($sql);
    }

    public function updatefacility($stId, $c, $q) {

        $sql = 'UPDATE `backeyefin_cbt`.`facility` SET `Parking` = '.$c['p'].',
        `Food` = "'.$c['f'].'",
        `Bathroom` = "'.$c['b'].'",
        `Lockerroom` = "'.$c['l'].'",
        `Shop` = "'.$c['s'].'",
        `Parking_detail` = "'.$q['0'].'",
        `bathroom_detail` = "'.$q['1'].'",
        `lockerrom_detail` = "'.$q['2'].'",
        `shop_detail` = "'.$q['3'].'mmmmm",
        `other` = "'.$c['o'].'",
        `other_detail` = "'.$c['ot'].'" WHERE `facility`.`facility_id` = '.$stId.';';
        
      return  $this->db->query($sql);
//        redirect('stadium/updatefacility/'.$stId.'');
    }

    public function isfacility() {
        
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

    public function addcourtprice($c_id, $price, $i) {

        $sql = "INSERT INTO `backeyefin_cbt`.`court_price` (`court_id`, `price`, `type`) VALUES ('" . $c_id . "', '" . $price . "', '" . $i . "')";
        $this->db->query($sql);
    }

    public function addtime($data, $stId) {


        // echo $data['open_time']['0'];
        //printf($datar['type']['0']);
        // print_r($datar);
        $n = 0;
        for ($n; $n < 7; $n++) {

            $sql = 'INSERT INTO `backeyefin_cbt`.`stadium_time` (`stadium_id`, `open_time`, `end_time`, `type`,`isopen`)
                   VALUES ("' . $stId . '",  "' . null . '",  "' . null . '",  "' . $n . '","1")';
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

    function getTime($stId) {
        $query = $this->db->query('select * from  stadium_time  where stadium_time.stadium_id = ' . $stId)->result_array();

        return $query;
    }

    function showfacility($stId) {
        $query = $this->db->query('select * from stadium join facility where facility.stadium_id = ' . $stId . ' and stadium.stadium_id = ' . $stId)->result_array();
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

    public function showcompare($data) {
        $stringsql = ' ';
        for ($i = 1; $i < sizeof($data); $i++) {
            $stringsql = $stringsql . " or stadium_id = " . $data[$i];
        }

        $sql = "select * from stadium where stadium_id =" . $data[0] . $stringsql . " order by stadium_id desc";

        $query = $this->db->query($sql)->result(); // row = แถวเดียว result = หลายแถว
        return $query;
    }

    public function showtime($data) {
        $stringsql = ' ';
        for ($i = 1; $i < sizeof($data); $i++) {
            $stringsql = $stringsql . " or stadium_id = " . $data[$i];
        }
        $sql = "select * from stadium_time where stadium_id =" . $data[0] . $stringsql;

        $query = $this->db->query($sql)->result(); // row = แถวเดียว result = หลายแถว
        return $query;
    }

    public function showprice($data) {
        for ($i = 0; $i < sizeof($data); $i++) {
            $this->db->select_min('price')->from('court_price')->join('court', 'court_price.court_id = court.court_id')->where('stadium_id', $data[$i]);
            $min = $this->db->get()->row();
            $this->db->select_max('price')->from('court_price')->join('court', 'court_price.court_id = court.court_id')->where('stadium_id', $data[$i]);
            $max = $this->db->get()->row();
            $avgprice[] = $min->price . ' - ' . $max->price;
        }

        return $avgprice;
    }

    public function showarrfacility($data) {

        for ($i = 0; $i < sizeof($data); $i++) {

            $this->db->select('*')->from('facility')->where('stadium_id', $data[$i]);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $res[] = $row;
            }
            $resall[] = $res;
            $res = null;
        } 

        return $resall;
    }

    public function showSearch($data) {


        $sql = "SELECT * FROM `stadium` WHERE district='" . $data[1] . "' and province='" . $data[2] . "'";
        $query = $this->db->query($sql)->result();
        return $query;
    }

    public function getLatLngAll() {
        $query = $this->db->query('SELECT stadium_name, court.stadium_id,lat,stadium.long,address_no,soi,road,district,province,tel,stadium_path
FROM  `stadium` join court on stadium.stadium_id = court.stadium_id 
WHERE stadium.lat IS NOT NULL  ')->result_array();

        echo json_encode($query);
    }

    public function getComment($sId) {
        $sql = " SELECT comment.user_id,stadium_id,text,comment.date,fname,lname,profilepic_path FROM `comment` join User on User.user_id = comment.user_id WHERE stadium_id='" . $sId . "' ORDER BY DATE DESC  ";
        $query = $this->db->query($sql)->result();
        echo json_encode($query);
    }

}
