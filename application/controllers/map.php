<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class map extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model', 'users');
        $this->load->model('owner_model', 'owners');
        $this->load->model('coach_model', 'coach');
        
        $this->load->library('session');
    }
    function test(){
        $this->load->library('googlemaps');

$config['center'] = '37.4419, -122.1419';
$config['zoom'] = 'auto';
$config['places'] = TRUE;
$config['placesAutocompleteInputID'] = 'myPlaceTextBox';
$config['placesAutocompleteBoundsMap'] = TRUE; // set results biased towards the maps viewport
$config['placesAutocompleteOnChange'] = 'alert(\'You selected a place\');';
$this->googlemaps->initialize($config);
$data['map'] = $this->googlemaps->create_map();

$this->load->view('view_file', $data);
    }

}
