<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
	public function check_user($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('user')->row_array();
	}

	public function isLogin(){
		if (!$this->session->has_userdata('username')) {
			return null;
		}
		$username = $this->session->userdata('username');
		$query = $this->db->get_where('user', ['username' => $username]);
		return $query->row();
	}

	public function addUser($data)
	{
		$this->db->insert('user', $data);
	}

	public function userLogin(){
		$this->db->select('*');
		$this->db->from('user');
		$username = $this->session->userdata('username');
		$this->db->where('username', $username);
		$query = $this->db->get();
		return $query->result();
	}
    
	
	public function getAllUser()
	{
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
	}

	public function countUser(){
		$this->db->select('count(*) as total');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
	}

	public function countUserAge(){
		$query = $this->db->query("SELECT count(age) as total FROM user WHERE age>=18 ");
		return $query->result();
	}
}
