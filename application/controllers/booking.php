<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class booking extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('stadium_model', 'mystadium');
        $this->load->library('session');
    }
    
    function showTablebook(){
        $date = $this->input->post('date');
        
        $day = substr($date,0,3);
        if($day == "Sat"){
            $cause = array('type'=>"เสาร์-อาทิตย์");
            $time = $this->db->get_where('stadium_time',$cause)->row();
            echo $time;
        }else if ($day == "Sun"){
            
        }
        else{
            
        }
        
        
    }

}
