<?php

class User_model extends CI_model
{

    public function getAllUser()
    {

        return $this->db->get('inputdata')->result_array();
    }

    public function getOneUser($email)
    {

        $this->db->where('inputdata.id');
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
        ];

        $this->db->insert('inputdata', $data);
    }
}
