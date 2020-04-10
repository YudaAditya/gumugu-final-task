<?php 

class Model_dokumen extends CI_Model{
    function input($data, $tabel){
        $this->db->insert($tabel,$data);
    }

    function show($tabel){
        return $this->db->get($tabel);
    }

    function search($tabel, $keyword){
        $this->db->from($tabel);
        $this->db->like('name',$keyword);
        $this->db->or_like('publisher',$keyword);
        $this->db->or_like('created',$keyword);
        $this->db->or_like('expired',$keyword);
        $this->db->or_like('file',$keyword);
        return $this->db->get();
    }

    function count_search($tabel, $key){
        $this->db->insert($tabel,$key);
    }

    function count_dv($tabel, $date){
        $this->db->insert($tabel, $date);
    }

    function count($tabel,$id,$column){
        return $this->db->select($column)->from($tabel)
            ->where('id',$id)
        ->get();
    }

    function update($where,$data,$tabel){
        $this->db->where($where);
        $this->db->update($tabel,$data);
    }


}