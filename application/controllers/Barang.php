<?php

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Barang';
        $data['barang'] = $this->Barang_m->getDataBarang();
        $this->load->view('templates/header', $data);
        $this->load->view('Barang/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Barang';

        $this->form_validation->set_rules('kode_barang', 'kode_barang', 'required|numeric');
        $this->form_validation->set_rules('name', 'name', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('Barang/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Barang_m->tambahBarang();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Barang');
        }
    }

    public function hapus($id)
    {
        $this->Barang_m->hapusDataBarang($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Barang');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Barang';
        $data['barang'] = $this->Barang_m->getBarangbyId($id);
        $this->load->view('templates/header', $data);
        $this->load->view('Barang/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Barang';
        $data['barang'] = $this->Barang_m->getBarangById($id);

        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required');
        $this->form_validation->set_rules('name', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('Barang/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Barang_m->editBarang();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Barang');
        }
    }
}
