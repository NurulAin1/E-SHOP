<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_dashboard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_barang', 'bar');
        $this->load->model('m_kategori', 'kat');
        $this->load->model('m_transaksi', 'tra');
        $this->load->model('m_user', 'use');
    }
    public function index()
    {
        if ($this->session->userdata('level'))
        {
            // $data['transaksi']=count($this->tra->ambil_semua());
            // $data['user']=count($this->use->ambil_semua());
            // $data['kategori']=count($this->kat->ambilkategori());
            // $data['barang']=count($this->bar->ambilbarang());
            $data['konten']= 'dashboard';
            $this->load->view('template', $data);
        }
        else
        {
            redirect('login', 'refresh');
        }
    }
}