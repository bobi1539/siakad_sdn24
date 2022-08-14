<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        isLogin();
    }

    public function index()
    {
        $data['aktif'] = 'data_nilai';
        $data['data_nilai'] = $this->Nilai_model->tampil_data();
        $data['data_siswa'] = $this->Siswa_model->tampil_data();
        $data['data_kelas'] = $this->Kelas_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_nilai/data_nilai', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $id_kelas = $this->input->post('id_kelas', true);

        $data['aktif'] = 'data_nilai';
        $data['data_siswa'] = $this->Siswa_model->tampil_data_by_id_kelas($id_kelas);
        $data['data_pelajaran'] = $this->Pelajaran_model->lihat_by_id_kelas($id_kelas);

        if ($data['data_siswa'] == null) {
            pesan('Silahkah tambahkan siswa untuk kelas ' . $id_kelas, 'danger');
            redirect('data_nilai');
        }

        if ($data['data_pelajaran'] == null) {
            pesan('Silahkah tambahkan pelajaran untuk kelas ' . $id_kelas, 'danger');
            redirect('data_nilai');
        }

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_nilai/tambah', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $nis = $this->input->post('nis', true);
        $id_pelajaran = $this->input->post('id_pelajaran', true);
        $n_sekolah = $this->input->post('n_sekolah', true);
        $t_pelajaran = $this->input->post('t_pelajaran', true);
        $semester = $this->input->post('semester', true);
        $s_spiritual = $this->input->post('s_spiritual', true);
        $s_sosial = $this->input->post('s_sosial', true);
        $p_nilai = $this->input->post('p_nilai', true);
        $p_predekat = $this->input->post('p_predekat', true);
        $p_deskripsi = $this->input->post('p_deskripsi', true);
        $k_nilai = $this->input->post('k_nilai', true);
        $k_predikat = $this->input->post('k_predikat', true);
        $k_deskripsi = $this->input->post('k_deskripsi', true);
        $a_sekolah = $this->input->post('a_sekolah', true);
        $saran = $this->input->post('saran', true);
        $ket_sakit = $this->input->post('ket_sakit', true);
        $ket_izin = $this->input->post('ket_izin', true);
        $ket_alpha = $this->input->post('ket_alpha', true);


        // $data_nilai = $this->Nilai_model->tampil_nilai_by_id($id_nilai);

        // if ($data_nilai) {
        //     pesan('Data nilai dengan id : ' . $id_nilai . ' telah ada', 'danger');
        //     redirect('data_nilai');
        // }

        $data = array(
            // "id_nilai" => $id_nilai,
            "nis" => $nis,
            "id_pelajaran" => $id_pelajaran,
            "n_sekolah" => $n_sekolah,
            "t_pelajaran" => $t_pelajaran,
            "semester" => $semester,
            "s_spiritual" => $s_spiritual,
            "s_sosial" => $s_sosial,
            "p_nilai" => $p_nilai,
            "p_predekat" => $p_predekat,
            "p_deskripsi" => $p_deskripsi,
            "k_nilai" => $k_nilai,
            "k_predikat" => $k_predikat,
            "k_deskripsi" => $k_deskripsi,
            "a_sekolah" => $a_sekolah,
            "saran" => $saran,
            "ket_sakit" => $ket_sakit,
            "ket_izin" => $ket_izin,
            "ket_alpha" => $ket_alpha
        );

        $this->Nilai_model->tambah($data);

        pesan('Data nilai berhasil ditambahkan', 'success');
        redirect('data_nilai');
    }

    public function lihat_nilai_siswa()
    {
        $nis = $this->input->post("nis", true);
        $semester = $this->input->post("semester", true);
        $data['nilai_siswa_array'] = $this->Nilai_model->lihat_nilai_siswa_by_nis_array_semester($nis, $semester);
        $data['nilai_siswa'] = $this->Nilai_model->lihat_nilai_siswa_by_nis_semester($nis, $semester);

        $this->load->view('template/header');
        $this->load->view('data_nilai/lihat_nilai_siswa', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id_nilai)
    {
        $this->Nilai_model->hapus($id_nilai);
        pesan('Data nilai berhasil dihapus', 'success');
        redirect('data_nilai');
    }

    public function get_siswa($nis)
    {
        $data = $this->Siswa_model->tampil_by_id($nis);
        echo json_encode($data);
    }

    public function get_siswa_pelajaran($nis)
    {
        $data_siswa = $this->Siswa_model->tampil_by_id($nis);
        $id_kelas = $data_siswa['id_kelas'];
        $data = $this->Pelajaran_model->lihat_by_id_kelas($id_kelas);
        echo json_encode($data);
    }
}
