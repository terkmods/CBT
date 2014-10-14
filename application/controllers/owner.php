<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Owner extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model', 'myusers');
        $this->load->model('stadium_model', 'mystadium');
        $this->load->model('coach_model', 'coach');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'html', 'form'));
    }

    function index() {
    }
    
    public function profile($id) {
        $profile = array(
            'data' => $this->myusers->getUser($id),
                //'map' => $this->geolocation()
        );


        $this->load->view('User_view', $profile);
    }
    
     public function editProfile($id) {
        $profile = array(
            'data' => $this->myusers->getUser($id)
        );
        //print_r($profile['data']);
        $this->load->view("edit_user", $profile);
    }
      

}
