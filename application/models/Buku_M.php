<?php

class Buku_M extends CI_Model{
    public function get()
    {
        $query =  $this->db->get('buku')->result_array();
        return $query;
    }
    public function tambahDataBuku()
    {
        $data = array(
            'Judul'=> $this->input->post('judulBuku',true),
            'Pengarang'=> $this->input->post('namaPengarang',true),
            'Tahun'=> $this->input->post('tahunTerbit',true),
            'Kategori'=> $this->input->post('kategoriBuku',true),

        );
        $this->db->insert('buku',$data);
    }
    public function hapusBuku($Id_Buku){
        // $this->db->where('Id_Buku',$Id_Buku);
        $this->db->delete('buku',['Id_Buku'=>$Id_Buku]);
    }
    public function getBukuById($Id_Buku)
    {
        return $this->db->get_where('buku',['Id_Buku'=>$Id_Buku])->row_array();
    }
    public function editDataBuku($Id_Buku)
    {
        $data = array(
            'Judul'=> $this->input->post('judulBuku',true),
            'Pengarang'=> $this->input->post('namaPengarang',true),
            'Tahun'=> $this->input->post('tahunTerbit',true),
            'Kategori'=> $this->input->post('kategoriBuku',true),
        );
        $this->db->where('Id_Buku', $Id_Buku);
        $this->db->update('buku',$data);
    }
}