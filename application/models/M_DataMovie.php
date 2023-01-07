<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_DataMovie extends CI_Model
{
	public function getAllMovie()
	{
		$this->db->select('*');
		$this->db->from('tb_movie');
		$query = $this->db->get();
		return $query->result();
	}

	public function countMovie()
	{
		$this->db->select('count(*) as total');
		$this->db->from('tb_movie');
		$query = $this->db->get();
		return $query->result();
	}

	public function countnewMovie()
	{
		$query = $this->db->query("SELECT count(year) as total FROM tb_movie WHERE year>=2020 ");
		return $query->result();
	}

	public function getDataMovie($postData = null)
	{
		$response = array();
		$draw = $postData['draw'];
		$start = $postData['start'];
		$rowperpage = $postData['length']; // Rows display per page
		$columnIndex = $postData['order'][0]['column']; // Column index
		$columnName = $postData['columns'][$columnIndex]['data']; // Column name
		$columnSortOrder = $postData['order'][0]['dir']; // asc or desc
		$searchValue = $postData['search']['value']; // Search value

		$searchQuery = "";
		if ($searchValue != '') {
			$searchQuery = " (title like '%" . $searchValue . "%' or year like '%" . $searchValue . "%' or duration like'%" . $searchValue . "%' or genre like'%" . $searchValue . "%' or rating like'%" . $searchValue . "%' or director like'%" . $searchValue . "%'  ) ";
		}

		$this->db->select('count(*) as allcount');
		$records = $this->db->get('tb_movie')->result();
		$totalRecords = $records[0]->allcount;

		$this->db->select('count(*) as allcount');
		if ($searchQuery != '')
			$this->db->where($searchQuery);
		$records = $this->db->get('tb_movie')->result();
		$totalRecordwithFilter = $records[0]->allcount;

		$this->db->select('*');
		if ($searchQuery != '')
			$this->db->where($searchQuery);
		$this->db->order_by($columnName, $columnSortOrder);
		$this->db->limit($rowperpage, $start);
		$records = $this->db->get('tb_movie')->result();

		$data = array();

		foreach ($records as $record) {

			$data[] = array(
				"poster" => $record->poster,
				"title" => $record->title,
				"year" => $record->year,
				"duration" => $record->duration,
				"genre" => $record->genre,
				"rating" => $record->rating,
				"description" => $record->description,
				"score" => $record->score,
				"director" => $record->director,
				"vote" => $record->vote,
				"id_movie" => $record->id_movie
			);
		}

		$response = array(
			"draw" => intval($draw),
			"iTotalRecords" => $totalRecords,
			"iTotalDisplayRecords" => $totalRecordwithFilter,
			"aaData" => $data
		);

		return $response;
	}

	public function getDataMovieByID($id)
	{
		$this->db->where('id_movie', $id);
		return $this->db->get('tb_movie')->row_array();
	}

	public function addData($data)
	{
		// $data = [
		// 	"poster" => $this->input->post('poster', true),
		// 	"title" => $this->input->post('title', true),
		// 	"year" => $this->input->post('year', true),
		// 	"duration" => $this->input->post('duration', true),
		// 	"genre" => $this->input->post('genre', true),
		// 	"rating" => $this->input->post('rating', true),
		// 	"description" => $this->input->post('description', true),
		// 	"score" => $this->input->post('score', true),
		// 	"director" => $this->input->post('director', true),
		// 	"star1" => $this->input->post('star1', true),
		// 	"star2" => $this->input->post('star2', true),
		// 	"star3" => $this->input->post('star3', true),
		// 	"star4" => $this->input->post('star4', true),
		// 	"vote" => $this->input->post('vote', true)
		// ];
		$this->db->insert('tb_movie', $data);
	}

	public function editData($id, $data)
	{
		$data = [
			"poster" => $this->input->post('poster', true),
			"title" => $this->input->post('title', true),
			"year" => $this->input->post('year', true),
			"duration" => $this->input->post('duration', true),
			"genre" => $this->input->post('genre', true),
			"rating" => $this->input->post('rating', true),
			"description" => $this->input->post('description', true),
			"score" => $this->input->post('score', true),
			"director" => $this->input->post('director', true),
			"vote" => $this->input->post('vote', true)
		];
		$this->db->where('id_movie', $id);
		$this->db->update('tb_movie', $data);
	}

	public function deleteData($id)
	{
		$this->db->where('id_movie', $id);
		$this->db->delete('tb_movie');
	}

	public function movieTop10()
	{
		$query = $this->db->query("SELECT * FROM tb_movie WHERE year>=2015 ORDER BY vote DESC LIMIT 10");
		return $query->result();
	}

	public function movieTopRating()
	{
		$query = $this->db->query("SELECT * FROM tb_movie WHERE year>=2019 ORDER BY rating DESC LIMIT 10");
		return $query->result();
	}

	public function movieActionHome()
	{
		$query = $this->db->query("SELECT * FROM tb_movie WHERE genre LIKE '%Action%' AND year>=2015  LIMIT 10");
		return $query->result();
	}

	public function movieDramaHome()
	{
		$query = $this->db->query("SELECT * FROM tb_movie WHERE genre LIKE '%Drama%' LIMIT 10");
		return $query->result();
	}

	public function movieFamilyHome()
	{
		$query = $this->db->query("SELECT * FROM tb_movie WHERE genre LIKE '%Animation%' AND year>=2010  LIMIT 10");
		return $query->result();
	}

	public function movieHorrorHome()
	{
		$query = $this->db->query("SELECT * FROM tb_movie WHERE genre LIKE '%Horror%' AND year>=2000  LIMIT 10");
		return $query->result();
	}

	public function movieNewRealese($limit, $start)
	{
		$this->db->select('*');
		$this->db->order_by("year", "DESC");
		$query = $this->db->get("tb_movie", $limit, $start);
		return $query->result();
	}

	public function cAction($limit, $start)
	{
		$this->db->select('*');
		$this->db->like('genre', 'Action');
		$this->db->order_by("year", "DESC");
		$query = $this->db->get("tb_movie", $limit, $start);
		return $query->result();
	}

	public function cAdventure($limit, $start)
	{
		$this->db->select('*');
		$this->db->like('genre', 'Adventure');
		$this->db->order_by("year", "DESC");
		$query = $this->db->get("tb_movie", $limit, $start);
		return $query->result();
	}

	public function cAnimation($limit, $start)
	{
		$this->db->select('*');
		$this->db->like('genre', 'Animation');
		$this->db->order_by("year", "DESC");
		$query = $this->db->get("tb_movie", $limit, $start);
		return $query->result();
	}

	public function cComedy($limit, $start)
	{
		$this->db->select('*');
		$this->db->like('genre', 'Comedy');
		$this->db->order_by("year", "DESC");
		$query = $this->db->get("tb_movie", $limit, $start);
		return $query->result();
	}

	public function cCrime($limit, $start)
	{
		$this->db->select('*');
		$this->db->like('genre', 'Action');
		$this->db->order_by("year", "DESC");
		$query = $this->db->get("tb_movie", $limit, $start);
		return $query->result();
	}

	public function cDrama($limit, $start)
	{
		$this->db->select('*');
		$this->db->like('genre', 'Drama');
		$this->db->order_by("year", "DESC");
		$query = $this->db->get("tb_movie", $limit, $start);
		return $query->result();
	}

	public function cFamily($limit, $start)
	{
		$this->db->select('*');
		$this->db->like('genre', 'Family');
		$this->db->order_by("year", "DESC");
		$query = $this->db->get("tb_movie", $limit, $start);
		return $query->result();
	}

	public function cHorror($limit, $start)
	{
		$this->db->select('*');
		$this->db->like('genre', 'Horror');
		$this->db->order_by("year", "DESC");
		$query = $this->db->get("tb_movie", $limit, $start);
		return $query->result();
	}

	public function cSciFi($limit, $start)
	{
		$this->db->select('*');
		$this->db->like('genre', 'Sci-Fi');
		$this->db->order_by("year", "DESC");
		$query = $this->db->get("tb_movie", $limit, $start);
		return $query->result();
	}

	public function cWar($limit, $start)
	{
		$this->db->select('*');
		$this->db->like('genre', 'War');
		$this->db->order_by("year", "DESC");
		$query = $this->db->get("tb_movie", $limit, $start);
		return $query->result();
	}


	public function like($id)
	{
		$this->db->set('vote', 'vote+1', FALSE);
		$this->db->where('id_movie', $id);
		$this->db->update('tb_movie');
	}
}
