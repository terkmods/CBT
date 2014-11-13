<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model', 'myusers');
        $this->load->model('stadium_model', 'mystadium');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'html', 'form'));
    }

    function index() {
        if($this->session->userdata('id')!=null){
        $id = $userid = $this->session->userdata('id');
        $datasend ['stadium'] = $this->mystadium->getLaststadium();
        $datasend['user'] = $this->myusers->getUser($id);
        $datasend ['province'] = $this->mystadium->getprovince();
            $datasend ['district'] = $this->mystadium->getdistrict();
//        $datasend['latlng'] = $this->mystadium->getLatLngAll();
     //print_r($datasend['latlng']);
        $this->load->view('home_view_1',$datasend);}else{
        $this->load->view('index');}
    
    }
    function test(){
        $datasend = $this->mystadium->getLatLngAll();
//     print_r($datasend['latlng']);
    }
}