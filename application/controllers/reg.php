<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class reg extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model', 'users');
        $this->load->model('owner_model', 'owners');
        $this->load->library('session');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('Register');
    }

    public function register() {
        $typereg = $this->input->post('typeuser');
          $rs = $this->users->showIdMax();

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
                'date' => $this->users->getdate()
            );

        if ($typereg == "owner") {
            $this->db->insert("User", $data);

            $rs = $this->owners->showIdOwnerMax();

            foreach ($rs as $r) {
                $maxowner = $r['owner_id'] + "1";
            }

            $dataowner = array(
                'user_id' => $max,
                'owner_id' => $maxowner,
                'authenowner_status' => 'no'
            );
            $datasend = array(
                'owner_id' => $maxowner,
                'id' => $max,
                'type' => $this->input->post('typeuser'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('pass'),
                'phone' => $this->input->post('tel'),
                'status' => 'ok',
                'profile_url' => $this->input->post('url'),
                'authenowner_status' => 'no',
                'path_pic'=> $this->input->post('path'), // แก้ตอนอัพโหลดรูปด้วยจ้าา เปลี่ยน path นะ
                'logged'=> TRUE
            );
            $this->db->insert("owner", $dataowner);
            $this->session->set_userdata($datasend);
            
            $this->load->view('index');
            
        } else if ($typereg == "user") {
              $datasend = array(
                
                'id' => $max,
                'type' => $this->input->post('typeuser'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('pass'),
                'phone' => $this->input->post('tel'),
                'status' => 'ok',
                'profile_url' => $this->input->post('url'),
                'authenowner_status' => 'no',
                'path_pic'=> $this->input->post('path'), // แก้ตอนอัพโหลดรูปด้วยจ้าา เปลี่ยน path นะ
                'logged'=> TRUE
            );
          
            $this->db->insert("User", $data);
            $this->session->set_userdata($datasend);
            $this->load->view('index');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php 
 
 * 
 * function regis() {
        if ($this->input->post("SIGN_UP") != null) {

            $rs = $this->Users->showIdMax();

            foreach ($rs as $r) {
                $max = $r['member_id'] + "1";
            }

            $ar = array(
                "member_id" => $max,
                "gender" => $this->input->post("sex"),
                "member_fname" => $this->input->post("firstName"),
                "member_lname" => $this->input->post("lastName"),
                "citizen_id" => $this->input->post("citizenID"),
                "passport_id" => $this->input->post("passportID"),
                "member_birthDate" => $this->input->post("birthDate"),
                "member_phone" => $this->input->post("phone"),
                "house_no" => $this->input->post("houseNo"),
                "village_no" => $this->input->post("villageNo"),
                "lane" => $this->input->post("lane"),
                "alley" => $this->input->post("alley"),
                "road" => $this->input->post("road"),
                "sub_district" => $this->input->post("subDistrict"),
                "district" => $this->input->post("district"),
                "province" => $this->input->post("province"),
                "city" => $this->input->post("city"),
                "state" => $this->input->post("state"),
                "country" => $this->input->post("country"),
                "zip" => $this->input->post("postalCode"),
                "driverlicense_id" => $this->input->post("driverslicenseID"),
                "driverlicense_type" => $this->input->post("driverslicensetype"),
                "driverlicense_issueDate" => $this->input->post("issueDate"),
                "driverlicense_expireDate" => $this->input->post("expireDate"),
                "driverlicense_issuedAt" => $this->input->post("issuedAt"),
                "member_email" => $this->input->post("email"),
                "member_password" => $this->input->post("password"),
                "member_status" => "",
                "active" => "yes");

            $this->db->insert("member", $ar);
            //redirect("index.php/user/member","refresh");
            redirect("user/homepage","refresh");
            //$this->load->view('index');
        }
 */
