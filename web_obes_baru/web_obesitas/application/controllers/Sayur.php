<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sayur extends CI_Controller
{



    public function index()
    //method defauld
    {

        $data['title'] = 'Data Makanan - Sayur';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('sayur/sayur', $data);
        $this->load->view('templates/footer');
    }
}
