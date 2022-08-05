<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelajaran_model extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select("*");
        $this->db->from("tbl_mapel");
        $this->db->join("tbl_kelas", "tbl_kelas.id_kelas = tbl_mapel.id_kelas");
        $this->db->join("tbl_guru", "tbl_guru.nip = tbl_mapel.nip");
        return $this->db->get()->result_array();
    }

    public function hapus($id_pelajaran)
    {
        $this->db->where('id_pelajaran', $id_pelajaran);
        $this->db->delete('tbl_mapel');
    }

    public function tambah($data)
    {
        $this->db->insert('tbl_mapel', $data);
    }

    public function edit($id_pelajaran, $data)
    {
        $this->db->where('id_pelajaran', $id_pelajaran);
        $this->db->update('tbl_mapel', $data);
    }

    public function tampil_by_id($id_pelajaran)
    {
        $this->db->select("*");
        $this->db->from("tbl_mapel");
        $this->db->join("tbl_kelas", "tbl_kelas.id_kelas = tbl_mapel.id_kelas");
        $this->db->join("tbl_guru", "tbl_guru.nip = tbl_mapel.nip");
        $this->db->where('id_pelajaran', $id_pelajaran);
        return $this->db->get()->row_array();
    }
}
