<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        isLogin();
    }

    public function index()
    {
        $data['aktif'] = 'data_siswa';
        $data['data_siswa'] = $this->Siswa_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_siswa/data_siswa', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function print_data()
    {
        $data['aktif'] = 'data_siswa';
        $data['data_siswa'] = $this->Siswa_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('data_siswa/print_data', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['aktif'] = 'data_siswa';
        $data['data_kelas'] = $this->Kelas_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_siswa/tambah', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function edit($nis)
    {
        $data['aktif'] = 'data_siswa';
        $data['data_siswa'] = $this->Siswa_model->tampil_by_id($nis);
        $data['data_kelas'] = $this->Kelas_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_siswa/edit', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $nis = $this->input->post('nis', true);
        $nisn = $this->input->post('nisn', true);
        $nama_siswa = $this->input->post('nama_siswa', true);
        $jenis_kelamin = $this->input->post('jenis_kelamin', true);
        $tanggal_lahir = $this->input->post('tanggal_lahir', true);
        $tempat_lahir = $this->input->post('tempat_lahir', true);
        $alamat = $this->input->post('alamat', true);
        $n_ayah = $this->input->post('n_ayah', true);
        $n_ibu = $this->input->post('n_ibu', true);
        $p_ayah = $this->input->post('p_ayah', true);
        $p_ibu = $this->input->post('p_ibu', true);
        $no_telpon = $this->input->post('no_telpon', true);
        $t_badan = $this->input->post('t_badan', true);
        $b_badan = $this->input->post('b_badan', true);
        $k_pendengaran = $this->input->post('k_pendengaran', true);
        $k_penglihatan = $this->input->post('k_penglihatan', true);
        $k_gigi = $this->input->post('k_gigi', true);
        $id_kelas = $this->input->post('id_kelas', true);

        $data_siswa = $this->Siswa_model->tampil_by_id($nis);

        if ($data_siswa) {
            pesan('Data pelajaran dengan NIS : ' . $nis . ' telah ada', 'danger');
            redirect('data_siswa');
        }

        $data = array(
            'nis' => $nis,
            'nisn' => $nisn,
            'nama_siswa' => $nama_siswa,
            'jenis_kelamin' => $jenis_kelamin,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'alamat' => $alamat,
            'n_ayah' => $n_ayah,
            'n_ibu' => $n_ibu,
            'p_ayah' => $p_ayah,
            'p_ibu' => $p_ibu,
            'no_telpon' => $no_telpon,
            't_badan' => $t_badan,
            'b_badan' => $b_badan,
            'k_pendengaran' => $k_pendengaran,
            'k_penglihatan' => $k_penglihatan,
            'k_gigi' => $k_gigi,
            'id_kelas' => $id_kelas
        );

        $this->Siswa_model->tambah($data);

        pesan('Data siswa berhasil ditambahkan', 'success');
        redirect('data_siswa');
    }

    public function edit_aksi()
    {
        $nis = $this->input->post('nis', true);
        $nisn = $this->input->post('nisn', true);
        $nama_siswa = $this->input->post('nama_siswa', true);
        $jenis_kelamin = $this->input->post('jenis_kelamin', true);
        $tanggal_lahir = $this->input->post('tanggal_lahir', true);
        $tempat_lahir = $this->input->post('tempat_lahir', true);
        $alamat = $this->input->post('alamat', true);
        $n_ayah = $this->input->post('n_ayah', true);
        $n_ibu = $this->input->post('n_ibu', true);
        $p_ayah = $this->input->post('p_ayah', true);
        $p_ibu = $this->input->post('p_ibu', true);
        $no_telpon = $this->input->post('no_telpon', true);
        $t_badan = $this->input->post('t_badan', true);
        $b_badan = $this->input->post('b_badan', true);
        $k_pendengaran = $this->input->post('k_pendengaran', true);
        $k_penglihatan = $this->input->post('k_penglihatan', true);
        $k_gigi = $this->input->post('k_gigi', true);
        $id_kelas = $this->input->post('id_kelas', true);

        $data = array(
            'nisn' => $nisn,
            'nama_siswa' => $nama_siswa,
            'jenis_kelamin' => $jenis_kelamin,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'alamat' => $alamat,
            'n_ayah' => $n_ayah,
            'n_ibu' => $n_ibu,
            'p_ayah' => $p_ayah,
            'p_ibu' => $p_ibu,
            'no_telpon' => $no_telpon,
            't_badan' => $t_badan,
            'b_badan' => $b_badan,
            'k_pendengaran' => $k_pendengaran,
            'k_penglihatan' => $k_penglihatan,
            'k_gigi' => $k_gigi,
            'id_kelas' => $id_kelas
        );

        $this->Siswa_model->edit($nis, $data);

        pesan('Data siswa berhasil diubah', 'success');
        redirect('data_siswa');
    }

    public function hapus($nis)
    {
        $this->Siswa_model->hapus($nis);
        pesan('Data siswa berhasil dihapus', 'success');
        redirect('data_siswa');
    }
}
