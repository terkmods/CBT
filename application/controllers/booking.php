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
        $stId = $this->input->post('stId');
        $n = $this->input->post('i');
        $day = substr($date,0,3);
       
        if($day == "Sat"){
            $cause = array('type'=>"เสาร์-อาทิต",'stadium_id'=>$stId);
            $cause2 = array('stadium_id'=>$stId);
            $time2 = $this->db->get_where('stadium_time',$cause)->row();
            $court = $this->db->get_where('court',$cause2)->result_array();
//            echo $time2->open_time;
//            echo $time2->end_time;

            $st = $time2->open_time;
            $et = $time2->end_time;
           
           
            $st = substr($st, 0,1);
            for ($st; $st <= $et; $st++){
                echo '<tr>';
                echo '<td>'.$st.':00</td>';
                for ($i=0;$i<$n;$i++){
                echo '<td><input type="hidden" name="time[]" value="'.$st.'">'
                        . ' <button class="badge-badge-success"> ว่าง</button></td>';
                }
                echo '</tr>';
                //echo 'in loop';
            }
           // echo $stId;
        }else if ($day == "Sun"){
          $cause = array('type'=>"เสาร์-อาทิต",'stadium_id'=>$stId);
            $time2 = $this->db->get_where('stadium_time',$cause)->row();
//            echo $time2->open_time;
//            echo $time2->end_time;
            
            $st = $time2->open_time;
            $et = $time2->end_time;
            //echo $st;
            $st = substr($st, 0,1);
            for ($st; $st <= $et; $st = $st+30){
                echo '<tr>';
                echo '<td>'.$st.':00</td>';
                echo '</tr>';
                //echo 'in loop';
            }
        }
        else{
            $cause = array('type'=>"ทุกวัน",'stadium_id'=>$stId);
     
            $time2 = $this->db->get_where('stadium_time',$cause)->row();
//            echo $time2->open_time;
//            echo $time2->end_time;
            
            $st = $time2->open_time;
            $et = $time2->end_time;
            //echo $st;
            $st = substr($st, 0,1);
            for ($st; $st <= $et; $st++){
                echo '<tr>';
                echo '<td>'.$st.'.00'.'</td>';
                echo '</tr>';
                //echo 'in loop';
            }
        }
        
        
    }
    function reserve(){
        $this->showTablebook();
        $this->load->view('booking_view');
    }

}
