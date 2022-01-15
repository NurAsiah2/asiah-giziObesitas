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
        $this->load->model('Pokok_Model', 'Sumber_pokok');

        $data['title'] = 'Data Makanan - Sumber Pokok';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        //load library (pagination)
        $this->load->library('pagination');



        $this->db->from('Sumber_pokok');

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;



        //initialize
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['Sumber_pokok'] = $this->Sumber_pokok->getSumberPokok($config['per_page'], $data['start']);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('sumberpokok/sumberpokok');
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
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('sumberpokok/tambah');
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
        $data['Sumber_pokok'] = $this->Pokok_model->getSumberPokokById($Id);

        $this->form_validation->set_rules('nama_pangan', 'Nama Pangan', 'required');
        $this->form_validation->set_rules('gr', 'Gram', 'required|numeric');
        $this->form_validation->set_rules('karbohidrat', 'Karbohidrat', 'required|numeric');
        $this->form_validation->set_rules('protein', 'Protein', 'required|numeric');
        $this->form_validation->set_rules('lemak', 'Lemak', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('sumberpokok/ubah');
            $this->load->view('templates/footer');
        } else {
            $this->Pokok_model->ubahDataSumberpokok();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('sumberpokok');
        }
    }
}
