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
    
      public function updatecoach($userId) {
        $data = array(
            'user_id' => $userId,
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'gender' => $this->input->post('gender'),
            'birthdate' => $this->input->post('birthdate'),
            'Style' => $this->input->post('style'),
            'club' => $this->input->post('club'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'facebook' => $this->input->post('facebook'),
            'twitter' => $this->input->post('twitter'),
            'googleplus' => $this->input->post('googleplus'),
            'instagram' => $this->input->post('instargram'),
            'aboutme' => $this->input->post('aboutme')
        );
        $this->db->update('User', $data, array('user_id' => $userId));
        $this->edituser($userId);
    }

}
