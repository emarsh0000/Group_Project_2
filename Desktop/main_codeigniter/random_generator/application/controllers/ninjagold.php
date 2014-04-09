<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ninjagold extends CI_Controller 
{

	public function index()
	{
		$this->load->view('gold_index_view');
	}

	public function farm()
	{
		echo "You made it to the farm!";
	}

	public function house()
	{

	}

	public function cave()
	{

	}

	public function casino()
	{

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
/* This is set as a default controller in your local router. Anytime, you don't specify, it will reroute to this.*/