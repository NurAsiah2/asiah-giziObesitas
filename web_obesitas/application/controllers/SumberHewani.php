<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SumberHewani extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hewani_model');
        $this->load->library('form_validation');
    }


    //UNTUK SUMBER P0KOK

    public function index()
    //method defauld
    {
        $this->load->model('Hewani_Model', 'sumberhewani');

        $data['title'] = 'Data Makanan - Sumber Hewani';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        //load library (pagination)
        $this->load->library('pagination');


        //config
        $config['base_url'] = 'http://localhost/web_obesitas/sumberhewani/index';



        //styling
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo'; //raquo = rowhtutations/panah 2
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo'; //laquo = lawqutations/panah 2
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['rev_tag_close'] = '</li>';


        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');



        $this->db->from('sumberhewani');

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;



        //initialize
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['sumberhewani'] = $this->sumberhewani->getSumberHewani($config['per_page'], $data['start']);



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('sumberhewani/sumberhewani');
        $this->load->view('templates/footer');
    }



    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Sumber Hewani';
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
            $this->Hewani_model->tambahDataSumberhewani();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('sumberhewani');
        }
    }



    public function hapus($Id)
    {
        $this->Hewani_model->hapus($Id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('sumberhewani');
    }




    public function ubah($Id)
    {
        $data['title'] = 'Form Ubah Data Sumber Hewani';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['sumberhewani'] = $this->Hewani_model->getSumberHewaniById($Id);

        $this->form_validation->set_rules('nama_pangan', 'Nama Pangan', 'required');
        $this->form_validation->set_rules('gr', 'Gram', 'required|numeric');
        $this->form_validation->set_rules('karbohidrat', 'Karbohidrat', 'required|numeric');
        $this->form_validation->set_rules('protein', 'Protein', 'required|numeric');
        $this->form_validation->set_rules('lemak', 'Lemak', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('sumberhewani/ubah');
            $this->load->view('templates/footer');
        } else {
            $this->Hewani_model->ubahDataSumberhewani();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('sumberhewani');
        }
    }
}
