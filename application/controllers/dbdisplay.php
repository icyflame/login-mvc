<?php

class dbdisplay extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->model('dbdispmodel');

		$this->load->library('session');

		$this->load->helper('url');

	}

	public function index(){

		header('Refresh:2, url="dbdisplay/buildTable/0"');

		// $this->buildTable();

	}

	public function buildTable($year='0', $call=''){

		$year1 = $this->session->userdata('year1');
		$year2 = $this->session->userdata('year2');
		$year3 = $this->session->userdata('year3');

		$res = $this->dbdispmodel->getAllData($year, $call);

		$data = array(
			'all'=>$res,
			'count'=>count($res),
			'year1'=>$year1,
			'year2'=>$year2,
			'year3'=>$year3
			);

		// print_r($data);

		$this->load->view('dbdisp/dbdispview', $data);

	}

}

?>