<?php

class Buah_model extends CI_Model
{
    public function getAllBuah()
    {
        return $this->db->get('buah')->result_array();
    }


    public function getBuah($limit, $start)
    {



        return $this->db->get('buah', $limit, $start)->result_array();
    }


    public function countAllBuah()
    {
        return $this->db->get('buah')->num_rows();
    }




    public function tambahDataBuah()
    {
        $data = [
            "Nama_Pangan" => $this->input->post('nama_pangan'),
            "URT" => $this->input->post('urt'),
            "Gr" => $this->input->post('gr'),
            "Karbohidrat" => $this->input->post('karbohidrat'),
            "Protein" => $this->input->post('protein'),
            "Lemak" => $this->input->post('lemak'),
        ];

        $this->db->insert('buah', $data);
    }

    public function hapus($Id)
    {
        $this->db->where('Id', $Id);
        $this->db->delete('buah');
    }


    public function getBuahById($Id)
    {
        return $this->db->get_where('buah', ['Id' => $Id])->row_array();
    }

    public function ubahDataBuah()
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
        $this->db->update('buah', $data);
    }
}
