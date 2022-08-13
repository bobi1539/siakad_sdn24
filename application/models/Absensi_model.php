<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi_model extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select("*");
        $this->db->from("tbl_absensi");
        $this->db->join("tbl_guru", "tbl_guru.nip = tbl_absensi.nip");
        $this->db->join("tbl_siswa", "tbl_siswa.nis = tbl_absensi.nis");
        $this->db->join("tbl_mapel", "tbl_mapel.id_pelajaran = tbl_absensi.id_pelajaran");
        return $this->db->get()->result_array();
    }

    public function tampil_distinct_data()
    {
        return $this->db->query("SELECT DISTINCT id_absen, tanggal_absen, semester FROM tbl_absensi")->result_array();
    }

    public function hapus($id_absen)
    {
        $this->db->where('id_absen', $id_absen);
        $this->db->delete('tbl_absensi');
    }

    public function tambah($data)
    {
        $this->db->insert('tbl_absensi', $data);
    }

    public function edit($id_absen, $data)
    {
        $this->db->where('id_absen', $id_absen);
        $this->db->update('tbl_absensi', $data);
    }

    public function tampil_by_id($id_absen)
    {
        $this->db->select("*");
        $this->db->from("tbl_absensi");
        $this->db->join("tbl_guru", "tbl_guru.nip = tbl_absensi.nip");
        $this->db->join("tbl_siswa", "tbl_siswa.nis = tbl_absensi.nis");
        $this->db->join("tbl_mapel", "tbl_mapel.id_pelajaran = tbl_absensi.id_pelajaran");
        $this->db->join("tbl_kelas", "tbl_kelas.id_kelas = tbl_mapel.id_kelas");
        $this->db->where('id_absen', $id_absen);
        return $this->db->get()->row_array();
    }

    public function lihat_by_id($id_absen)
    {
        $this->db->select("*");
        $this->db->from("tbl_absensi");
        $this->db->join("tbl_guru", "tbl_guru.nip = tbl_absensi.nip");
        $this->db->join("tbl_siswa", "tbl_siswa.nis = tbl_absensi.nis");
        $this->db->join("tbl_mapel", "tbl_mapel.id_pelajaran = tbl_absensi.id_pelajaran");
        $this->db->where('id_absen', $id_absen);
        return $this->db->get()->result_array();
    }

    public function tampil_only_absensi($id_absen)
    {
        $this->db->where("id_absen", $id_absen);
        return $this->db->get("tbl_absensi")->row_array();
    }

    public function tampil_only_absensi_dan_siswa($id_absen, $nis)
    {
        return $this->db->query("SELECT * FROM tbl_absensi WHERE id_absen = '$id_absen' AND nis = '$nis'")->row_array();
    }

    public function tampil_absensi_judul($id_absen)
    {
        return $this->db->query("SELECT DISTINCT ta.nip, tg.nama_guru, tm.nama_pelajaran, tm.id_kelas FROM tbl_absensi as ta JOIN tbl_guru as tg ON tg.nip = ta.nip JOIN tbl_mapel as tm ON tm.id_pelajaran = ta.id_pelajaran WHERE ta.id_absen = '$id_absen'")->row_array();
    }

    public function tampil_id_max()
    {
        return $this->db->query("SELECT MAX(id_absen) as id_absen FROM tbl_absensi")->row_array();
    }
}
