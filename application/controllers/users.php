<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model', 'myusers');
        $this->load->model('stadium_model', 'mystadium');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'html', 'form'));
    }

    function index() {
        if ($this->session->userdata('logged')) {
            // rediect('users/login');
            $data = array(
                'email' => $this->session->userdata('email'),
                'url' => $this->session->userdata('url'),
                'path_pic' => $this->session->userdata('path_pic'),
                'id' => $this->session->userdata('id'),
                'role' => $this->session->userdata('role'),
            );

            $this->load->view('index');
        } else {

            redirect(base_url());
        }
    }

    function login() {
        $this->load->view('login');
    }

    function testshow() {
        $email = 'owner';
        $password = 1234;
        $query = $this->db->get_where('User', array('email' => $email, 'password' => $password))->result();

        foreach ($query as $row) {
            echo $row->email;
            echo $row->password;
        }
    }

    function dologin() {

        $this->form_validation->set_error_delimiters('<font color=red>', '</font>');
        //if ($this->input->post('submit')) {
        $email = $this->input->post('email');
        $password = $this->input->post('pass');

        $check = $this->myusers->login($email, $password);

        if ($check != null) {
            foreach ($check as $row) {

                $data = array(
                    'email' => $row->email,
                    'password' => $row->password,
                    'path_pic' => $row->profilepic_path,
                    'profile_url' => $row->profile_url,
                    'id' => $row->user_id,
                    'role' => $row->type,
                    'logged' => TRUE
                );
                $this->session->set_userdata($data);
            }



            redirect('users');
        } else {
            $this->session->set_flashdata('msg_error', 'รหัสผ่านหรืออีเมลไม่ถูกต้องกรุณาตรวจสอบ');
            redirect('users');
        }

        //} else {
        // redirect('users/login');
    }

    //}

    function logout() {
        $this->session->sess_destroy();
        redirect('index.php/users');
    }

    public function register() {
        $this->load->view('register');

        $rs = $this->myusers->showIdMax();

        foreach ($rs as $r) {
            $max = $r['user_id'] + "1";
        }

        $data = array(
            'user_id' => $max,
            'type' => $this->input->post('typeuser'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('pass'),
            'phone' => $this->input->post('tel'),
            'status' => 'ok',
            'profile_url' => $this->input->post('url'),
            'date' => $this->myusers->getdate()
        );


        $this->db->insert("User", $data);
        echo "success";
    }

    function feed() {
        if ($this->session->userdata('logged')) {
            $datasend  ['stadium'] = $this->mystadium->getallstadium();
            

            $this->load->view('feeds', $datasend);
        } else {
           redirect('index.php');
        }
    }
    
     public function profile(){
         $profile = array(
               'data'=> $this->myusers->getUser()
                );
         
       
        $this->load->view('User_view',$profile);
    }

}

?>
