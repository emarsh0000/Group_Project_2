<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logins extends CI_Controller 
{

	public function index()
	{
		$user = [];
		$this->load->model('login');
		$this->load->view('login_view', $user); //2nd perameter isn't always needed but this
		//takes the variable's info and posts it on view page.
	}

	public function success()
	{
		$this->load->model('login');
		$user['messages'] = $this->login->get_all_messages();
		$user['comments'] = $this->login->get_all_comments();
		// var_dump($this->session->userdata);
		// die();
		$user['first_name'] = $this->session->userdata('user')['first_name'];
		$this->load->view('success_view', $user);

	}

	public function poke()
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
			redirect('/logins/success');
	}

	public function session_stop()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

	public function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'first name', 'required');
		$this->form_validation->set_rules('last_name', 'last name', 'required');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[6]|max_length[18]|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password', 'confirm password');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');

		if ($this->form_validation->run()) 
		{
			$this->load->model('login');
			$array['user'] = $this->input->post();
			$array['id'] = $this->login->add_user($array['user']);
			$this->session->set_userdata('user', $array['user']);
			$this->session->set_flashdata('message', 'Success!'); //this is a one-time message flash! :)
			redirect('/logins/success');
		}
		else
		{
			$this->session->set_flashdata('errors', validation_errors());
			$this->session->set_flashdata('message', 'Attempt was not successful');	
			redirect(base_url('/'));	
		}
	}

	public function login()
	{
		$user = $this->input->post();
		// var_dump($user);
	
		$this->load->model('login');
		$data = $this->login->get_user_by_id($user); //this grabs all including id
		//var_dump($user);
		if ($data != NULL) 
		{
			$this->session->set_userdata('user', $data); //this is using user as a key to store all the info including user id.
			//$this->success();
			redirect('logins/success');
		}
		else
		{
			
			$error = "Login Unsuccessful. Please try again or register.";
			$this->session->set_flashdata('errors', $error);
			redirect("/");
		}
	}

	public function message_add()
	{
		$message = $this->input->post();
		$user_id = $this->session->userdata('user')['id']; //we grab into the array and pull out id
		//var_dump($user_id);
		$this->load->model('login');
		$this->login->add_message($message, $user_id);
		redirect('logins/success');
	}

	public function comment_add($id)
	{
		$comment = $this->input->post();
		$user_id = $this->session->userdata('user')['id']; //we grab into the array and pull out id
		$this->load->model('login');
		// $this->login->get_message_by_id($id);
		$this->login->add_comment($comment, $id, $user_id);
		redirect('logins/success');
	}

	public function message_delete($message_id)
	{
		//var_dump($message_id);
		$this->load->model('login'); //this is needed to keep passing this 
		$this->login->delete_message($message_id);	
		redirect('logins/success');											//value for all pieces of deleting
	}

	public function comment_delete($comment_id)
	{
		//var_dump($message_id);
		$this->load->model('login'); //this is needed to keep passing this 
		$this->login->delete_comment($comment_id);	
		redirect('logins/success');										
	}
}