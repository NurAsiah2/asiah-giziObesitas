<?php

class User_model extends CI_model
{

    public function getAllUser()
    {
        return $this->db->get('inputdata')->result_array();
    }

    public function inputDataUser()
    {
        $data = [
            "tinggi" => $this->input->post('tinggi'),
            "berat" => $this->input->post('berat'),
            "umur" => $this->input->post('umur'),
            "aktivitas" => $this->input->post('aktivitas'),
            "jk" => $this->input->post('jk'),
            "karbohidrat" => $this->input->post('karbohidrat'),
            "protein" => $this->input->post('protein'),
            "lemak" => $this->input->post('lemak'),
        ];

        $this->db->insert('inputdata', $data);
    }
}
