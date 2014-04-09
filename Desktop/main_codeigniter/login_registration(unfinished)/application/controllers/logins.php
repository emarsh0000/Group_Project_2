<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logins extends CI_Controller 
{

	public function index()
	{
		$user = [];
		$this->load->model('login');
		$user['messages'] = $this->login->get_all_messages();  //calls the add_user method and
		$user['comments'] = $this->login->get_all_comments();
		//sets a variable you can call on view's page, 'users_view'
		$this->load->view('login_view', $user); //2nd perameter isn't always needed but this
		//takes the variable's info and posts it on view page.
	}

	public function success()
	{
		$this->load->view('success_view');
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
			$this->session->set_userdata('user', $array);
			$this->session->set_flashdata('message', 'Success!'); //this is a one-time message flash! :)
			$this->success();
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
		// var_dump($user_id);
		$this->load->model('login');
		$this->login->add_message($message, $user_id);
		redirect('logins/success');
	}

	public function comment_add()
	{
		$comment = $this->input->post();
		$user_id = $this->session->userdata('user')['id']; //we grab into the array and pull out id
		$this->load->model('login');
		$this->login->get_message_by_id($user_id);
		// var_dump($message_id);
		$this->login->add_comment($comment, $user_id);
		redirect('logins/success');
	}

	public function message_delete($id)
	{
		$this->load->model('delete_message', array('id' => $id)); //this is needed to keep passing this 
												//value for all pieces of deleting
	}

	public function delete($id)
	{
		$this->load->model('login');
		$this->login->delete_message($id); //model is being called so we can 
											//call the method in it we need
		$this->success();
	}
}