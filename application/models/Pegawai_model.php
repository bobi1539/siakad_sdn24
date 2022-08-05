<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tabel_pegawai')->result_array();
    }
    public function tambah_data($data)
    {
        $this->db->insert('tabel_pegawai', $data);
    }

    public function ambil_by_no_pegawai($no_pegawai)
    {
        $this->db->where('no_pegawai', $no_pegawai);
        return $this->db->get('tabel_pegawai')->row_array();
    }

    public function update_data($no_pegawai, $data)
    {
        $this->db->where('no_pegawai', $no_pegawai);
        $this->db->update('tabel_pegawai', $data);
    }

    public function hapus_data($no_pegawai)
    {
        $this->db->where('no_pegawai', $no_pegawai);
        $this->db->delete('tabel_pegawai');
    }
}
