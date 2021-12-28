<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataMakanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Makanan_model');
        $this->load->library('form_validation');
    }


    public function index()
    //method defauld
    {

        $data['title'] = 'Data Makanan - Sumber Pokok';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['sumberpokok'] = $this->Makanan_model->getAllDataMakanan();
        if ($this->input->post('cari')) {
            $data['sumberpokok'] = $this->Makanan_model->cariDataSumberpokok();
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('datamakanan/SumberPokok/sumberpokok', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Sumber Pokok';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_pangan', 'Nama Pangan', 'required');
        $this->form_validation->set_rules('gr', 'Gram', 'required|numeric');
        $this->form_validation->set_rules('karbohidrat', 'Karbohidrat', 'required|numeric');
        $this->form_validation->set_rules('protein', 'Protein', 'required|numeric');
        $this->form_validation->set_rules('lemak', 'Lemak', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('datamakanan/SumberPokok/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Makanan_model->tambahDataSumberpokok();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('datamakanan');
        }
    }
    public function hapus($Id)
    {
        $this->Makanan_model->hapus($Id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('DataMakanan');
    }



    public function ubah($Id)
    {
        $data['title'] = 'Form Ubah Data Sumber Pokok';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['sumberpokok'] = $this->Makanan_model->getDataMakananById($Id);
        $data['URT'] = ['1/2 Gelas', '4 Buah Besar', '5 1/2 Sendok Besar', '3 Buah Sedang', '2 Buah Sedang', '12 Biji', '10 Sendok Makan', '2 Gelas', '1 Gelas', '3/4 Gelas', '3 Iris', '1 1/2 Potong', '3 Potong Sedang', '1/2 Biji Sedang', '5 Sendok Makan', '1 Potong Sedang', '8 Sendok Makan', '5 Sendok Makan', '1 Biji Sedang'];

        $this->form_validation->set_rules('nama_pangan', 'Nama Pangan', 'required');
        $this->form_validation->set_rules('gr', 'Gram', 'required|numeric');
        $this->form_validation->set_rules('karbohidrat', 'Karbohidrat', 'required|numeric');
        $this->form_validation->set_rules('protein', 'Protein', 'required|numeric');
        $this->form_validation->set_rules('lemak', 'Lemak', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('datamakanan/SumberPokok/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Makanan_model->ubahDataSumberpokok();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('datamakanan');
        }
    }
}
