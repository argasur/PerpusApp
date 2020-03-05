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
        $this->load->view('template/header',$data);
        $this->load->view('siswa/data-siswa',$data);
        $this->load->view('template/footer');
    }
    
}