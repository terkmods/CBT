<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Coach extends CI_Controller {

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
      function autocomplete() {
           
            $query = $this->coach->getCoachajax();

            foreach ($query->result() as $row):
                echo "<li id='$row->coach_id'>" . $row->fname . "</li>";
            endforeach;
        }
          function get_coach_name(){
              $data = $this->input->post('term');
              $q = strtolower($data);
//              echo json_encode();
        echo  $this->coach->getCoachajax($q);

  }

}
