<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Maps extends CI_Controller {

	public function index()
	{
		$this->load->view('maps_view');
	}

	public function direction()
	{
		$html = file_get_contents("https://maps.googleapis.com/maps/api/directions/json?origin=".urlencode($this->input->get('origin'))."&destination=".urlencode($this->input->get('destination'))."&sensor=false");

		$this->output
			->set_content_type('application/json')
			->set_output($html);
	}
}