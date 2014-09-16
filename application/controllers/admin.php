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
        $stadium = array(
                'data'=> $this->myusers->getStadium()
                );
        $this->load->view('admin_stadium',$stadium);
    }
     public function user(){
         $user = array(
                'data'=> $this->myusers->getUser()
                );
        $this->load->view('admin_user',$user);
    }
 
       public function owner(){
         $owner = array(
               'data'=> $this->myusers->getOwner()
                );
               
       $this->load->view('admin_owner',$owner);
    }
    
     public function blacklist(){
        $this->load->view('admin_blacklist');
    }
    
}
?>
