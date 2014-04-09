<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function index()
	{
		$this->load->model('note');
		$words['unique_note'] = $this->note->get_all_notes();  //calls the add_note method and
		//sets a variable you can call on view's page, 'note_post'
		$this->load->view('notes_view', $words); //2nd perameter isn't always needed but this
		//takes the variable's info and posts it on view page.
	}

	public function create()
	{
		$this->load->model('note');
		$this->note->add_note($this->input->post()); //this is to pass the data from the user
		//to the controller, and NOW from the controller to model.
		// redirect('/');
		$ajax = $this->input->post(); //this makes a variable with the stored info.
		echo json_encode($ajax); //json always goes here on controller page.
	}

	public function delete($id)
	{
		$this->load->model('note');
		$this->note->delete_note($id); //model is being called so we can 
											//call the method in it we need
		// redirect(base_url('/'));
	}

	public function edit($id)
	{	
		// var_dump($this->input->post());
		// die();
		$data['description'] = $this->input->post()['description'];
		$data['id'] = $id;
		$this->load->model('note');
		$this->note->update_note($data); //this is the function on the model page that 
										//needs to run
		// redirect(base_url('/'));
	}
}
