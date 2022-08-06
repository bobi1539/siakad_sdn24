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

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_nilai/data_nilai', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['aktif'] = 'data_nilai';
        $data['data_siswa'] = $this->Siswa_model->tampil_data();
        $data['data_pelajaran'] = $this->Pelajaran_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_nilai/tambah', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    // public function edit($nip){
    //     $data['aktif'] = 'data_guru';
    //     $data['data_guru'] = $this->Guru_model->tampil_by_id($nip);

    //     $this->load->view('template/header');
    //     $this->load->view('template/admin/sidebar', $data);
    //     $this->load->view('data_guru/edit', $data);
    //     $this->load->view('template/end_sidebar');
    //     $this->load->view('template/footer');
    // }

    public function tambah_aksi()
    {
        $id_nilai = $this->input->post('id_nilai', true);
        $nis = $this->input->post('nis', true);
        $id_pelajaran = $this->input->post('id_pelajaran', true);
        $n_sekolah = $this->input->post('n_sekolah', true);
        $t_pelajaran = $this->input->post('t_pelajaran', true);
        $semester = "";
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


        $data_nilai = $this->Nilai_model->tampil_nilai_by_id($id_nilai);

        if ($data_nilai) {
            pesan('Data nilai dengan id : ' . $id_nilai . ' telah ada', 'danger');
            redirect('data_nilai');
        }

        $data = array(
            "id_nilai" => $id_nilai,
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

    // public function edit_aksi()
    // {
    //     $nip = $this->input->post('nip', true);
    //     $nama_guru = $this->input->post('nama_guru', true);
    //     $jabatan = $this->input->post('jabatan', true);
    //     $tanggal_lahir = $this->input->post('tanggal_lahir', true);
    //     $tempat_lahir = $this->input->post('tempat_lahir', true);
    //     $alamat = $this->input->post('alamat', true);

    //     $data = array(
    //         'nama_guru' => $nama_guru,
    //         'jabatan' => $jabatan,
    //         'tanggal_lahir' => $tanggal_lahir,
    //         'tempat_lahir' => $tempat_lahir,
    //         'alamat' => $alamat
    //     );

    //     $this->Guru_model->edit($nip, $data);

    //     pesan('Data guru berhasil diubah', 'success');
    //     redirect('data_guru');

    // }

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
}
