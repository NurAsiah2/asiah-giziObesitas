<?php

class Hewani_model extends CI_Model
{
    public function getAllSumberHewani()
    {
        return $this->db->get('sumberhewani')->result_array();
    }


    public function getSumberHewani($limit, $start, $cari = null)
    {



        return $this->db->get('sumberhewani', $limit, $start)->result_array();
    }


    public function countAllSumberHewani()
    {
        return $this->db->get('sumberhewani')->num_rows();
    }




    public function tambahDataSumberhewani()
    {
        $data = [
            "Nama_Pangan" => $this->input->post('nama_pangan'),
            "URT" => $this->input->post('urt'),
            "Gr" => $this->input->post('gr'),
            "Karbohidrat" => $this->input->post('karbohidrat'),
            "Protein" => $this->input->post('protein'),
            "Lemak" => $this->input->post('lemak'),
        ];

        $this->db->insert('sumberhewani', $data);
    }

    public function hapus($Id)
    {
        $this->db->where('Id', $Id);
        $this->db->delete('sumberhewani');
    }


    public function getSumberHewaniById($Id)
    {
        return $this->db->get_where('sumberhewani', ['Id' => $Id])->row_array();
    }

    public function ubahDataSumberhewani()
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
        $this->db->update('sumberhewani', $data);
    }
}
