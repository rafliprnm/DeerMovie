<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
		$this->load->helper('url');
		// Load model
		$this->load->model('M_DataMovie');
		$this->load->model('M_user');
		if(!$this->M_user->isLogin()){
			redirect('index.php/site');
		}
	}

	public function index()
	{	
		$data=[];
		$data['user'] = $this->M_user->userLogin();
		$data['top10'] = $this->M_DataMovie->movieTop10();
		$data['topRating'] = $this->M_DataMovie->movieTopRating();
		$data['actionHome'] = $this->M_DataMovie->movieActionHome();
		$data['familyHome'] = $this->M_DataMovie->movieFamilyHome();
		$data['dramaHome'] = $this->M_DataMovie->movieDramaHome();
		$data['horrorHome'] = $this->M_DataMovie->movieHorrorHome();
		$this->load->view('user/home',$data);
	}

	public function movie($id_movie){
		$data=[];
		$data['user'] = $this->M_user->userLogin();
		$detail = $this->M_DataMovie->getDataMovieByID($id_movie);
		$data['detail'] = $detail;
		$this->load->view('user/moviePage',$data);
	}

	public function newRealese(){
		$config['base_url'] = site_url('index.php/main/newRealese');
		$config['total_rows'] = $this->db->count_all('tb_movie');
		$config['per_page'] = 50;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows']/$config['per_page'];
		$config['num_links'] = floor($choice);
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['prev_link'] = 'Prev';
		$config['next_link'] = 'Next';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';
		$config['next_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['next_tagl_close'] = '</span></li>';
		$config['prev_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['prev_tagl_close'] = '</span></li>';
		$config['first_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['last_tagl_close'] = '</span></li>';
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3):0;
		$data['user'] = $this->M_user->userLogin();
		$data['new'] = $this->M_DataMovie->movieNewRealese($config['per_page'], $data['page']);
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('user/newRealese',$data);
	}

	public function categoryAction(){
		$total = $this->db->like('genre', 'Action')->from('tb_movie')->count_all_results();
		$config['base_url'] = site_url('index.php/main/categoryAction');
		$config['total_rows'] = $total;
		$config['per_page'] = 50;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows']/$config['per_page'];
		$config['num_links'] = floor($choice);
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['prev_link'] = 'Prev';
		$config['next_link'] = 'Next';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';
		$config['next_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['next_tagl_close'] = '</span></li>';
		$config['prev_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['prev_tagl_close'] = '</span></li>';
		$config['first_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['last_tagl_close'] = '</span></li>';
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3):0;
		$data['user'] = $this->M_user->userLogin();
		$data['category'] = $this->M_DataMovie->cAction($config['per_page'], $data['page']);
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('user/category',$data);
	}

	public function categoryAdventure(){
		$total = $this->db->like('genre', 'Adventure')->from('tb_movie')->count_all_results();
		$config['base_url'] = site_url('index.php/main/categoryAdventure');
		$config['total_rows'] = $total;
		$config['per_page'] = 50;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows']/$config['per_page'];
		$config['num_links'] = floor($choice);
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['prev_link'] = 'Prev';
		$config['next_link'] = 'Next';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';
		$config['next_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['next_tagl_close'] = '</span></li>';
		$config['prev_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['prev_tagl_close'] = '</span></li>';
		$config['first_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['last_tagl_close'] = '</span></li>';
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3):0;
		$data['user'] = $this->M_user->userLogin();
		$data['category'] = $this->M_DataMovie->cAdventure($config['per_page'], $data['page']);
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('user/category',$data);
	}

	public function categoryAnimation(){
		$total = $this->db->like('genre', 'Animation')->from('tb_movie')->count_all_results();
		$config['base_url'] = site_url('index.php/main/categoryAnimation');
		$config['total_rows'] = $total;
		$config['per_page'] = 50;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows']/$config['per_page'];
		$config['num_links'] = floor($choice);
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['prev_link'] = 'Prev';
		$config['next_link'] = 'Next';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';
		$config['next_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['next_tagl_close'] = '</span></li>';
		$config['prev_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['prev_tagl_close'] = '</span></li>';
		$config['first_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['last_tagl_close'] = '</span></li>';
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3):0;
		$data['user'] = $this->M_user->userLogin();
		$data['category'] = $this->M_DataMovie->cAnimation($config['per_page'], $data['page']);
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('user/category',$data);
	}

	public function categoryComedy(){
		$total = $this->db->like('genre', 'Comedy')->from('tb_movie')->count_all_results();
		$config['base_url'] = site_url('index.php/main/categoryComedy');
		$config['total_rows'] = $total;
		$config['per_page'] = 50;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows']/$config['per_page'];
		$config['num_links'] = floor($choice);
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['prev_link'] = 'Prev';
		$config['next_link'] = 'Next';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';
		$config['next_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['next_tagl_close'] = '</span></li>';
		$config['prev_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['prev_tagl_close'] = '</span></li>';
		$config['first_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['last_tagl_close'] = '</span></li>';
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3):0;
		$data['user'] = $this->M_user->userLogin();
		$data['category'] = $this->M_DataMovie->cComedy($config['per_page'], $data['page']);
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('user/category',$data);
	}

	public function categoryCrime(){
		$total = $this->db->like('genre', 'Crime')->from('tb_movie')->count_all_results();
		$config['base_url'] = site_url('index.php/main/categoryCrime');
		$config['total_rows'] = $total;
		$config['per_page'] = 50;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows']/$config['per_page'];
		$config['num_links'] = floor($choice);
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['prev_link'] = 'Prev';
		$config['next_link'] = 'Next';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';
		$config['next_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['next_tagl_close'] = '</span></li>';
		$config['prev_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['prev_tagl_close'] = '</span></li>';
		$config['first_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['last_tagl_close'] = '</span></li>';
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3):0;
		$data['user'] = $this->M_user->userLogin();
		$data['category'] = $this->M_DataMovie->cCrime($config['per_page'], $data['page']);
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('user/category',$data);
	}

	public function categoryDrama(){
		$total = $this->db->like('genre', 'Drama')->from('tb_movie')->count_all_results();
		$config['base_url'] = site_url('index.php/main/categoryDrama');
		$config['total_rows'] = $total;
		$config['per_page'] = 50;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows']/$config['per_page'];
		$config['num_links'] = floor($choice);
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['prev_link'] = 'Prev';
		$config['next_link'] = 'Next';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';
		$config['next_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['next_tagl_close'] = '</span></li>';
		$config['prev_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['prev_tagl_close'] = '</span></li>';
		$config['first_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['last_tagl_close'] = '</span></li>';
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3):0;
		$data['user'] = $this->M_user->userLogin();
		$data['category'] = $this->M_DataMovie->cDrama($config['per_page'], $data['page']);
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('user/category',$data);
	}

	public function categoryFamily(){
		$total = $this->db->like('genre', 'Family')->from('tb_movie')->count_all_results();
		$config['base_url'] = site_url('index.php/main/categoryFamily');
		$config['total_rows'] = $total;
		$config['per_page'] = 50;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows']/$config['per_page'];
		$config['num_links'] = floor($choice);
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['prev_link'] = 'Prev';
		$config['next_link'] = 'Next';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';
		$config['next_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['next_tagl_close'] = '</span></li>';
		$config['prev_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['prev_tagl_close'] = '</span></li>';
		$config['first_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['last_tagl_close'] = '</span></li>';
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3):0;
		$data['user'] = $this->M_user->userLogin();
		$data['category'] = $this->M_DataMovie->cFamily($config['per_page'], $data['page']);
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('user/category',$data);
	}

	public function categoryHorror(){
		$total = $this->db->like('genre', 'Horror')->from('tb_movie')->count_all_results();
		$config['base_url'] = site_url('index.php/main/categoryHorror');
		$config['total_rows'] = $total;
		$config['per_page'] = 50;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows']/$config['per_page'];
		$config['num_links'] = floor($choice);
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['prev_link'] = 'Prev';
		$config['next_link'] = 'Next';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';
		$config['next_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['next_tagl_close'] = '</span></li>';
		$config['prev_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['prev_tagl_close'] = '</span></li>';
		$config['first_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['last_tagl_close'] = '</span></li>';
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3):0;
		$data['user'] = $this->M_user->userLogin();
		$data['category'] = $this->M_DataMovie->cHorror($config['per_page'], $data['page']);
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('user/category',$data);
	}

	public function categorySciFi(){
		$total = $this->db->like('genre', 'Sci-Fi')->from('tb_movie')->count_all_results();
		$config['base_url'] = site_url('index.php/main/categorySciFi');
		$config['total_rows'] = $total;
		$config['per_page'] = 50;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows']/$config['per_page'];
		$config['num_links'] = floor($choice);
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['prev_link'] = 'Prev';
		$config['next_link'] = 'Next';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';
		$config['next_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['next_tagl_close'] = '</span></li>';
		$config['prev_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['prev_tagl_close'] = '</span></li>';
		$config['first_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['last_tagl_close'] = '</span></li>';
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3):0;
		$data['user'] = $this->M_user->userLogin();
		$data['category'] = $this->M_DataMovie->cSciFi($config['per_page'], $data['page']);
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('user/category',$data);
	}

	public function categoryWar(){
		$total = $this->db->like('genre', 'War')->from('tb_movie')->count_all_results();
		$config['base_url'] = site_url('index.php/main/categoryWar');
		$config['total_rows'] = $total;
		$config['per_page'] = 50;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows']/$config['per_page'];
		$config['num_links'] = floor($choice);
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['prev_link'] = 'Prev';
		$config['next_link'] = 'Next';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';
		$config['next_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['next_tagl_close'] = '</span></li>';
		$config['prev_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['prev_tagl_close'] = '</span></li>';
		$config['first_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['last_tagl_close'] = '</span></li>';
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3):0;
		$data['user'] = $this->M_user->userLogin();
		$data['category'] = $this->M_DataMovie->cWar($config['per_page'], $data['page']);
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('user/category',$data);
	}

	
}
