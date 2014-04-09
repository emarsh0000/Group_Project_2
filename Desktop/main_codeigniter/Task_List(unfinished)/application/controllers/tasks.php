<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tasks extends CI_Controller {

	public function index()
	{
		$this->load->model('task');
		$tasks['unique_task'] = $this->task->get_all_tasks();  //calls the add_task method and
		//sets a variable you can call on view's page, 'task_view'
		$this->load->view('task_view', $tasks); //2nd perameter isn't always needed but this
		//takes the variable's info and posts it on view page.
	}

	public function create()
	{
		$this->load->model('task');
		$this->task->add_task($this->input->post()); //this is to pass the data from the user
		//to the controller, and NOW from the controller to model.
		//redirect('/');
		// $ajax = $this->input->post(); //this makes a variable with the stored info.
		// echo json_encode($ajax); //json always goes here on controller page.
	}

	public function delete($id)
	{
		$this->load->model('task');
		$this->task->delete_task($id); //model is being called so we can 
											//call the method in it we need
		redirect(base_url('/'));
	}

	public function edit($id)
	{	
		// var_dump($this->input->post());
		// die();
		$data['name'] = $this->input->post()['name'];
		$data['id'] = $id;
		$this->load->model('task');
		$this->task->update_task($data); //this is the function on the model page 								//that needs to run
		redirect(base_url('/'));
	}
}