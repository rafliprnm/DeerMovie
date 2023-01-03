<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Site extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$username = $this->input->post('usr');
		$password = $this->input->post('pwd');

		$usr = $this->M_user->check_user($username, $password);

		if ($usr) {
			$sess = array(
				'username' => $usr['username'],
				'fullname' => $usr['fullname'],
				'role' => $usr['role']
			);
			if ($usr['role'] == "admin") {
				$this->session->set_userdata($sess);
				redirect('index.php/admin');
			} else {
				$this->session->set_userdata($sess);
				redirect('index.php/main');
			}
		} else {
			$this->session->set_flashdata('info', 'username/password salah');
			redirect('index.php/site');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('index.php/site');
	}

	public function register()
	{
		$this->load->view('register');
	}

	function registUser()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('fullname', 'fullname', 'required');
		$this->form_validation->set_rules('age', 'age', 'required');
		if ($this->form_validation->run() != false) {
			$this->load->view('register');
		} else {
			$config['upload_path'] = 'uploads';
			$config['allowed_types'] = 'jpg|png';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('avatar')) {
				// redirect('index.php/admin/form');
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('register', $error);
			} else {
				$file = $this->upload->data('file_name');
				$data = array(
					"username" => $this->input->post('usr'),
					"password" => $this->input->post('pwd'),
					"fullName" => $this->input->post('fullName'),
					"age" => $this->input->post('age'),
					"avatar" => $file
				);
				$this->M_user->addUser($data);
				redirect('index.php/site');
			}
		}
	}
}
