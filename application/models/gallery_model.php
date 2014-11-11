<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Gallery_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function getGallery($stId){
        $cause = array(
          'stadium_id'=>$stId  
        );
    $query=   $this->db->get_where('picture_stadium',$cause);
    return $query->result();
    
    }
    
    function getGalleryUser($usId){
        $cause = array(
          'user_id'=>$usId  
        );
    $query=   $this->db->get_where('gallery_user',$cause);
    return $query->result();
    
    }
}