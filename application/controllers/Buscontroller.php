<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscontroller extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Bus_model');
	}

	public function index(){

		$this->load->view('index');
	}
	
	public function insert(){

		$this->load->view('insert');
	}
	public function insertdata(){
		$data = array(
			'Bus_id' => $this->input->post("Bus_id"),
			'Departurestation' => $this->input->post("Departurestation"),
			'Timeout' => $this->input->post("Timeout"),
			'Toaddress' => $this->input->post("Toaddress"),
			'Busexit' => $this->input->post("Busexit"),
			'Terminal' => $this->input->post("Terminal"),
			'Totime' => $this->input->post("Totime"),
			'Notebus' => $this->input->post("Notebus"),

		);
			// $this->Menu->menu_insert($data);
			$this->Bus_model->Alumniw($data);
			$this->load->view('insert');
			// $this->load->view('view_insert_successwithmenulink');
	}

	
	public function table()
	{
		$result['register'] = $this->Bus_model->Allbus();
		$this->load->view('find',$result);

		
	}
}
