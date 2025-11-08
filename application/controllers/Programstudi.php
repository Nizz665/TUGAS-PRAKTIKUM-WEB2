<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programstudi extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Programstudi_model');
    }

    public function index()
    {
        $data['program_studi'] = $this->Programstudi_model->lihatData();
        //echo $data:
        $this->load->view('programstudi_view', $data);    
    }

    public function tambah() 
    {
        $this->load->view('programstudi_tambah');
    }

    public function simpan()
    {
        $data = [
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi'),
        ];
             
        $this->Programstudi_model->simpan($data);
        redirect('programstudi');
    }

    public function edit($id_prodi)
    {
        $data['programstudi'] = $this->Programstudi_model->getById($id_prodi);
        $this->load->view('programstudi_edit', $data);
    }

    public function perbaharui($id_prodi)
    {
        $data = [
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi')
        ];

        $this->Programstudi_model->perbaharui($id_prodi, $data);
        redirect('programstudi');
    }

    public function hapus($id_prodi)
    {
        $this->Programstudi_model->hapus($id_prodi);
        redirect('programstudi');
    }

}