<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programstudi_model extends CI_Model 
{
    
    public function lihatData()
    {
        return $this->db->get('program_studi')->result();
    }

    public function simpan($data)
    {
        return $this->db->insert('program_studi', $data);
    }

        public function getById($id_prodi)
    {
        $query = $this->db->get_where('program_studi', ['id_prodi' => $id_prodi]);
        return $query->row();
    }

    public function perbaharui($id_prodi, $data)
    {
        return $this->db->update('program_studi', $data, ['id_prodi' => $id_prodi]);
    }

    public function hapus($id_prodi)
    {
        return $this->db->delete('program_studi', ['id_prodi' => $id_prodi]);
    }
}