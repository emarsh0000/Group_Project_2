<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller 
{
	public function index()
	{
		$this->load->model('note');
		$words['unique_note'] = $this->note->get_all_notes();  //calls the add_note method and
		//sets a variable you can call on view's page, 'note_post'
		$this->load->view('note_post', $words); //2nd perameter isn't always needed but this
		//takes the variable's info and posts it on view page.
	}

	public function create()
	{
		$this->load->model('note');
		$this->note->add_note($_POST); //this is to pass the data from the user
		//to the controller, and NOW from the controller to model.
		//redirect('/');
		$ajax = $_POST; //this makes a variable with the stored info.
		echo json_encode($ajax); //json always goes here.
	}

}