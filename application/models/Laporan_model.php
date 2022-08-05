<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    public function laporan_pengajuan($kode_dokumen, $tanggal, $bulan, $tahun)
    {
        $tanggal_bulan_tahun = $tahun . '-' . $bulan . '-' . $tanggal;
        $bulan_tahun = $tahun . '-' . $bulan;

        $laporan = array();
        $this->db->select('*');
        $this->db->from('tabel_pengajuan');
        $this->db->join('tabel_dokumen', 'tabel_dokumen.kode_dokumen = tabel_pengajuan.kode_dokumen');
        $this->db->join('tabel_penduduk', 'tabel_penduduk.nik_penduduk = tabel_pengajuan.nik_penduduk');

        if ($kode_dokumen == 'semua' && $tanggal != '' && $bulan != '' && $tahun != '') {
            $this->db->like('tabel_pengajuan.tanggal_pengajuan', $tanggal_bulan_tahun);
            $laporan = $this->db->get()->result_array();
        } else if ($tanggal != '' && $bulan != '' && $tahun != '') {
            $this->db->where('tabel_dokumen.kode_dokumen', $kode_dokumen);
            $this->db->like('tabel_pengajuan.tanggal_pengajuan', $tanggal_bulan_tahun);
            $laporan = $this->db->get()->result_array();
        } else if ($kode_dokumen == 'semua' && $bulan != '' && $tahun != '') {
            $this->db->like('tabel_pengajuan.tanggal_pengajuan', $bulan_tahun);
            $laporan = $this->db->get()->result_array();
        } else if ($bulan != '' && $tahun != '') {
            $this->db->where('tabel_dokumen.kode_dokumen', $kode_dokumen);
            $this->db->like('tabel_pengajuan.tanggal_pengajuan', $bulan_tahun);
            $laporan = $this->db->get()->result_array();
        } else if ($kode_dokumen == 'semua' && $tahun != '') {
            $this->db->like('tabel_pengajuan.tanggal_pengajuan', $tahun);
            $laporan = $this->db->get()->result_array();
        } else if ($tahun != '') {
            $this->db->where('tabel_dokumen.kode_dokumen', $kode_dokumen);
            $this->db->like('tabel_pengajuan.tanggal_pengajuan', $tahun);
            $laporan = $this->db->get()->result_array();
        } else {
            $laporan = null;
        }
        return $laporan;
    }
    public function laporan_penduduk($kode_jorong)
    {
        $laporan = array();

        $this->db->select('*');
        $this->db->from('tabel_penduduk');
        $this->db->join('tabel_jorong', 'tabel_jorong.kode_jorong = tabel_penduduk.kode_jorong');

        if ($kode_jorong == 'semua') {
            $laporan = $this->db->get()->result_array();
        } else {
            $this->db->where('tabel_jorong.kode_jorong', $kode_jorong);
            $laporan = $this->db->get()->result_array();
        }
        return $laporan;
    }
}
