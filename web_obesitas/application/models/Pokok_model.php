<?php

class Pokok_model extends CI_Model
{
    public function getAllSumberPokok()
    {
        return $this->db->get('Sumber_pokok')->result_array();
    }


    public function getSumberPokok($limit, $start)
    {



        return $this->db->get('Sumber_pokok', $limit, $start)->result_array();
    }


    public function countAllSumberPokok()
    {
        return $this->db->get('Sumber_pokok')->num_rows();
    }




    public function tambahDataSumberpokok()
    {
        $data = [
            "Nama_Pangan" => $this->input->post('nama_pangan'),
            "URT" => $this->input->post('urt'),
            "Gr" => $this->input->post('gr'),
            "Karbohidrat" => $this->input->post('karbohidrat'),
            "Protein" => $this->input->post('protein'),
            "Lemak" => $this->input->post('lemak'),
        ];

        $this->db->insert('Sumber_pokok', $data);
    }

    public function hapus($Id)
    {
        $this->db->where('Id', $Id);
        $this->db->delete('Sumber_pokok');
    }


    public function getSumberPokokById($Id)
    {
        return $this->db->get_where('Sumber_pokok', ['Id' => $Id])->row_array();
    }

    public function ubahDataSumberpokok()
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
        $this->db->update('Sumber_pokok', $data);
    }
}
