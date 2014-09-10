<?php

class Admin extends CI_Controller {
    function __construct() {
    parent::__construct();
            $this->load->model('user_model', 'myusers');
        $this->load->model('stadium_model', 'mystadium');
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
         $owner = array(
               'data'=> $this->myusers->getOwner()
                );
                //print_r($owner);
       $this->load->view('admin_owner',$owner);
    }
    
}
?>
