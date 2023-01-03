<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
		$this->load->helper('url');

		// Load model
		$this->load->model('M_DataMovie');
		$this->load->model('M_user');

		if (!$this->M_user->isLogin()) {
			redirect('index.php/site');
		}
	}

	public function index()
	{
		$data['movie'] = $this->M_DataMovie->countMovie();
		$data['newmovie'] = $this->M_DataMovie->countnewMovie();
		$data['user'] = $this->M_user->countUser();
		$data['userAge'] = $this->M_user->countUserAge();
		$this->load->view('admin/dashboard', $data);
	}


	public function dataMovie()
	{

		$data = $this->M_DataMovie->getAllMovie();
		$this->load->view('admin/tableDataMovie', ['data' => $data]);
	}

	public function dataUser()
	{
		$data = $this->M_user->getAllUser();
		$this->load->view('admin/tableDataUser', ['data' => $data]);
	}

	public function empList()
	{

		// POST data
		$postData = $this->input->post();
		// Get data
		$data['Movie'] = $this->M_DataMovie->getDataMovie($postData);

		echo json_encode($data['Movie']);
	}

	function form()
	{
		$this->load->view('admin/formAddDataMovie');
	}

	function tambahData()
	{
		$config['upload_path'] = 'uploads';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('poster')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$file = $this->upload->data('file_name');
			$data = array(
				"title" => $this->input->post('title'),
				"year" => $this->input->post('year'),
				"Certificate" => $this->input->post('certificate'),
				"duration" => $this->input->post('duration'),
				"genre" => $this->input->post('genre'),
				"rating" => $this->input->post('nama'),
				"description" => $this->input->post('description'),
				"score" => $this->input->post('score'),
				"director" => $this->input->post('director'),
				"star1" => $this->input->post('star1'),
				"star2" => $this->input->post('star2'),
				"star3" => $this->input->post('star3'),
				"star4" => $this->input->post('star4'),
				"vote" => $this->input->post('vote'),
				"poster" => $file
			);
			$this->M_DataMovie->addData($data);
			redirect('index.php/admin/DataMovie');
		}
	}

	public function formEdit($id)
	{
		$data['d'] = $this->M_DataMovie->getDataMovieByID($id);
		$this->load->view('admin/formEditDataMovie', $data);
	}

	function ubahData($id)
	{
		$data = array(
			"poster" => $this->input->post('poster'),
			"title" => $this->input->post('title'),
			"year" => $this->input->post('year'),
			"Certificate" => $this->input->post('certificate'),
			"duration" => $this->input->post('duration'),
			"genre" => $this->input->post('genre'),
			"rating" => $this->input->post('nama'),
			"description" => $this->input->post('description'),
			"score" => $this->input->post('score'),
			"director" => $this->input->post('director'),
			"star1" => $this->input->post('star1'),
			"star2" => $this->input->post('star2'),
			"star3" => $this->input->post('star3'),
			"star4" => $this->input->post('star4'),
			"vote" => $this->input->post('vote')
		);
		$this->M_DataMovie->editData($id, $data);
		redirect('index.php/admin/DataMovie');
	}
	function hapusData($id)
	{
		$this->M_DataMovie->deleteData($id);
		redirect('index.php/admin/DataMovie');
	}
}
