<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Model 
{
	public function index()
	{
		// $this->load->view('login_view');
	}

	public function get_all_messages()
	{
		return $this->db->query("SELECT * FROM messages")->result_array();
	}
	public function get_message_by_id($message_id)
	{
		return $this->db->query("SELECT * FROM messages WHERE id = ?", array($message_id))->row_array();
	}
	public function add_message($message, $id)
	{
		 //var_dump($message);
		//var_dump($user_id);
		$query = "INSERT INTO messages (content, created_at, updated_at, user_id) VALUES (?, NOW(), NOW(), ?)";
		$values = array($message['message'], $id);
		return $this->db->query($query, $values);
	}
	public function delete_message($id)
	{
		$query = "DELETE FROM messages WHERE users.id = {$id}";
		$this->db->query($query); //this is running the query into the database
	}

	public function get_user_by_id($user) //this is the login
	{
		//echo("SELECT * FROM users WHERE users.password = '{$user['password']}' AND users.email = '{$user['email']}'");
		//var_dump($user);
		return $this->db->query("SELECT * FROM users WHERE users.password = '{$user['password']}' AND users.email = '{$user['email']}'")->row_array();
		
	}
	public function add_user($user)
	{
		$query = "INSERT INTO users (first_name, last_name, password, email, created_at, updated_at) VALUES (?, ?, ?, ?, NOW(), NOW())";
		$values = array($user['first_name'], $user['last_name'], $user['password'], $user['email']);
		$this->db->query($query, $values);
		return $this->db->insert_id();  //this will return the inserted id of this user.
	}
	public function delete_user($id)
	{
		$query = "DELETE FROM users WHERE user.id = {$id}";
		$this->db->query($query); //this is running the query into the database
	}
	public function get_all_comments()
	{
		return $this->db->query("SELECT * FROM comments")->result_array();
	}
	public function get_comment_by_id($comment_id)
	{
		return $this->db->query("SELECT * FROM users WHERE id = ?", array($user_id))->row_array();
	}
	public function add_comment($comment, $id)
	{
		$query = "INSERT INTO comments (content, created_at, updated_at, user_id) VALUES (?, NOW(), NOW(), ?)";
		$values = array($comment['comment'], $id);
		return $this->db->query($query, $values);
	}
	public function delete_comment($id)
	{
		$query = "DELETE FROM comments WHERE comment.id = {$id}";
		$this->db->query($query); //this is running the query into the database
	}

}