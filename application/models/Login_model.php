<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

    public function tambah($data)
    {
        $this->db->insert('tbl_users', $data);
    }

    public function tampil_by_username($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('tbl_users')->row_array();
    }

    public function update_data($username, $data)
    {
        $this->db->where('username', $username);
        $this->db->update('tbl_users', $data);
    }

    public function hapus_data($no_pegawai)
    {
        $this->db->where('username', $no_pegawai);
        $this->db->delete('tbl_users');
    }
}
