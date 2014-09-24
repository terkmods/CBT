<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->helper('date');
    }

    function register($data) {
        $this->db->insert('member', $data);
    }

    public function getdate() {
        $format = 'DATE_RFC822';
        $time = time();

        return standard_date($format, $time);
    }

    public function showIdMax() {
        $rs = $this->db->select_max('user_id')->get('User');
        if ($rs->num_rows() == 0) {
            return array();
        } else {
            return $rs->result_array();
        }
    }

    function login($email, $password) {

        $query = $this->db->get_where('User', array('email' => $email, 'password' => $password));
        return $query->result();
    }

    function getOwner() {
        $sql = $this->db->query('select * from User join owner where User.user_id = owner.user_id')->result();
        return $sql;
    }
    
    function getBlacklist(){
        $sql = $this->db->query('select * from User where status = "Blacklist"')->result();
        return $sql;        
    }

    function getUser($id) {
       
        $sql = $this->db->query('select * from User where user_id='.$id)->result();
        return $sql;
    }
    
    function getCoach($id) {
       
        $sql = $this->db->query('select * from User join coach where User.user_id = coach.user_id and User.user_id='.$id)->result();
        return $sql;
    }
    
    function getUserAdmin(){
        $sql = $this->db->query('select * from User where type = "user"')->result();
        return $sql;
    }
    

    function getStadium() {
        $sql = $this->db->query('SELECT * 
FROM stadium join owner join User
where stadium.owner_id = owner.owner_id and owner.user_id = User.user_id  ')->result();
        return $sql;
    }
    

}

?>
