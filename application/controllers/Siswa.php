<?php

class Siswa extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_M');
    }
    public function index()
    {
        $data['judul']='Halaman Siswa';
        $data['query']=$this->Siswa_M->get();
        if($this->input->post("kataKunci"))
        {
            $data['query']=$this->Siswa_M->cariDataSiswa();
        }
        $this->load->view('template/header',$data);
        $this->load->view('siswa/data-siswa',$data);
        $this->load->view('template/footer');
    }
    public function tambah(){
        $data['judul']="Tambah Siswa";
        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('namaSiswa', 'Nama', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        if ($this->form_validation->run()== FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('siswa/tambah-siswa');
            $this->load->view('template/footer');
        } else {
            $this->Siswa_M->tambahDataSiswa();
            $this->session->flashdata('flash','Ditambahkan');
            redirect ('siswa');
        }        
    }
    public function edit($Id_Siswa)
    {
        $data['judul'] = 'Ubah Data Siswa';
        $data['siswa'] = $this->Siswa_M->getSiswaById($Id_Siswa);
        $data['JK'] = ['Laki-laki','Perempuan'];
        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('namaSiswa', 'Nama', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        
        if ($this->form_validation->run()==FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('siswa/edit-siswa', $data);
            $this->load->view('template/footer');
        } else {
            $this->Siswa_M->ubahDataSiswa($Id_Siswa);
            $this->session->flashdata('flash','Diubah');
            redirect('siswa');
            
        }  
    }public function hapus($Id_Siswa)
    {
        $this->Siswa_M->hapusDataMahasiswa($Id_Siswa);
        $this->session->flashdata('flash','Dihapus');
        redirect('siswa');
        
    }
}