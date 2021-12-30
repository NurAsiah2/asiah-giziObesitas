<?php
defined('BASEPATH') or exit('No direct script access allowed');

class buah extends CI_Controller
{


    public function index()
    //method defauld
    {

        $data['title'] = 'Data Makanan - Buah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('buah/buah', $data);
        $this->load->view('templates/footer');
    }
}
