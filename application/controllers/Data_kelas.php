<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        isLogin();
    }

    public function index()
    {
        $data['aktif'] = 'data_kelas';
        $data['data_kelas'] = $this->Kelas_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_kelas/data_kelas', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function print_data()
    {
        $data['aktif'] = 'data_kelas';
        $data['data_kelas'] = $this->Kelas_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('data_kelas/print_data', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['aktif'] = 'data_kelas';
        $data['data_guru'] = $this->Guru_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_kelas/tambah', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function edit($id_kelas)
    {
        $data['aktif'] = 'data_kelas';
        $data['data_kelas'] = $this->Kelas_model->tampil_by_id($id_kelas);
        $data['data_guru'] = $this->Guru_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_kelas/edit', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $id_kelas = $this->input->post('id_kelas', true);
        $nip = $this->input->post('nip', true);
        $wali_kelas = $this->input->post('wali_kelas', true);

        $data_kelas = $this->Kelas_model->tampil_by_id($id_kelas);

        if ($data_kelas) {
            pesan('Data kelas dengan id : ' . $id_kelas . ' telah ada', 'danger');
            redirect('data_kelas');
        }

        $data = array(
            'id_kelas' => $id_kelas,
            'nip' => $nip,
            'wali_kelas' => $wali_kelas,
        );

        $this->Kelas_model->tambah($data);

        pesan('Data kelas berhasil ditambahkan', 'success');
        redirect('data_kelas');
    }

    public function edit_aksi()
    {
        $id_kelas = $this->input->post('id_kelas', true);
        $nip = $this->input->post('nip', true);
        $wali_kelas = $this->input->post('wali_kelas', true);

        $data = array(
            'nip' => $nip,
            'wali_kelas' => $wali_kelas,
        );

        $this->Kelas_model->edit($id_kelas, $data);

        pesan('Data kelas berhasil diubah', 'success');
        redirect('data_kelas');
    }

    public function hapus($id_kelas)
    {
        $is_delete = $this->Kelas_model->hapus($id_kelas);
        if (!$is_delete) {
            pesan('Data kelas tidak bisa dihapus karena dipakai di tabel lain', 'warning');
        } else {
            pesan('Data kelas berhasil dihapus', 'success');
        }
        redirect('data_kelas');
    }
}
