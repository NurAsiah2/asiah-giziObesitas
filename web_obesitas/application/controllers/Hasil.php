<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller


{

    public function index()
    //method defauld
    {
        $data['title'] = 'Hasil Rekomendasi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('hasil/hasil');
        $this->load->view('templates/footer');


        //rumus
        $meter = $this->input->post('tinggi') / 100;
        $imt = $this->input->post('berat') / ($meter * $meter);

        if ($imt >= 25) {
            echo "anda termasuk obes";
        } else {
            echo "anda tidak termasuk obes";
        }
    }


    //$meter = $this->db->get_where('inputdata', ['tinggi/100'])->row_array();
    //$imt =  ('inputdata', ['berat'] / $meter*$meter);




}
