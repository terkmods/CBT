<?php
class CheckAuth{
	var $CI = null;
	public function __construct(){
		$this->CI =& get_instance(); //โหลด CI 
	}
        
	/*public function check(){
		$controller = $this->CI->router->class;
		
		$part = $this->CI->uri->segment(1); // รับค่าจาก URL 
		/*$base_url = $this->CI->config->config['base_url'];
                
		if ($part == 'manage' && $controller!="admin"){
			if ($this->CI->session->userdata('admin_id') == ''){
				redirect($base_url."/manage/admin");
			}
		}
	}*/
}
?>