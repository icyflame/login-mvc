<?php

class summarymember extends CI_Model{
	
	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	public function getdata_allyears(){

		// a lot of count queries

		$u = $this->session->userdata['userid'];

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u'");

		$allocated = $this->getcount($res);

		$res = $this->db->query("SELECT COUNT(*) FROM status WHERE touserid='$u' AND search='1'");

		$yet = $this->getcount($res);

		$result = array('totalallocated'=>$allocated
			);

		return $result;
	}

	public function getcount($res){

		$y = $res->result_array();

		// print_r($y[0]);

		foreach($y[0] as $count){

			return $count;

		}

	}
}

?>