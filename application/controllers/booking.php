<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class booking extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('stadium_model', 'mystadium');
        $this->load->library('session');
    }
    
    function showTablebook(){
        $date = $this->input->post('date');
        echo $date;
    }

}
