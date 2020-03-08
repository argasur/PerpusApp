<?php

class Buku_M extends CI_Model{
    //Menampilkan Data Buku
    public function get()
    {
        $query =  $this->db->get('buku')->result_array();
        return $query;
    }
    //Menambahkan Data Buku
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
    //Menghapus Data Buku
    public function hapusBuku($Id_Buku){
        // $this->db->where('Id_Buku',$Id_Buku);
        $this->db->delete('buku',['Id_Buku'=>$Id_Buku]);
    }
    //Mencari Data Buku dari Id Buku
    public function getBukuById($Id_Buku)
    {
        return $this->db->get_where('buku',['Id_Buku'=>$Id_Buku])->row_array();
    }
    //Mengubah data Buku
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
    //Mencari Data Buku dengan Kata Kunci
    public function cariDataBuku()
    {
        $kataKunci = $this->input->post('kataKunci');
        $this->db->like('Judul',$kataKunci);
        $this->db->or_like('Pengarang',$kataKunci);
        $this->db->or_like('Tahun',$kataKunci);
        $this->db->or_like('Kategori',$kataKunci);
        return $this->db->get('buku')->result_array();

    }
}