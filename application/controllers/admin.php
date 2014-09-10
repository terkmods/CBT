<?php

class Admin extends CI_Controller {
    function __construct() {
    parent::__construct();
    }
    
    public function index(){
        $this->load->view('admin_index');
    }
    public function stadium(){
        $this->load->view('admin_stadium');
    }
     public function user(){
        $this->load->view('admin_user');
    }
    public function owner(){
        $this->load->view('admin_owner');
    }
    
}
?>
