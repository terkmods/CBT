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
        
        redirect('stadium/announcement/' . $this->input->post('stadium_id'));
        
    }
    function editnews($id){
       
       $data['dja'] =  $this->news->getNewsSelect($id);
//       print_r($data['dja']);
       $this->load->view('editnews_view',$data);
         //redirect('stadium/updatestadium/' . $id_new.'?type=6');
    }
    function  delete_news(){
        $id = $this->input->post('id');
       echo  $this->db->delete('announcement',array('news_id' => $id));
    }
    public function pagination_demo($page=1){
  
        $this->load->library('pagination');
        $this->load->library('app/pagination');
       // $this->load->language("message");
        try
        {
            $pagingConfig   = $this->paginationlib->initPagination("/news/pagination-demo",$this->news->get_count());
            
            $this->data["pagination_helper"]   = $this->pagination;
            $this->data["messages"] = $this->news->get_by_range((($page-1) * $pagingConfig['per_page']),$pagingConfig['per_page']);
            
            return $this->view();             
        }
        catch (Exception $err)
        {
            log_message("error", $err->getMessage());
            return show_error($err->getMessage());
        }
    }
    function  update_new($stId){
                $data = array(
            'title' => $this->input->post('news_title'),
            'an_text' => stripcslashes($this->input->post('news_content')),
            
               
            'type'=>  $this->input->post('typeA')
           // 'path_news' => $upload['file_name']
                
        );
                
                        $this->db->where('news_id', $stId);
        $this->db->update('announcement', $data); 
        redirect('stadium/announcement/' . $this->input->post('st_id'));
    }

}
