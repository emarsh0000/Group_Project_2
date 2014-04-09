<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ninjagold extends CI_Controller 
{

	public function index()
	{
		$this->load->view('gold_index_view');
	}

	public function gold()
	{
		$this->session->set_userdata('log', array());
		$this->session->set_userdata('gold', 0); //this automatically makes a variable called $gold and sets it to 100.
		redirect('/');
	}

	public function farm()
	{
		$this->session->userdata('gold'); //this grabs the value we need.
		$new_gold = $this->session->userdata('gold'); //this sets that to a new value.
		$rand_num = rand(10, 20); //this variable is now = to betwewn 10-20.
		$new_gold +=$rand_num; //this says $new_gold is = to $new_gold + 10-20.
		$this->session->set_userdata('gold', $new_gold); //this says NOW the userdata is gold PLUS $new_gold
		$log = $this->session->userdata('log'); //this sets up a variable named 'log'.
		$log[] = "You entered an abandoned farm, and earned " . $rand_num . " gold. (" . date('m/d/y') . ")<br>";
		//above is saying ok, now it's an empty array we will add each new value into.
		$this->session->set_userdata('log', $log); //this says we will reset $log to be whatever the last value of log was.
		redirect('/');
	}
	public function house()
	{
		$this->session->userdata('gold'); //this grabs the value we need.
		$new_gold = $this->session->userdata('gold'); //this sets that to a new value.
		$rand_num = rand(2, 5);
		$new_gold +=$rand_num; //this says $new_gold is = to $new_gold + 2-5.
		$this->session->set_userdata('gold', $new_gold); //this says NOW the userdata is gold PLUS $new_gold
		$log = $this->session->userdata('log'); //this sets up a variable named 'log'.
		$log[] = "You entered an empty house, and earned " . $rand_num . " gold. (" . date('m/d/y') . ")<br>";
		//above is saying ok, now it's an empty array we will add each new value into.
		$this->session->set_userdata('log', $log); //this says we will reset $log to be whatever the last value of log was.
		redirect('/');
	}

	public function cave()
	{
		$this->session->userdata('gold'); //this grabs the value we need.
		$new_gold = $this->session->userdata('gold'); //this sets that to a new value.
		$rand_num = rand(5, 10);
		$new_gold +=$rand_num; //this says $new_gold is = to $new_gold + 10-20.
		$this->session->set_userdata('gold', $new_gold); //this says NOW the userdata is gold PLUS $new_gold
		$log = $this->session->userdata('log'); //this sets up a variable named 'log'.
		$log[] = "You entered a scary-lookin' cave and earned " . $rand_num . " gold. (" . date('m/d/y') . ")<br>";
		//above is saying ok, now it's an empty array we will add each new value into.
		$this->session->set_userdata('log', $log); //this says we will reset $log to be whatever the last value of log was.
		redirect('/');
	}

	public function casino()
	{
		$this->session->userdata('gold'); //this grabs the value we need.
		$new_gold = $this->session->userdata('gold'); //this sets that to a new value.
		$rand_num = rand(-50, 50);
		$new_gold +=$rand_num; //this says $new_gold is = to $new_gold + 10-20.
		$this->session->set_userdata('gold', $new_gold); //this says NOW the userdata is gold PLUS $new_gold
		$log = $this->session->userdata('log'); //this sets up a variable named 'log'.
		$log[] = "You entered a casino, and left with " . $rand_num . " gold. (" . date('m/d/y') . ")<br>";
		//above is saying ok, now it's an empty array we will add each new value into.
		$this->session->set_userdata('log', $log); //this says we will reset $log to be whatever the last value of log was.
		redirect('/');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
/* This is set as a default controller in your local router. Anytime, you don't specify, it will reroute to this.*/