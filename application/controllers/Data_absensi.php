<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_absensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        isLogin();
    }

    public function index()
    {
        $data['aktif'] = 'data_absensi';
        $data['data_absensi'] = $this->Absensi_model->tampil_distinct_data();

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_absensi/data_absensi', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['aktif'] = 'data_absensi';
        $data['data_guru'] = $this->Guru_model->tampil_data();
        $data['data_siswa'] = $this->Siswa_model->tampil_data();
        $data['data_pelajaran'] = $this->Pelajaran_model->tampil_data();

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_absensi/tambah', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function lihat($id_absen)
    {
        $data['aktif'] = 'data_absensi';
        $data['data_siswa'] = $this->Absensi_model->lihat_by_id($id_absen);
        $data['data_absensi'] = $this->Absensi_model->tampil_absensi_judul($id_absen);

        $this->load->view('template/header');
        $this->load->view('data_absensi/lihat', $data);
        $this->load->view('template/footer');
    }

    public function tambah_siswa($id_absen)
    {
        $data['aktif'] = 'data_absensi';
        $data['data_siswa'] = $this->Siswa_model->tampil_data();
        $data['data_absensi'] = $this->Absensi_model->tampil_only_absensi($id_absen);

        $this->load->view('template/header');
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('data_absensi/tambah_siswa', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah_siswa_aksi()
    {
        $id_absen = $this->input->post('id_absen', true);
        $tanggal_absen = $this->input->post('tanggal_absen', true);
        $nip = $this->input->post('nip', true);
        $nis = $this->input->post('nis', true);
        $id_pelajaran = $this->input->post('id_pelajaran', true);
        $keterangan = $this->input->post('keterangan', true);
        $semester = $this->input->post('semester', true);

        $siswa_absen = $this->Absensi_model->tampil_only_absensi_dan_siswa($id_absen, $nis);

        if ($siswa_absen) {
            pesan('Siswa sudah masuk absen di id absen : ' . $id_absen, 'danger');
            redirect('data_absensi');
        }

        $data = array(
            'id_absen' => $id_absen,
            'tanggal_absen' => $tanggal_absen,
            'nip' => $nip,
            'nis' => $nis,
            'id_pelajaran' => $id_pelajaran,
            'keterangan' => $keterangan,
            'semester' => $semester
        );

        $this->Absensi_model->tambah($data);

        pesan('Data siswa absensi berhasil ditambahkan', 'success');
        redirect('data_absensi');
    }

    public function edit($nip)
    {
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
        // $id_absen = $this->input->post('id_absen', true);
        $tanggal_absen = $this->input->post('tanggal_absen', true);
        $nip = $this->input->post('nip', true);
        $nis = $this->input->post('nis', true);
        $id_pelajaran = $this->input->post('id_pelajaran', true);
        $keterangan = $this->input->post('keterangan', true);
        $semester = $this->input->post('semester', true);

        // $data_absen = $this->Absensi_model->tampil_by_id($id_absen);

        // if ($data_absen) {
        //     pesan('Data absen dengan id : ' . $id_absen . ' telah ada', 'danger');
        //     redirect('data_absensi');
        // }

        $absen = $this->Absensi_model->tampil_id_max();
        $id_absen = $absen['id_absen'];
        if ($id_absen == null || $id_absen == '') {
            $id_absen = 1;
        } else {
            $id_absen += 1;
        }
        $data = array(
            'id_absen' => $id_absen,
            'tanggal_absen' => $tanggal_absen,
            'nip' => $nip,
            'nis' => $nis,
            'id_pelajaran' => $id_pelajaran,
            'keterangan' => $keterangan,
            'semester' => $semester
        );

        $this->Absensi_model->tambah($data);

        pesan('Data absensi berhasil ditambahkan', 'success');
        redirect('data_absensi');
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

    public function hapus($id_absen)
    {
        $this->Absensi_model->hapus($id_absen);
        pesan('Data absensi berhasil dihapus', 'success');
        redirect('data_absensi');
    }
}
