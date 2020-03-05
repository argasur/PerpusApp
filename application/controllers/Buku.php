<?php

class Buku extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_M');
    }
    public function index()
    {
        $data['judul']='Halaman Buku';
        $data['query']=$this->Buku_M->get();
        $this->load->view('template/header',$data);
        $this->load->view('buku/data-buku',$data);
        $this->load->view('template/footer');
    }
    public function tambah()
    {
        $data['judul']='Tambah Buku';
        $this->form_validation->set_rules('judulBuku','Judul Buku', 'required');
        $this->form_validation->set_rules('namaPengarang','Nama Pengarang', 'required');
        $this->form_validation->set_rules('tahunTerbit','Tahun Terbit', 'required');
        $this->form_validation->set_rules('kategoriBuku','Kategori', 'required');
        if($this->form_validation->run()== FALSE)
        {
        $this->load->view('template/header',$data);
        $this->load->view('buku/tambah-buku');
        $this->load->view('template/footer');
        }
        else
        {
            $this->Buku_M->tambahDataBuku();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('buku');
        }
    }
    public function hapus($Id_Buku)
    {
        $this->Buku_M->hapusBuku($Id_Buku);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('buku');
    }
    public function edit($Id_Buku){

        $data['judul']='Form Ubah Data Buku';
        $data['buku']=$this->Buku_M->getBukuById($Id_Buku);
        $data['kategori']=['Novel','Fiksi','Komik','Edukasi','Dongeng'];
        $this->form_validation->set_rules('judulBuku','Judul Buku', 'required');
        $this->form_validation->set_rules('namaPengarang','Nama Pengarang', 'required');
        $this->form_validation->set_rules('tahunTerbit','Tahun Terbit', 'required');
        $this->form_validation->set_rules('kategoriBuku','Kategori', 'required');

        if($this->form_validation->run() == FALSE)
        {
        $this->load->view('template/header',$data);
        $this->load->view('buku/edit-buku',$data);
        $this->load->view('template/footer');
        }
        else
        {
            $this->Buku_M->editDataBuku($Id_Buku);
            $this->session->set_flashdata('flash','Di edit');
            redirect('buku');
        }
    }
}