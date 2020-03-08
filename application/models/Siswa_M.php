<?php

class Siswa_M extends CI_Model{
    //Menampilkan Semua Data Siswa
    public function get(){
        return $query=$this->db->get('siswa')->result_array();
    }

    //Menambahkan Data Siswa
    public function tambahDataSiswa()
    {
        $data=array(
            'NIS' => $this->input->post('nis', true),
            'Nama' => $this->input->post('namaSiswa',true),
            'Kelas' => $this->input->post('kelas',true),
            'Jenis_Kelamin' => $this->input->post('Jenis-Kelamin',true),
        );
        $this->db->insert('siswa', $data);   
    }
    //Menampilkan Data Siswa Berdasarkan Id_Siswa
    public function getSiswaById($Id_Siswa)
    {
        return $this->db->get_where('siswa', ['Id_Siswa'=>$Id_Siswa])->row_array();     
    }
    
    //Mengubah Data Siswa
    public function ubahDataSiswa($Id_Siswa)
    {
        $data=array(
            'NIS' => $this->input->post('nis', true),
            'Nama' => $this->input->post('namaSiswa',true),
            'Kelas' => $this->input->post('kelas',true),
            'Jenis_Kelamin' => $this->input->post('Jenis-Kelamin',true),
        );
        $this->db->where('Id_Siswa', $Id_Siswa);
        $this->db->update('siswa', $data);
        
    }
    public function cariDataSiswa()
    {
        $kataKunci = $this->input->post('kataKunci');
        $this->db->like('NIS',$kataKunci);
        $this->db->or_like('Nama',$kataKunci);
        $this->db->or_like('Kelas',$kataKunci);
        $this->db->or_like('Jenis_Kelamin',$kataKunci);
        return $this->db->get('siswa')->result_array();
    }
}