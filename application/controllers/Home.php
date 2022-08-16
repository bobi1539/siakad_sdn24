<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['aktif'] = 'home';

        $this->load->view('template/header');
        $this->load->view('template/navbar', $data);
        $this->load->view('home/index');
        $this->load->view('template/footer');
    }

    public function about()
    {
        $data['aktif'] = 'about';

        $this->load->view('template/header');
        $this->load->view('template/navbar', $data);
        $this->load->view('home/about');
        $this->load->view('template/footer');
    }
}
