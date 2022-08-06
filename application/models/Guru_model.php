<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tbl_guru')->result_array();
    }

    public function hapus($nip)
    {
        $this->db->where('nip', $nip);
        $data_kelas = $this->db->get('tbl_kelas')->row_array();

        $this->db->where('nip', $nip);
        $data_mapel = $this->db->get('tbl_mapel')->row_array();

        if($data_kelas || $data_mapel){
            return false;
        }

        $this->db->where('nip', $nip);
        $this->db->delete('tbl_guru');
        return true;
    }

    public function tambah($data)
    {
        $this->db->insert('tbl_guru', $data);
    }

    public function edit($nip, $data)
    {
        $this->db->where('nip', $nip);
        $this->db->update('tbl_guru', $data);
    }

    public function tampil_by_id($nip)
    {
        $this->db->where('nip', $nip);
        return $this->db->get('tbl_guru')->row_array();
    }
}
