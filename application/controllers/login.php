<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user', 'users');
       $this->load->library('session');
    }

    public function logins() {
        $email = $this->input->post('email');
        $password = $this->input->post('pass');

        $data = $this->users->login($email, $password);

        if ($data == NULL) {
            $this->load->view('index', $msg = 'fail');
        } else {
            $session = array('email' => $data->email, 'username' => $data->username);
        }

        $this->session->set_userdata($session);
        $this->load->view('index');
    }

}

?>