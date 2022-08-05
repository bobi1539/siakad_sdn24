<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk_model extends CI_Model
{
    public function tambah_data($data)
    {
        $this->db->insert('tabel_penduduk', $data);
    }

    public function ambil_by_nik($nik_penduduk)
    {
        $this->db->select('*');
        $this->db->from('tabel_penduduk');
        $this->db->join('tabel_jorong', 'tabel_jorong.kode_jorong = tabel_penduduk.kode_jorong');
        $this->db->where('tabel_penduduk.nik_penduduk', $nik_penduduk);
        return $this->db->get()->row_array();
    }

    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tabel_penduduk');
        $this->db->join('tabel_jorong', 'tabel_jorong.kode_jorong = tabel_penduduk.kode_jorong');
        return $this->db->get()->result_array();
    }

    public function update_data($nik_penduduk, $data)
    {
        $this->db->where('nik_penduduk', $nik_penduduk);
        $this->db->update('tabel_penduduk', $data);
    }
    
    public function tampil_by_no_kk($no_kk)
    {
        $this->db->select('*');
        $this->db->from('tabel_penduduk');
        $this->db->join('tabel_jorong', 'tabel_jorong.kode_jorong = tabel_penduduk.kode_jorong');
        $this->db->where('no_kk', $no_kk);
        return $this->db->get()->result_array();
    }

    public function tampil_by_no_kk_status($no_kk, $status_di_keluarga)
    {
        $this->db->select('*');
        $this->db->from('tabel_penduduk');
        $this->db->join('tabel_jorong', 'tabel_jorong.kode_jorong = tabel_penduduk.kode_jorong');
        $this->db->where('no_kk', $no_kk);
        $this->db->where('status_di_keluarga', $status_di_keluarga);
        return $this->db->get()->row_array();
    }

    public function hapus_data($nik_penduduk)
    {
        $this->db->where('nik_penduduk', $nik_penduduk);
        $this->db->delete('tabel_penduduk');
    }

    public function tampil_by_status_di_keluarga($status_di_keluarga)
    {
        $this->db->where('status_di_keluarga', $status_di_keluarga);
        return $this->db->get('tabel_penduduk')->result_array();
    }
}
