<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Model 
{
	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }
	public function get_all_courses()
	{
		return $this->db->query("SELECT * FROM courses")->result_array();
	}
	public function get_course_by_id($course_id)
	{
		return $this->db->query("SELECT * FROM courses WHERE id = ?", array($course_id))->row_array();
	}
	public function add_course($course)
	{
		$query = "INSERT INTO courses (title, description, created_at) VALUES (?, ?, ?)";
		$values = array($course['title'], $course['description'], date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}
	public function delete_course($id)
	{
		$query = "DELETE FROM courses WHERE courses.id = {$id}";
		$this->db->query($query); //this is running the query into the database
	}
}