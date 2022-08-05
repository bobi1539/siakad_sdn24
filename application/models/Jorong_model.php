<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jorong_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tabel_jorong')->result_array();
    }

    public function hapus($kode_jorong)
    {
        $this->db->where('kode_jorong', $kode_jorong);
        $this->db->delete('tabel_jorong');
    }

    public function tambah($data)
    {
        $this->db->insert('tabel_jorong', $data);
    }

    public function edit($kode_jorong, $data)
    {
        $this->db->where('kode_jorong', $kode_jorong);
        $this->db->update('tabel_jorong', $data);
    }

    public function tampil_by_kode($kode_jorong)
    {
        $this->db->where('kode_jorong', $kode_jorong);
        return $this->db->get('tabel_jorong')->row_array();
    }
}
