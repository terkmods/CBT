<?php

class Admin extends CI_Controller {
    function __construct() {
    parent::__construct();
            $this->load->model('user_model', 'myusers');           
        $this->load->model('stadium_model', 'mystadium');
         $this->load->helper('date');
    }
    
    public function index(){
        $this->load->view('admin_login');
    }
    public function stadium(){
        $stadium = array(
                'data'=> $this->myusers->getStadium()
                );
        $this->load->view('admin_stadium',$stadium);
    }
     public function user(){
         $user = array(
                'data'=> $this->myusers->getUserAdmin()
                );
        $this->load->view('admin_user',$user);
    }
 
       public function owner(){
         $owner = array(
               'data'=> $this->myusers->getOwner()
                );
               
       $this->load->view('admin_owner',$owner);
    }
    
    public function owner_ap(){
         $owner = array(
               'data'=> $this->myusers->getOwner_AP()
                );
//                print_r($owner);
       $this->load->view('admin_owner_ap',$owner);
    }
    
     public function blacklist(){
         $blacklist = array(
               'data'=> $this->myusers->getBlacklist()
                );
        $this->load->view('admin_blacklist',$blacklist);
    }
    public function approve(){
        $status = $this->input->post('change');
        $reason = $this->input->post('reason');
        $ownerid = $this->input->post('owid');
        $today = date('Y-m-d');
        $data = array(
            'authenowner_status' => $status,
                'autherowner_date' =>$today,
            'reason'=>$reason
        );
        
         $this->db->update('owner', $data, array('owner_id' => $ownerid));
         
         if($status==2){
                    $datastadium = array(
            'stadium_display' => 1
        );
             $this->db->update('stadium', $datastadium, array('owner_id' => $ownerid)); 
         }
          if($status==2){
                    $datastadium = array(
            'stadium_display' => 1
        );
             $this->db->update('stadium', $datastadium, array('owner_id' => $ownerid)); 
         } if($status==99){
                    $datastadium = array(
            'stadium_display' => 0
        );
             $this->db->update('stadium', $datastadium, array('owner_id' => $ownerid)); 
         }
    }
    
}
?>
