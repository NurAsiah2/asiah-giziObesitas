<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SumberPokok extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pokok_model');
        $this->load->library('form_validation');
    }


    //UNTUK SUMBER P0KOK

    public function index()
    //method defauld
    {
        $this->load->model('Pokok_Model', 'sumberpokok');

        $data['title'] = 'Data Makanan - Sumber Pokok';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        //load library (pagination)
        $this->load->library('pagination');


        //ambil data pencarian
        if ($this->input->post('cari')) {
            $data['cari'] = $this->input->post('cari');
            $this->session->set_userdata('cari', $data['cari']);
        } else {
            $data['cari'] = $this->session->userdata('cari');
        }



        //config
        $this->db->like('nama_pangan', $data['cari']);
        $this->db->or_like('urt', $data['cari']);
        $this->db->or_like('gr', $data['cari']);
        $this->db->or_like('karbohidrat', $data['cari']);
        $this->db->or_like('protein', $data['cari']);
        $this->db->or_like('lemak', $data['cari']);
        $this->db->from('sumberpokok');

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;



        //initialize
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['sumberpokok'] = $this->sumberpokok->getSumberPokok($config['per_page'], $data['start'], $data['cari']);






        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('sumberpokok/sumberpokok', $data);
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
            $this->load->view('sumberpokok/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pokok_model->tambahDataSumberpokok();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('sumberpokok');
        }
    }



    public function hapus($Id)
    {
        $this->Pokok_model->hapus($Id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('sumberpokok');
    }




    public function ubah($Id)
    {
        $data['title'] = 'Form Ubah Data Sumber Pokok';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['sumberpokok'] = $this->Pokok_model->getSumberPokokById($Id);
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
            $this->load->view('sumberpokok/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pokok_model->ubahDataSumberpokok();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('sumberpokok');
        }
    }
}