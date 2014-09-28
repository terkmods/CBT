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
        $id = $userid = $this->session->userdata('id');
        $datasend ['stadium'] = $this->mystadium->getLaststadium();
        $datasend['user'] = $this->myusers->getUser($id);
        print_r($datasend['user']);
        $this->load->view('home_view',$datasend);
    
    }
}