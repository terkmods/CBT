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

            $this->load->view('index',$data);
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
            print_r($check);
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

        $this->session->set_userdata($data);
        $this->db->insert("User", $data);
        echo "success";
        $this->load->view('register');
    }

    function feed() {
        if ($this->session->userdata('logged')) {
            $datasend ['stadium'] = $this->mystadium->getallstadium();
            $datasend ['province'] = $this->mystadium->getprovince();
            $datasend ['district'] = $this->mystadium->getdistrict();
            
            $datasend ['total'] = $this->mystadium->getTotalcourt($datasend['stadium']->stadium_id); 
            $this->load->view('feeds', $datasend);
        } else {
            redirect('index.php');
        }
    }

    public function profile($id) {
        $profile = array(
            'data' => $this->myusers->getUser($id)
        );


        $this->load->view('User_view', $profile);
    }
public function edituser($id) {
        $profile = array(
            'data' => $this->myusers->getUser($id)
        );
        
        $this->load->view("edit_user",$profile);
    }

    public function updateuser($userId) {
         $config['upload_path'] = "./asset/images/profilepic";
        $config['allowed_types'] = '*';
        $config['max_size'] = '10000';
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload()) {
            echo '3444';
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            //$this->load->view('edituser', $error);
        } else {

            $upload = $this->upload->data();
        }
        $data = array(
            'user_id' => $userId,
            
            'email' => $this->input->post('email'),
            'status' => $this->input->post('status'),
            'profile_url' => $this->input->post('profile_url'),
            'profilepic_path' => $upload['file_name'],
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
            'instagram' => $this->input->post('instagram'),
            'aboutme' => $this->input->post('about'),
            'type' => $this->input->post('type')
        );
        $this->db->update('User', $data, array('user_id' => $userId));
        $this->edituser($userId);
        
    }
    
    


}

?>
