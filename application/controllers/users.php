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
           $this->load->library('googlemaps');
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

            $this->load->view('index', $data);
        } else {

            redirect(base_url());
        }
    }

    public function get_bookings($equipment_id, $date) {
        $data = $this->booking->get_bookings($equipment_id, $date);
        echo json_encode($data);
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
            // print_r($check);
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
                
                $userid = $data['id'];
                $ownerid = $this->getOwnerid($userid);
                if($ownerid!=null){
                $data['stadium'] = $this->mystadium->getstadium($ownerid);
                //print_r($data['stadium']);
                }
            }
            echo $data['role'];
            if ($data['role'] == "owner") {
                redirect('stadium');
            }
            $this->session->set_userdata($data);
            redirect('home');
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
      function getOwnerid($userid) {

        if ($userid != null) {
            $query = $this->db->query('SELECT owner.owner_id FROM owner join User  WHERE owner.user_id = User.user_id and User.user_id = ' . $userid)->result();
            foreach ($query as $r) {
                $owner_id = $r->owner_id;
            }
            return $owner_id;
        } else {
            echo 'fail no userid';
        }
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
            $this->load->view('feeds', $datasend);
            //print_r($datasend);
        } else {
            redirect('index.php');
        }
    }

    public function coachProfile($id) {
        $profile = array(
            'data' => $this->myusers->getCoach($id)
        );


        $this->load->view('coach_view', $profile);
    }

    public function profile($id) {
        $profile = array(
            'data' => $this->myusers->getUser($id),
                //'map' => $this->geolocation()
        );


        $this->load->view('User_view', $profile);
    }

    public function edituser($id) {
        $profile = array(
            'data' => $this->myusers->getUser($id)
        );
        //print_r($profile['data']);
        $this->load->view("edit_user", $profile);
    }

    public function updateuser($userId) {
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

    function uploaduserprofile($Id) {
        $config['upload_path'] = "./asset/images/profilepic";
        $config['allowed_types'] = '*';
        $config['max_size'] = '10000';

        //$userid = $this->session->userdata('id');
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } else {

            $upload = $this->upload->data();
        }
        $data = array(
            'profilepic_path' => $upload['file_name']
        );
        $this->db->update('User', $data, array('user_id' => $Id));
        redirect('users/edituser/' . $Id);
    }

    function uploadevidence() {
        $config['upload_path'] = "./asset/images/evidence";
        $config['allowed_types'] = '*';
        $config['max_size'] = '10000';

        //$userid = $this->session->userdata('id');
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } else {

            $upload = $this->upload->data();
        }
        $data = array(
            'authenowner_path' => $upload['file_name']
        );
        $owner = $this->myusers->getOwnerId($this->session->userdata('id'));
        print_r($owner);
        print_r($upload['file_name']);
        $this->db->update('owner', $data, array('owner_id' => $owner->owner_id));
        $this->session->set_flashdata('msg', 'upload Complete');
        redirect('stadium');
    }

    function coach() {
        $this->load->view('coach_view');
    }

    function addBlacklist() {
        $userId = $this->input->post('idsend');
        $reason = $this->input->post('reasonsend');
        $data = array(
            'status' => 'blacklist',
            'reason' => $reason
        );
        $datasend = array(
            'stadium_id' => $this->input->post('stsend'),
            'user_id' => $this->input->post('idsend'),
            'reason' => $reason
        );
        $this->db->update('User', $data, array('user_id' => $userId));
        $this->db->insert('blacklist', $datasend);
        echo 'complete';
    }

    function addWarning() {
        $userId = $this->input->post('idsend');
        $reason = $this->input->post('reasonsend');
        $data = array(
            'status' => 'warning',
            'reason' => $reason
        );
        $this->db->update('User', $data, array('user_id' => $userId));
        echo 'complete';
    }

    function addActive() {
        $userId = $this->input->post('idsend');
        $reason = $this->input->post('reasonsend');
        $data = array(
            'status' => 'ok',
            'reason' => $reason
        );
        $this->db->update('User', $data, array('user_id' => $userId));

        echo 'complete';
    }

    function geolocation() {
        
     

        $config = array();
        $config['center'] = 'auto';
        
        $config['onboundschanged'] = 'if (!centreGot) {
	var mapCentre = map.getCenter();
	marker_0.setOptions({
		position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()),
                animation: google.maps.Animation.DROP
	}
        );
}

centreGot = true;';
        $this->googlemaps->initialize($config);

// set up the marker ready for positioning 
// once we know the users location
        $marker = array();
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();
        return $data['map'];
    }
    
    
     function test() {
        $this->load->view('feeds');
    }
    
    
    
    

}

?>
