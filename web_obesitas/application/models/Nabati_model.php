<?php

class Nabati_model extends CI_Model
{
    public function getAllSumberNabati()
    {
        return $this->db->get('sumbernabati')->result_array();
    }


    public function getSumberNabati($limit, $start)
    {



        return $this->db->get('sumbernabati', $limit, $start)->result_array();
    }


    public function countAllSumberNabati()
    {
        return $this->db->get('sumbernabati')->num_rows();
    }




    public function tambahDataSumbernabati()
    {
        $data = [
            "Nama_Pangan" => $this->input->post('nama_pangan'),
            "URT" => $this->input->post('urt'),
            "Gr" => $this->input->post('gr'),
            "Karbohidrat" => $this->input->post('karbohidrat'),
            "Protein" => $this->input->post('protein'),
            "Lemak" => $this->input->post('lemak'),
        ];

        $this->db->insert('sumbernabati', $data);
    }

    public function hapus($Id)
    {
        $this->db->where('Id', $Id);
        $this->db->delete('sumbernabati');
    }


    public function getSumberNabatiById($Id)
    {
        return $this->db->get_where('sumbernabati', ['Id' => $Id])->row_array();
    }

    public function ubahDataSumbernabati()
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
        $this->db->update('sumbernabati', $data);
    }
}
