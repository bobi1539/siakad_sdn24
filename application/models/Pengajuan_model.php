<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan_model extends CI_Model
{
    public function tambah_data($data)
    {
        $this->db->insert('tabel_pengajuan', $data);
    }

    public function tampil_by_nik($nik_penduduk)
    {
        $this->db->select('*');
        $this->db->from('tabel_pengajuan');
        $this->db->join('tabel_dokumen', 'tabel_dokumen.kode_dokumen = tabel_pengajuan.kode_dokumen');
        $this->db->where('nik_penduduk', $nik_penduduk);
        return $this->db->get()->result_array();
    }

    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tabel_pengajuan');
        $this->db->join('tabel_dokumen', 'tabel_dokumen.kode_dokumen = tabel_pengajuan.kode_dokumen');
        $this->db->join('tabel_penduduk', 'tabel_penduduk.nik_penduduk = tabel_pengajuan.nik_penduduk');
        return $this->db->get()->result_array();
    }

    public function hapus($no_pengajuan)
    {
        $this->db->where('no_pengajuan', $no_pengajuan);
        $this->db->delete('tabel_pengajuan');
    }

    public function tampil_by_no_pengajuan($no_pengajuan)
    {
        $this->db->select('*');
        $this->db->from('tabel_pengajuan');
        $this->db->join('tabel_dokumen', 'tabel_dokumen.kode_dokumen = tabel_pengajuan.kode_dokumen');
        $this->db->join('tabel_penduduk', 'tabel_penduduk.nik_penduduk = tabel_pengajuan.nik_penduduk');
        $this->db->join('tabel_jorong', 'tabel_jorong.kode_jorong = tabel_penduduk.kode_jorong');
        $this->db->where('no_pengajuan', $no_pengajuan);
        return $this->db->get()->row_array();
    }

    public function update_data($no_pengajuan, $data)
    {
        $this->db->where('no_pengajuan', $no_pengajuan);
        $this->db->update('tabel_pengajuan', $data);
    }
}
