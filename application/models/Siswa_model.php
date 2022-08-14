<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select("*");
        $this->db->from("tbl_siswa");
        $this->db->join("tbl_kelas", "tbl_kelas.id_kelas = tbl_siswa.id_kelas");
        return $this->db->get()->result_array();
    }

    public function tampil_data_by_id_kelas($id_kelas)
    {
        $this->db->select("*");
        $this->db->from("tbl_siswa");
        $this->db->join("tbl_kelas", "tbl_kelas.id_kelas = tbl_siswa.id_kelas");
        $this->db->where("tbl_siswa.id_kelas", $id_kelas);
        return $this->db->get()->result_array();
    }

    public function hapus($nis)
    {
        $this->db->where('nis', $nis);
        $this->db->delete('tbl_siswa');
    }

    public function tambah($data)
    {
        $this->db->insert('tbl_siswa', $data);
    }

    public function edit($nis, $data)
    {
        $this->db->where('nis', $nis);
        $this->db->update('tbl_siswa', $data);
    }

    public function tampil_by_id($nis)
    {
        $this->db->select("*");
        $this->db->from("tbl_siswa");
        $this->db->join("tbl_kelas", "tbl_kelas.id_kelas = tbl_siswa.id_kelas");
        $this->db->where("nis", $nis);
        return $this->db->get()->row_array();
    }
}
