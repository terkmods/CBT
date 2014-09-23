<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class stadium extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('stadium_model', 'mystadium');
        $this->load->library('session');
    }

    function index() {
        if ($this->session->userdata('logged')) {

            $userid = $this->session->userdata('id');
            $ownerid = $this->getOwnerid($userid);


            $datasend = array(
                'ow' => $this->getOwner($userid),
                'stadium' => $this->mystadium->getstadium($ownerid)
            );
            $this->load->view("mg", $datasend);
        } else {
            echo 'session no';
        }
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

    function getOwner($userid) {

        if ($userid != null) {
            $query = $this->db->query('SELECT owner.owner_id,owner.authenowner_path,owner.authenowner_status FROM owner join User  '
                            . 'WHERE owner.user_id = User.user_id and User.user_id = ' . $userid)->row();
            // print_r($query);
            return $query;
        } else {
            echo 'fail no userid';
        }
    }

    function addstadium() {
        $userid = $this->session->userdata('id'); // เรียก user_id จาก session 
        $rs = $this->mystadium->showIdMax();
        $facility = $this->input->post('facility');
        $fullurl = 'www.cbtonline.com/' . $this->input->post('url') . '';
        foreach ($rs as $r) {
            $maxstadium = $r['stadium_id'] + "1";
        }

        if ($userid != null) {

            $data = array(
                'owner_id' => $this->getOwnerid($userid),
                'stadium_url' => $fullurl,
                'stadium_id' => $maxstadium,
                'stadium_name' => $this->input->post('name'),
                'about_stadium' => $this->input->post('about'),
                'address_no' => $this->input->post('no'),
                'soi' => $this->input->post('soi'),
                'road' => $this->input->post('road'),
                'district' => $this->input->post('district'),
                'subdistrict' => $this->input->post('subdistrict'),
                'province' => $this->input->post('province'),
                'zipcode' => $this->input->post('zip'),
                'rule' => $this->input->post('rule'),
                'stadium_display' => 1,
            );
            $data2 = array(
                'stadium_id' => $maxstadium,
                'open_time' => $this->input->post('opentime'),
                'end_time' => $this->input->post('endtime'),
                'type' => $this->input->post('typedate')
            );
            //print_r($data2);
            $this->db->insert("stadium", $data);
            $this->mystadium->addtime($data2, $data['stadium_id']);
            $this->mystadium->addfacility($facility, $data['stadium_id']);
            $this->session->set_flashdata('msg', 'เพิ่มสนามเรียบร้อย');
            redirect('stadium');
        } else {
            echo 'no user id ja addstadium';
        }
    }

    function updatestadium($id) {

        //echo $id;
        $data = array(
            'data' => $this->mystadium->setstadium($id), //row
            'facility' => $this->mystadium->showfacility($id), //result_array
            'showtime' => $this->mystadium->getTime($id), //result_array  
            'court' => $this->mystadium->gettableCourt($id), //result_array  getTotalcourt
            'total' => $this->mystadium->getTotalcourt($id) //result_array  getTotalcourt
        );

        //print_r($data['total']);
        //echo $this->mystadium->settime($id);
        // print_r($data['showtime']);
        $this->load->view("editstadium", $data);
    }

    function updatetime($stId) {

        $data = array(
            'stadium_id' => $stId,
            'open_time' => $this->input->post('opentime'),
            'end_time' => $this->input->post('endtime'),
            'type' => $this->input->post('type')
        );

        //echo $data['type']['0'];
        for ($r = 0; $r < 2; $r++) {
            $sql = 'UPDATE  `backeyefin_cbt`.`stadium_time` SET  `open_time` =  ' . $data['open_time'][$r] . ',
                `end_time` =  ' . $data['end_time'][$r] . '
                 WHERE `stadium_time`.`stadium_id` = ' . $stId . ' And type ="' . $data['type'][$r] . '"';
            $this->db->query($sql);
        }
        $this->updatestadium($stId);
    }

    function editstadium($stId) {


        $userid = $this->session->userdata('id');

        $facility = $this->input->post('facility');
        $fullurl = 'www.cbtonline.com/' . $this->input->post('url') . '';




        $data = array(
            'owner_id' => $this->getOwnerid($userid),
            'stadium_url' => $fullurl,
            'stadium_name' => $this->input->post('name'),
            'about_stadium' => $this->input->post('about'),
            'address_no' => $this->input->post('no'),
            'soi' => $this->input->post('soi'),
            'road' => $this->input->post('road'),
            'district' => $this->input->post('district'),
            'subdistrict' => $this->input->post('subdistrict'),
            'province' => $this->input->post('province'),
            'zipcode' => $this->input->post('zip'),
            'rule' => $this->input->post('rule'),
            'stadium_display' => 1
        );

        $this->db->update('stadium', $data, array('stadium_id' => $stId));
        $this->updatestadium($stId);
    }

    function deletestadium() {

        $del = $this->input->post('num');
        if ($del != null) {
            $check = $this->mystadium->delstadium($del);

            if ($check != null) {
                $this->session->set_flashdata('msg', 'ลบสนามเรียบร้อย');
                redirect('index.php/stadium');
            }
        } else {

            $this->session->set_flashdata('msg', 'กรุณาเลือกสนาม');
            redirect('stadium');
        }
    }

    function delcourt() {
        $id = $this->uri->segment(3);
        $stId = $this->uri->segment(4);
        $this->db->delete('court', array('court_id' => $id));
        $this->session->set_flashdata('msg', 'ลบสนามเรียบร้อย');

        redirect('stadium/updatestadium/' . $stId . '#addcourt');
    }

    function test() {
        $facility = $this->input->post('facility');
        $this->mystadium->addfacility($facility, 3);
        print_r($facility);
    }

    function profile($stId) {
        $st = array('data' => $this->mystadium->getstadiumprofile($stId)
        );
        // print_r($st);
        $this->load->view('stadium_view', $st);
    }

    function uploadcoverphoto($stId) {
        $config['upload_path'
                ] = "./asset/images/stadiumpic";
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
            'cover_path' => $upload['file_name']
        );
        $this->db->update('stadium', $data, array('stadium_id' => $stId));
        redirect('stadium/profile/' . $stId);
    }

    function uploadstadiumprofile($stId) {
        $config['upload_path'] = "./asset/images/stadiumpic";
        $config['allowed_types'] = '*';
        $config['max_size'] = '10000';

        //$userid = $this->session->userdata('id');
        $this->load->library
                ('upload', $config);
        if (!$this->upload->do_upload()) {
            $error = array(
                'error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } else {

            $upload = $this->upload->data();
        }

        $data = array('stadium_path' => $upload['file_name']
        );
        $this->db->update('stadium', $data, array(
            'stadium_id' => $stId));
        redirect('stadium/updatestadium/' . $stId);
    }

    function addcourt($id) {

        $rs = $this->mystadium->showIdCourtMax();
        foreach ($rs as $r) {
            $maxstadium = $r['court_id'] + "1";
        }
        //$courtid = $this->mystadium->getcourt($id);
        // echo $id;
        $data = array('court_id' => $maxstadium,
            'stadium_id' => $id,
            'court_name' => $this->input->post('courtname'),
            'type' => $this->input->post('type')
        );
        $this->db->insert("court", $data);
        $dataprice = array(
            'court_id' => $maxstadium,
            'm_f_price' => $this->input->post('price1'),
            'm_f' => $this->input->post('typedate1'),
            'st_sun_price' => $this->input->post('price2'),
            'st_sun' => $this->input->post('typedate2')
        );
        // print_r($dataprice);
        $this->db->update("court", $dataprice, array('court_id' => $maxstadium));
        // $this->mystadium->addcourttime($dataprice, $data['stadium_id']);
        $this->session->set_flashdata('msg', 'เพิ่มคอร์ดเรียบร้อย');
        redirect('stadium/updatestadium/' . $id);
    }
    
    function compare(){
        $data = $this->input->post('compare');
       // print_r($data);
//        $sql = "select * form stadium where stadium_id =" $data
      
        $detail['comparedata'] = $this->mystadium->showcompare($data);
        $detail['time'] = $this->mystadium->showtime($data);
        //$detail['price'] = $this->mystadium->showprice($data);
        
        //print_r($detail['time']);
        $this->load->view("compare",$detail);        
    }

}

?>
       