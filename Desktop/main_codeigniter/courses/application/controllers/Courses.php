<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller 
{
	public function index()
	{
		$this->output->enable_profiler(TRUE);  //enables the profiler
		$this->load->model("Course");  //loads the model
		$course['courses'] = $this->Course->get_all_courses();  //calls the get_all_courses method and
		//sets a variable you can call on view's page, 'courses'
		$this->load->view('course_cover_page', $course); //2nd perameter isn't always needed
	}

	public function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'course name', 'required');
		if ($this->form_validation->run()) 
		{
				
		}
		else
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url('/'));	
		}
		$this->load->model("Course");
		$course_details = array(
			"title" => $this->input->post('title'),  //this grabs the input the user gave and says
			//for THIS key of title, grab the value (name of class).
			"description" => $this->input->post('description') //same as above but grabs the description.
		);
		$add_course = $this->Course->add_course($course_details);
		if($add_course === TRUE)
		{
		$this->session->set_flashdata('message', 'Course is added!'); //this is a one-time message flash! :)
		redirect(base_url('/'));
		}
		else
		{
			$this->session->set_flashdata('message', 'Adding Course was not successful');	
		}
	}

	public function course_delete($id)
	{
		$this->load->view('course_delete', array('id' => $id)); //this is needed to keep passing this 
												//value for all pieces of deleting
	}

	public function destroy()
	{
		redirect('/');
	}

	public function delete($id)
	{
		$this->load->model('course');
		$this->course->delete_course($id); //model is being called so we can 
											//call the method in it we need
		redirect(base_url('/'));
	}
	
	// public function show($id)
	// {
	// 	$this->output->enable_profiler(TRUE);  //enables the profiler
	// 	$this->load->model("Course");  //loads the model
	// 	$course = $this->Course->get_course_by_id($id);  //calls the get_course_by_id method
	// 	var_dump($course);
	//}	
}
