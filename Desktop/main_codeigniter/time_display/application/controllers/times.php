<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Times extends CI_Controller 
{

	public function index()
	{
		date_default_timezone_set('America/Los_Angeles');
		$time = date('m/d/Y h:i:s a', time()); //this is setting up a variable that sets the date/time with 2 functions.
		$view_data = array('key' => $time); //you pass info to the controller by making an assoc. array. Then set the value, in this case, $time
		$this->load->view('time.php', $view_data); //this loads the view with the parameters of the array and the view file.
	}

	// public function awesome()
	// {
	// 	$this->load->view('awesome_view');
	}
	// public function main()
	// {
	// 	date_default_timezone_set('America/Los_Angeles');
	// 	$time = date('m/d/Y h:i:s a', time()); //this is setting up a variable that sets the date/time with 2 functions.
	// 	$view_data = array('key' => $time); //you pass info to the controller by making an assoc. array. Then set the value, in this case, $time
	// 	$this->load->view('time.php', $view_data); //this loads the view with the parameters of the array and the view file.
	// }
}
//controller is the name of the file that will process info. It contains a class and functions.
//methods are functions.
?>