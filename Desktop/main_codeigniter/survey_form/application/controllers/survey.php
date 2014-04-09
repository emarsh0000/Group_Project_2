<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Survey extends CI_Controller 
{

	public function index() //the default first bit that is always there.
	{
		$this->load->view('surveys'); //the page you want to default to each time.
	}
	public function success()
	{
		if ($this->session->userdata('click') != NULL) //to set the click number, you must check to see if this is true 
													  //then extract and give a variable and insert back in.
		{
			$click = $this->session->userdata('click'); //you are setting a new varable $click to equal
													   //whatever is currently set at the 'click' number.
			$click++;  //this will add one each time.

			$this->session->set_userdata('click', $click); //now you are resetting the user_data to run both aspects.
		}

		else
		{
			$this->session->set_userdata('click', 1); //click will now be a variable
		}
		
		$form_data = $this->input->post(); //this grabs the info submitted and sets it equal to this new variable form_data
		$this->load->view('survey_success', $form_data);
	}
	public function session_stop()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
	
}
?>