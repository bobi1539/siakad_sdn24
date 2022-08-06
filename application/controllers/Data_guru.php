<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        isLogin();
    }

    public function index(){
        $data['aktif'] = 'data_guru';
        $data['data_guru'] = $this->Guru_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_guru/data_guru', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['aktif'] = 'data_guru';

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_guru/tambah', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function edit($nip){
        $data['aktif'] = 'data_guru';
        $data['data_guru'] = $this->Guru_model->tampil_by_id($nip);

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_guru/edit', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $nip = $this->input->post('nip', true);
        $nama_guru = $this->input->post('nama_guru', true);
        $jabatan = $this->input->post('jabatan', true);
        $tanggal_lahir = $this->input->post('tanggal_lahir', true);
        $tempat_lahir = $this->input->post('tempat_lahir', true);
        $alamat = $this->input->post('alamat', true);

        $data_guru = $this->Guru_model->tampil_by_id($nip);

        if ($data_guru) {
            pesan('Data kelas dengan nip : ' . $nip . ' telah ada', 'danger');
            redirect('data_guru');
        } 
        
        $data = array(
            'nip' => $nip,
            'nama_guru' => $nama_guru,
            'jabatan' => $jabatan,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'alamat' => $alamat
        );

        $this->Guru_model->tambah($data);

        pesan('Data guru berhasil ditambahkan', 'success');
        redirect('data_guru');

    }

    public function edit_aksi()
    {
        $nip = $this->input->post('nip', true);
        $nama_guru = $this->input->post('nama_guru', true);
        $jabatan = $this->input->post('jabatan', true);
        $tanggal_lahir = $this->input->post('tanggal_lahir', true);
        $tempat_lahir = $this->input->post('tempat_lahir', true);
        $alamat = $this->input->post('alamat', true);
        
        $data = array(
            'nama_guru' => $nama_guru,
            'jabatan' => $jabatan,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'alamat' => $alamat
        );

        $this->Guru_model->edit($nip, $data);

        pesan('Data guru berhasil diubah', 'success');
        redirect('data_guru');

    }

    public function hapus($nip)
    {
        $is_delete = $this->Guru_model->hapus($nip);
        if(!$is_delete){
            pesan('Data guru tidak bisa dihapus karena ada di tabel lain', 'warning');
        } else {
            pesan('Data guru berhasil dihapus', 'success');
        }
        redirect('data_guru');
    }
}
