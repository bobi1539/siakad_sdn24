<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('username')) {
        //     redirect('dashboard');
        // }
    }
    
    public function index()
    {
        $data['aktif'] = 'login';
        $this->load->view('template/header');
        $this->load->view('login/login');
        $this->load->view('template/footer');
    }

    public function login_user()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $data_user = $this->Login_model->tampil_by_username($username);

        if(!$data_user){
            $this->pesan('Username tidak terdaftar', 'danger');
            redirect('login');
        }

        if(!password_verify($password, $data_user['password'])){
            $this->pesan('Password anda salah', 'danger');
                redirect('login');
        }

        $this->session->set_userdata($data_user);
        
        redirect('data_kelas');
        
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function session_data()
    {
        echo json_encode($this->session->userdata());
    }

    private function pesan($pesan, $type)
    {
        $this->session->set_tempdata('pesan', '<div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">
        ' . $pesan . '        
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>', 2);
    }

    public function regis(){
        $role_id = [
            "TU",
            "WALI KELAS"
        ];
        $data = [
            "username" => "admintu",
            "password" => password_hash("admintu147", PASSWORD_BCRYPT),
            "full_name" => "admin tu",
            "role_id" => $role_id[0]
        ];
        $this->Login_model->tambah($data);
        echo "success";
    }
}
