<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Random extends CI_Controller 
{
	public function index()
	{
		$this->load->view('randoms');
	}
	public function mix_and_click()
	{
		$mix_word = "";
		$words = preg_split('//', 'abcdefghijklmnopqrstuvwxyz0123456789', -1);
		shuffle($words);
		foreach($words as $word) 
		{
    	  $mix_word .= $word; //.=is connecting strings.
    	  if (strlen($mix_word) == 14) //this says if the string is the right amount, STOP, otherwise go until it is.
    	  {
    	  	break;
    	  }
    	 // $length = 14; (THIS DOES SAME THING WITH LESS CODE)
    	 // return substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, $length);
    	}
    	$this->session->set_userdata('mixed-word', $mix_word);

		if ($this->session->userdata('click') != NULL) //to set the click number, you must check to see if this is true 
													  //then extract and give a variable and insert back in.
		{
			$click = $this->session->userdata('click'); //you are setting a new varable $click to equal
													   //whatever is currently set at the 'click' number
			$click++;  //this will add one each time.

			$this->session->set_userdata('click', $click); //now you are resetting the user_data to run both aspects.
		}
	
		else
		{
			$this->session->set_userdata('click', 1); //click will now be a variable
		}
		redirect("/");
	}
	public function session_stop()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}