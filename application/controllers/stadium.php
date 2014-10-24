<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class stadium extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('stadium_model', 'mystadium');
        $this->load->model('user_model', 'myusers');
        $this->load->model('coach_model', 'mycoach');
        $this->load->model('news_model', 'news');
        $this->load->model('gallery_model', 'img');
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
            $stID = null;
            foreach ($datasend['stadium'] as $d) {
                $stID[] = $d->stadium_id;
            }
            if ($stID != null) {

                foreach ($stID as $r) {
                    $totalcourt[] = $this->mystadium->getTotalcourt($r);
                }
                $x;
                for ($i = 0; $i < sizeof($stID); $i++) {
                    if ($totalcourt[$i]->courtnum != 0) {
                        $this->db->update('stadium', array('court_check' => 1), array('stadium_id' => $stID[$i]));
                    } else if ($totalcourt[$i]->courtnum == 0) {
                        $this->db->update('stadium', array('court_check' => 0), array('stadium_id' => $stID[$i]));
                    }
                    $datasend['total'] = $totalcourt;
                }
                //print_r($x);
            } else {
                $this->session->set_flashdata('msg', 'กรุณาเพิ่มสนาม');
            }

            //print_r($totalcourt);


            $this->load->view("mg", $datasend);
            //print_r($datasend);
        } else {
            echo 'session no';
        }
    }

    function add() {
        if ($this->session->userdata('logged')) {

            $userid = $this->session->userdata('id');
            $ownerid = $this->getOwnerid($userid);


            $datasend = array(
                'ow' => $this->getOwner($userid),
                'stadium' => $this->mystadium->getstadium($ownerid)
            );




            $this->load->view("add_stadium", $datasend);
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
            $this->session->set_flashdata('msg', 'Successful');
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
            'total' => $this->mystadium->getTotalcourt($id), //result_array  getTotalcourt
            'blacklist' => $this->myusers->get_blacklist($id),
            'coach' => $this->mycoach->get_all_coach(),
            'all_news' => $this->news->getallNews($id),
            'img'=>  $this->img->getGallery($id)
           
        );

        //print_r($data['total']);
        //echo $this->mystadium->settime($id);
        // print_r($data['showtime']);
        $this->load->view("editstadium", $data);
    }

    function locatestadium() {
        $this->load->library('googlemaps');

        $config['center'] = '13.7500, 100.4833';
        $config['zoom'] = '8';
        $config['placesAutocompleteInputID'] = 'address';
        $config['placesAutocompleteBoundsMap'] = TRUE; // set results biased towards the maps viewport
        $this->googlemaps->initialize($config);

        $marker['marker'] = array();
        $marker['position'] = '13.7500, 100.4833';
        $marker['draggable'] = true;
        $marker['ondragend'] = 'updateDatabase(event.latLng.lat(), event.latLng.lng());';
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();



        return $data['map'];
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

        redirect('stadium/updatestadium/' . $stId . '?type=addcourt');
    }

    function test() {
        $facility = $this->input->post('facility');
        $this->mystadium->addfacility($facility, 3);
        print_r($facility);
    }

    function profile($stId) {
         $this->load->library('pagination');
                 $total_rows = $this->news->get_count($stId);
        $config['per_page'] = 10;

        $config['base_url'] = base_url() . 'stadium/profile/'.$stId;
        $config['total_rows'] = $total_rows;
        $config['uri_segment'] = 4;

//pagination customization using bootstrap styles
		$config['full_tag_open'] = ' <ul class="pagination pagination-sm pull-right ">';
		$config['full_tag_close'] = '</ul><!--pagination-->';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
        $uri = $this->uri->segment(4);
        if($uri == null){
            $uri=0;
        }
        $this->pagination->initialize($config);
        $st = array('data' => $this->mystadium->getstadiumprofile($stId),
            'facility' => $this->mystadium->showfacility($stId),
            'court' => $this->mystadium->gettableCourt($stId), //result_array  getTotalcourt
            'total' => $this->mystadium->getTotalcourt($stId),
            'floor' => $this->mystadium->getfloor($stId),
            'time' => $this->mystadium->gettimeprofile($stId),
            'annouc' => $this->news->NewsView($stId,$config['per_page'],  $uri)
                //  'user' => $this->myusers->getUser($id)
        );

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
        redirect('stadium/updatestadium/' . $id.'?type=1');
    }

    function compare() {
        $data = $this->input->post('compare');
        // print_r($data);
//        $sql = "select * form stadium where stadium_id =" $data

        $detail['comparedata'] = $this->mystadium->showcompare($data);
        $detail['time'] = $this->mystadium->showtime($data);
        
        //$detail['price'] = $this->mystadium->showprice($data);
        //print_r($detail['time']);
        $this->load->view("compare", $detail);
    }

    function historyBooking() {
        $userid = $this->session->userdata('id');
        $ownerid = $this->getOwnerid($userid);


        $datasend = array(
            'ow' => $this->getOwner($userid),
            'stadium' => $this->mystadium->getstadium($ownerid)
        );
        // print_r($datasend);
        $this->load->view('history_stadium_booking', $datasend);
    }

    function search() {
        $data = array($this->input->post('optionsRadios'), $this->input->post('value2'), $this->input->post('value3'));
        $detail['result_Search'] = $this->mystadium->showSearch($data);
        //print_r($detail);
        $this->load->view('result_search', $detail);
    }
    
    function allStadium(){
        if ($this->session->userdata('logged')) {
            $datasend ['stadium'] = $this->mystadium->getallstadium();
            $datasend ['province'] = $this->mystadium->getprovince();
            $datasend ['district'] = $this->mystadium->getdistrict();
            $this->load->view('search', $datasend);
            //print_r($datasend);
        } else {
            redirect('index.php');
        }
        
    }

    function addcomment($sId){
        $data = array(
            'text' => $this->input->post('content'),
            'user_id' => $this->session->userdata('id'),
                'stadium_id' => $sId
        );

        
        
        $this->db->insert('comment', $data); 
        $this->showcomment($sId);
        echo $this->session->userdata('id').' : OK';
    }
    function showcomment($sId){
        $data['comment'] = $this->mystadium->getComment($sId);
        return $data['comment'];
    }
    function uploadGallery($stId) {
        $config['upload_path'
                ] = "./asset/images/upload";
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
            'picstadium_path' => $upload['file_name'],
            'stadium_id'=>$stId
        );
//        $this->db->update('picture_stadium', $data, array('stadium_id' => $stId));
        $this->db->insert("picture_stadium", $data);
        redirect('stadium/updatestadium/' . $stId. '?type=gallery');
    }
    function updateLatLng($stId){
      $data = array(
          'lat' =>$this->input->post('newLat'),
            'long'=>$this->input->post('newLng')
        );
        $x = $this->db->update('stadium', $data, array('stadium_id' => $stId));
        echo $x;
    }
    

}
    


?>
       
