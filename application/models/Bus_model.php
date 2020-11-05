<?php
	class Bus_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function Alumniw($data){
			$this->db->insert('bus',$data);
        }
		function Allbus(){
			$this->db->select('bus_id,Timeout,Departurestation,Toaddress,Busexit,Terminal,Totime,Notebus');
			$this->db->where('Departurestation','สุรินทร์');
			$result = $this->db->get('bus');
			return $result;
		}

	
		
	}