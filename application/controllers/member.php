<?php

class member extends CI_Controller{

	public function __construct(){
		parent::__construct();

		$this->load->library('session');

		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('summary/summary-member.php');
	}

}

?>