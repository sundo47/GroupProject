<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{

	public function index(){	
		$config['center'] = 'Los Angeles, CA';
		$config['zoom'] = 2;
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = 'Los Angeles, CA';
		$this->googlemaps->add_marker($marker);

		$marker = array();
		$marker['position'] = 'Sha Tin, Hong Kong';
		$this->googlemaps->add_marker($marker);
		
		// $marker = array();
		// $marker['position'] = '($city) ($state)';
		// $marker['onclick'] = 
		// $this->googlemaps->add_marker($marker);


		$data['map'] = $this->googlemaps->create_map();
		$this->load->view('loginreg', $data);
	}

}