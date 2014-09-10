<?php

class Admin extends CI_Controller {
    function __construct() {
    parent::__construct();
    }
    
    public function index(){
        $this->load->view('admin_index');
    }
    public function test(){
        echo 'hello';
    }
}
?>
