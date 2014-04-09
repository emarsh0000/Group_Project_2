<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Note extends CI_Model 
{
	public function index()
	{
		$this->load->view('note_post');
	}

	public function add_note($words)
	{
		// var_dump($words['add_note']); //to test to see if the model received the info from controller.
		// die();
		$query = "INSERT INTO notes (content, created_at) VALUES (?, ?)";
		$values = array($words['add_note'], date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}

	public function get_all_notes()
	{
		return $this->db->query("SELECT * FROM notes")->result_array();
	}
}