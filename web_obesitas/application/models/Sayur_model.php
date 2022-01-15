<?php

class Sayur_model extends CI_Model
{
    public function getAllSayur()
    {
        return $this->db->get('sayur')->result_array();
    }


    public function getSayur($limit, $start)
    {



        return $this->db->get('sayur', $limit, $start)->result_array();
    }


    public function countAllSayur()
    {
        return $this->db->get('sayur')->num_rows();
    }




    public function tambahDataSayur()
    {
        $data = [
            "Nama_Pangan" => $this->input->post('nama_pangan'),
            "URT" => $this->input->post('urt'),
            "Gr" => $this->input->post('gr'),
            "Karbohidrat" => $this->input->post('karbohidrat'),
            "Protein" => $this->input->post('protein'),
            "Lemak" => $this->input->post('lemak'),
        ];

        $this->db->insert('sayur', $data);
    }

    public function hapus($Id)
    {
        $this->db->where('Id', $Id);
        $this->db->delete('sayur');
    }


    public function getSayurById($Id)
    {
        return $this->db->get_where('sayur', ['Id' => $Id])->row_array();
    }

    public function ubahDataSayur()
    {
        $data = [
            "Nama_Pangan" => $this->input->post('nama_pangan'),
            "URT" => $this->input->post('urt'),
            "Gr" => $this->input->post('gr'),
            "Karbohidrat" => $this->input->post('karbohidrat'),
            "Protein" => $this->input->post('protein'),
            "Lemak" => $this->input->post('lemak'),
        ];

        $this->db->where('Id', $this->input->post('Id'));
        $this->db->update('sayur', $data);
    }
}
