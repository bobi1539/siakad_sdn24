<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->query("SELECT * FROM tbl_nilai AS tn JOIN tbl_siswa as ts ON ts.nis = tn.nis JOIN tbl_mapel as tm ON tm.id_pelajaran = tn.id_pelajaran")->result_array();
    }

    public function tampil_nilai_by_id($id_nilai)
    {
        $this->db->where("id_nilai", $id_nilai);
        return $this->db->get("tbl_nilai")->row_array();
    }

    public function hapus($id_nilai)
    {
        $this->db->where('id_nilai', $id_nilai);
        $this->db->delete('tbl_nilai');
    }

    public function tambah($data)
    {
        $this->db->insert('tbl_nilai', $data);
    }

    public function edit($id_absen, $data)
    {
        $this->db->where('id_absen', $id_absen);
        $this->db->update('tbl_absensi', $data);
    }

    public function lihat_nilai_siswa_by_nis_array($nis)
    {
        return $this->db->query("SELECT * FROM tbl_nilai AS tn JOIN tbl_siswa as ts ON ts.nis = tn.nis JOIN tbl_mapel as tm ON tm.id_pelajaran = tn.id_pelajaran WHERE tn.nis = '$nis'")->result_array();
    }

    public function lihat_nilai_siswa_by_nis($nis)
    {
        return $this->db->query("SELECT * FROM tbl_nilai AS tn JOIN tbl_siswa as ts ON ts.nis = tn.nis JOIN tbl_mapel as tm ON tm.id_pelajaran = tn.id_pelajaran WHERE tn.nis = '$nis'")->row_array();
    }

    public function lihat_nilai_siswa_by_nis_array_semester($nis, $semester)
    {
        return $this->db->query("SELECT * FROM tbl_nilai AS tn JOIN tbl_siswa as ts ON ts.nis = tn.nis JOIN tbl_mapel as tm ON tm.id_pelajaran = tn.id_pelajaran WHERE tn.nis = '$nis' AND tn.semester = '$semester'")->result_array();
    }

    public function lihat_nilai_siswa_by_nis_semester($nis, $semester)
    {
        return $this->db->query("SELECT * FROM tbl_nilai AS tn JOIN tbl_siswa as ts ON ts.nis = tn.nis JOIN tbl_mapel as tm ON tm.id_pelajaran = tn.id_pelajaran WHERE tn.nis = '$nis' AND tn.semester = '$semester'")->row_array();
    }

    public function lihat_nilai_seluruh_siswa($id_kelas, $semester)
    {
        return $this->db->query("SELECT * FROM tbl_nilai AS tn JOIN tbl_siswa as ts ON ts.nis = tn.nis JOIN tbl_mapel as tm ON tm.id_pelajaran = tn.id_pelajaran WHERE ts.id_kelas = '$id_kelas' AND tn.semester = '$semester'")->result_array();
    }

    public function lihat_nilai_seluruh_siswa_distinct($id_kelas, $semester)
    {
        return $this->db->query("SELECT * FROM tbl_nilai AS tn JOIN tbl_siswa as ts ON ts.nis = tn.nis JOIN tbl_mapel as tm ON tm.id_pelajaran = tn.id_pelajaran WHERE ts.id_kelas = '$id_kelas' AND tn.semester = '$semester' GROUP BY tn.nis")->result_array();
    }

    public function to_get_average($id_kelas, $semester)
    {
        return $this->db->query("SELECT tn.id_pelajaran, tn.p_nilai, AVG(tn.p_nilai) AS total FROM tbl_nilai AS tn JOIN tbl_siswa as ts ON ts.nis = tn.nis JOIN tbl_mapel as tm ON tm.id_pelajaran = tn.id_pelajaran WHERE ts.id_kelas = '$id_kelas' AND tn.semester = '$semester' GROUP BY tn.id_pelajaran")->result_array();
    }
}
