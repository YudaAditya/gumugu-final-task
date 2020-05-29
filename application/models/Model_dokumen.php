<?php

class Model_dokumen extends CI_Model
{
	function input($data, $tabel)
	{
		$this->db->insert($tabel, $data);
	}

	function show($tabel)
	{
		return $this->db->get($tabel);
	}

	function search($tabel, $keyword)
	{
		$this->db->from($tabel);
		$this->db->like('name', $keyword);
		$this->db->or_like('publisher', $keyword);
		$this->db->or_like('created', $keyword);
		$this->db->or_like('expired', $keyword);
		$this->db->or_like('file', $keyword);
		return $this->db->get();
	}

	function show_search($tabel){
		return $this->db->select('keyword')->order_by('id',"desc")->limit(1)->get($tabel)->row();
	}

	function count_dv($tabel, $param)
	{
		$this->db->insert($tabel, $param);
	}

	function count($tabel,$param2)
	{
		// $this->db->group_by('keyword');
        // $this->db->select('keyword');
        // $this->db->select("count(*) as total");
        // return $this->db->from($tabel)
        //   ->get()
        //   ->result();
		$query = $this->db->query("SELECT *, COUNT(*) AS total FROM $tabel GROUP BY $param2");
        return $query->result();
	}

	function update($where, $data, $tabel)
	{
		$this->db->where($where);
		$this->db->update($tabel, $data);
	}

	public function getById($id, $table)
	{
		return $this->db->get_where($table, ["id" => $id])->result();
	}
}
