<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_pelajaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        isLogin();
    }

    public function index()
    {
        $data['aktif'] = 'data_pelajaran';
        $data['data_pelajaran'] = $this->Pelajaran_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_pelajaran/data_pelajaran', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function print_data()
    {
        $data['aktif'] = 'data_pelajaran';
        $data['data_pelajaran'] = $this->Pelajaran_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('data_pelajaran/print_data', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['aktif'] = 'data_pelajaran';
        $data['data_kelas'] = $this->Kelas_model->tampil_data();
        $data['data_guru'] = $this->Guru_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_pelajaran/tambah', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function edit($id_pelajaran)
    {
        $data['aktif'] = 'data_pelajaran';
        $data['data_pelajaran'] = $this->Pelajaran_model->tampil_by_id($id_pelajaran);
        $data['data_kelas'] = $this->Kelas_model->tampil_data();
        $data['data_guru'] = $this->Guru_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_pelajaran/edit', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        // $id_pelajaran = $this->input->post('id_pelajaran', true);
        $nama_pelajaran = $this->input->post('nama_pelajaran', true);
        $id_kelas = $this->input->post('id_kelas', true);
        $nip = $this->input->post('nip', true);

        // $data_pelajaran = $this->Pelajaran_model->tampil_by_id($id_pelajaran);

        // if ($data_pelajaran) {
        //     pesan('Data pelajaran dengan id : ' . $id_pelajaran . ' telah ada', 'danger');
        //     redirect('data_pelajaran');
        // }

        $data = array(
            // 'id_pelajaran' => $id_pelajaran,
            'nama_pelajaran' => $nama_pelajaran,
            'id_kelas' => $id_kelas,
            'nip' => $nip
        );

        $this->Pelajaran_model->tambah($data);

        pesan('Data pelajaran berhasil ditambahkan', 'success');
        redirect('data_pelajaran');
    }

    public function edit_aksi()
    {
        $id_pelajaran = $this->input->post('id_pelajaran', true);
        $nama_pelajaran = $this->input->post('nama_pelajaran', true);
        $id_kelas = $this->input->post('id_kelas', true);
        $nip = $this->input->post('nip', true);

        $data = array(
            'nama_pelajaran' => $nama_pelajaran,
            'id_kelas' => $id_kelas,
            'nip' => $nip
        );

        $this->Pelajaran_model->edit($id_pelajaran, $data);

        pesan('Data pelajaran berhasil diubah', 'success');
        redirect('data_pelajaran');
    }

    public function hapus($id_pelajaran)
    {
        $this->Pelajaran_model->hapus($id_pelajaran);
        pesan('Data pelajaran berhasil dihapus', 'success');
        redirect('data_pelajaran');
    }
}
