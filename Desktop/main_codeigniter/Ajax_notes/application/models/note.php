<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Note extends CI_Model 
{
	public function index()
	{
		$this->load->view('notes_view');
	}

public function add_note($words)
	{
		// var_dump($words); //to test to see if the model received the info from controller.
		// die();
		$query = "INSERT INTO notes (title, description, created_at) VALUES (?, ?, ?)";
		$values = array($words['description'], $words['add_note'], date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}

	public function get_all_notes()
	{
		return $this->db->query("SELECT * FROM notes")->result_array();
	}

	public function delete_note($id)
	{
		$query = "DELETE FROM notes WHERE notes.id = {$id}";
		$this->db->query($query); //this is running the query into the database
	}

	public function update_note($data)
     {
         $query = "UPDATE notes
                   SET description = ?, updated_at = NOW()
                   WHERE id = ?";
         $values = array($data['description'], $data['id']); 
         return $this->db->query($query, $values);
     }
}