<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Initialize the pagination rules for cities page 
 * @return Pagination
 */
class Paginationlib {

    //put your code here
    function __construct() {
        $this->ci = & get_instance();
    }

    public function initPagination($base_url, $total_rows) {
        $config['per_page'] = 1;
        $config['uri_segment'] = 3;
        $config['base_url'] = base_url() . $base_url;
        $config['total_rows'] = $total_rows;
        $config['use_page_numbers'] = TRUE;

        /* This Application Must Be Used With BootStrap 3 *  */
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        $this->ci->pagination->initialize($config);
        return $config;
    }

}
