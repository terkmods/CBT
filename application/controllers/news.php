<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class News extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model', 'myusers');
        $this->load->model('stadium_model', 'mystadium');
        $this->load->model('coach_model', 'coach');
        $this->load->model('news_model', 'news');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'html', 'form'));
    }

    function index() {
        
    }

    function showallNews($stId) {
        $data = $this->news->postAllnews($stId);
        echo json_encode($data);
    }

    function submit_news() {
//        $config['upload_path'] = "./asset/images/upload";
//        $config['allowed_types'] = '*';
//        $config['max_size'] = '10000';
//
//        //$userid = $this->session->userdata('id');
//        $this->load->library('upload', $config);
//        if (!$this->upload->do_upload()) {
//            $error = array('error' => $this->upload->display_errors());
//
//            $this->load->view('upload_form', $error);
//        } else {
//
//            $upload = $this->upload->data();
//        }
        $data = array(
            'title' => $this->input->post('news_title'),
            'an_text' => stripcslashes($this->input->post('news_content')),
            'user_id' => $this->session->userdata('id'),
                'stadium_id'=> $this->input->post('stadium_id'),
            'type'=>  $this->input->post('typeA')
           // 'path_news' => $upload['file_name']
                
        );
        $this->db->insert('announcement', $data);
        //$datasend = $this->news->postAllnews($this->input->post('stadium_id'));
        
        redirect('stadium/updatestadium/' . $this->input->post('stadium_id').'?type=4');
        
    }
    function editnews($id){
       
       $data =  $this->news->getNewsSelect(id);
         //redirect('stadium/updatestadium/' . $id_new.'?type=6');
    }

}
