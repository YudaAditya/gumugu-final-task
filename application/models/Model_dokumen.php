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

	function count_search($tabel, $key)
	{
		$this->db->insert($tabel, $key);
	}

	function count_dv($tabel, $date)
	{
		$this->db->insert($tabel, $date);
	}

	function count($tabel)
	{
		$query = $this->db->query("SELECT *, COUNT(*) AS tanggal FROM $tabel GROUP BY keyword");
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
