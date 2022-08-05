<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil_model extends CI_Model
{
    public function tampil_data()
    {

        $this->db->select('*');
        $this->db->from('tabel_hasil');
        $this->db->join('tabel_pengajuan', 'tabel_pengajuan.no_pengajuan = tabel_hasil.no_pengajuan');
        $this->db->join('tabel_penduduk', 'tabel_penduduk.nik_penduduk = tabel_pengajuan.nik_penduduk');
        $this->db->join('tabel_dokumen', 'tabel_dokumen.kode_dokumen = tabel_pengajuan.kode_dokumen');
        return $this->db->get()->result_array();
    }

    public function tampil_by_nik($nik_penduduk)
    {
        $this->db->select('*');
        $this->db->from('tabel_hasil');
        $this->db->join('tabel_pengajuan', 'tabel_pengajuan.no_pengajuan = tabel_hasil.no_pengajuan');
        $this->db->join('tabel_penduduk', 'tabel_penduduk.nik_penduduk = tabel_pengajuan.nik_penduduk');
        $this->db->join('tabel_dokumen', 'tabel_dokumen.kode_dokumen = tabel_pengajuan.kode_dokumen');
        $this->db->where('tabel_pengajuan.nik_penduduk', $nik_penduduk);
        return $this->db->get()->result_array();
    }

    public function hapus($no_pengajuan)
    {
        $this->db->where('no_pengajuan', $no_pengajuan);
        $this->db->delete('tabel_hasil');
    }

    public function tampil_by_no($no_pengajuan)
    {
        $this->db->where('no_pengajuan', $no_pengajuan);
        return $this->db->get('tabel_hasil')->row_array();
    }

    public function tambah($data)
    {
        $this->db->insert('tabel_hasil', $data);
    }
}
