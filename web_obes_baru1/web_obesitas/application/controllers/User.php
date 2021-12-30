<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller


{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }


    public function index()
    //method defauld
    {
        $data['title'] = 'Input Data';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('tinggi', 'Tinggi', 'required|integer');
        $this->form_validation->set_rules('berat', 'Berat', 'required|integer');
        $this->form_validation->set_rules('umur', 'Umur', 'required|integer');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->User_model->inputDataUser();
            redirect('user/hasil');
        }
    }

    public function lihatdata()
    //method defauld
    {
        $data['title'] = 'Data Pengguna';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['inputdata'] = $this->User_model->getAllUser();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/lihatdata', $data);
        $this->load->view('templates/footer');
    }



    public function hasil()
    //method defauld
    {
        $data['title'] = 'Hasil Rekomendasi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/hasil', $data);
        $this->load->view('templates/footer');
    }
}
