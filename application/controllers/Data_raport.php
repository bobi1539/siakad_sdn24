<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_raport extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        isLogin();
    }

    public function index()
    {
        $data['aktif'] = 'data_raport';
        $data['data_raport'] = $this->Nilai_model->tampil_data();
        $data['data_siswa'] = $this->Siswa_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_raport/data_raport', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function lihat($nis)
    {
        $semester = $this->input->post('semester');

        $data['nilai_siswa_array'] = $this->Nilai_model->lihat_nilai_siswa_by_nis_array_semester($nis, $semester);
        $data['nilai_siswa'] = $this->Nilai_model->lihat_nilai_siswa_by_nis_semester($nis, $semester);

        $this->load->view('template/header');
        $this->load->view('data_raport/lihat', $data);
        $this->load->view('template/footer');
    }
}
