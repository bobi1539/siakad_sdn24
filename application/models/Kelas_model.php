<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select("*");
        $this->db->from("tbl_kelas");
        $this->db->join("tbl_guru", "tbl_guru.nip = tbl_kelas.nip");
        return $this->db->get()->result_array();
    }

    public function hapus($id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        $data_mapel = $this->db->get('tbl_mapel')->row_array();

        $this->db->where('id_kelas', $id_kelas);
        $data_siswa = $this->db->get('tbl_siswa')->row_array();

        if($data_mapel || $data_siswa){
            return false;
        }

        $this->db->where('id_kelas', $id_kelas);
        $this->db->delete('tbl_kelas');

        return true;
    }

    public function tambah($data)
    {
        $this->db->insert('tbl_kelas', $data);
    }

    public function edit($id_kelas, $data)
    {
        $this->db->where('id_kelas', $id_kelas);
        $this->db->update('tbl_kelas', $data);
    }

    public function tampil_by_id($id_kelas)
    {
        $this->db->select("*");
        $this->db->from("tbl_kelas");
        $this->db->join("tbl_guru", "tbl_guru.nip = tbl_kelas.nip");
        $this->db->where("id_kelas", $id_kelas);
        return $this->db->get()->row_array();
    }
}
