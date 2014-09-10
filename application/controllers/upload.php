<?php

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        $this->load->view('upload_form', array('error' => ' '));
    }

    function do_upload() {
        $config['upload_path'] = "/home/backeyefin/domains/backeyefinder.in.th/public_html/cbt/asset/images/stadiumpic";
        $config['allowed_types'] = '*';
        $config['max_size'] = '10000';

        //var_dump(is_dir('/home/backeyefin/domains/backeyefinder.in.th/public_html/cbt/test')); 
        var_dump($_SERVER['SCRIPT_FILENAME']); 

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success', $data);
        }
    }

    

}

?>