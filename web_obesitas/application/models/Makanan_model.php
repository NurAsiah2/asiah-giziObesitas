<?php

class Makanan_model extends CI_model
{
    public function getAllDataMakanan()
    {
        return $this->db->get('sumberpokok')->result_array();
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

        $this->db->insert('sumberpokok', $data);
    }

    public function hapus($Id)
    {
        $this->db->where('Id', $Id);
        $this->db->delete('sumberpokok');
    }


    public function getDataMakananById($Id)
    {
        return $this->db->get_where('sumberpokok', ['Id' => $Id])->row_array();
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
        $this->db->update('sumberpokok', $data);
    }

    public function cariDataSumberpokok()
    {
        $cari = $this->input->post('cari', true);
        $this->db->like('nama_pangan', $cari);
        $this->db->or_like('urt', $cari);
        $this->db->or_like('gr', $cari);
        $this->db->or_like('karbohidrat', $cari);
        $this->db->or_like('protein', $cari);
        $this->db->or_like('lemak', $cari);
        return $this->db->get('sumberpokok')->result_array();
    }
}
