<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        isLogin();
    }

    public function index()
    {
        $data['aktif'] = 'data_user';
        $data['data_user'] = $this->Login_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_user/data_user', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function print_data()
    {
        $data['aktif'] = 'data_user';
        $data['data_user'] = $this->Login_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('data_user/print_data', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['aktif'] = 'data_user';
        $data['data_guru'] = $this->Guru_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_user/tambah', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function ganti_password($username)
    {
        $data['aktif'] = 'data_user';
        $data['data_user'] = $this->Login_model->tampil_by_username($username);

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_user/ganti_password', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $nip = $this->input->post('nip', true);
        $role_id = $this->input->post('role_id', true);

        $data_user = $this->Login_model->tampil_by_username($username);

        if ($data_user) {
            pesan('Data user dengan username : ' . $username . ' telah ada', 'danger');
            redirect('data_user');
        }

        $data = array(
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'nip' => $nip,
            'role_id' => $role_id
        );

        $this->Login_model->tambah($data);

        pesan('Data user berhasil ditambahkan', 'success');
        redirect('data_user');
    }

    public function ganti_password_aksi()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $data = array(
            'password' => password_hash($password, PASSWORD_BCRYPT)
        );

        $this->Login_model->update_data($username, $data);

        pesan('Password user : ' . $username . " berhasil diubah.", 'success');
        redirect('data_user');
    }

    public function hapus($username)
    {
        $this->Login_model->hapus_data($username);
        pesan("Data user berhasil dihapus", "success");
        redirect('data_user');
    }
}
