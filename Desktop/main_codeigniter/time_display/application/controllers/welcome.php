<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function awesome()
	{
		$this->load->view('awesome_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
/* This is set as a default controller in your local router. Anytime, you don't specify, it will reroute to this.*/