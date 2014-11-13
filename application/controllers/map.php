<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class map extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model', 'users');
        $this->load->model('owner_model', 'owners');
        $this->load->model('coach_model', 'coach');
        $this->load->model('stadium_model', 'mystadium'); 
        $this->load->library('session');
    }

    function test() {
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

    function distance($lat1, $lon1, $lat2, $lon2, $unit) {



        $theta = $lon1 - $lon2;

        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));

        $dist = acos($dist);

        $dist = rad2deg($dist);

        $miles = $dist * 60 * 1.1515;

        $unit = strtoupper($unit);



        if ($unit == "K") {

            return ($miles * 1.609344);
        } else if ($unit == "N") {

            return ($miles * 0.8684);
        } else {

            return $miles;
        }
    }

    function nearbysearch() {
        
        $all_location= $this->mystadium->getLatLngAll_for_nbl();
//        print_r($all_location);
        $x = $this->input->post('x');
        $y = $this->input->post('y');
        $r = $this->input->post('r');
        
        foreach ($all_location as $al){
//            echo $al['lat'].'-'.$al['long'];
            if((($this->distance($x,$y , $al['lat'], $al['long'] , "K"))*1000)<$r){
                $newlist[] = $al ;
            }
            
        }
        echo json_encode($newlist);
//        print_r($newlist);
//        
//        
//        echo $this->distance(13.647571558821248,100.50458192825317 ,13.65349864719618, 100.4970905508178 , "M") . " Miles<br>";
//
//        echo ($this->distance(13.647571558821248,100.50458192825317 , 13.65349864719618, 100.4970905508178 , "K"))*1000 . " Kilometers<br>";
//
//        echo $this->distance(13.647571558821248,100.50458192825317 , 13.65349864719618, 100.4970905508178 , "N") . " Nautical Miles<br>";

        
    }

}
