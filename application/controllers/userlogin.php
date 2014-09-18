<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class userlogin extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    	public function login()
	{
		$this->load->view('template/head');
                $this->load->view('login');
                $this->load->view('template/footer');
	}   

}
?>

