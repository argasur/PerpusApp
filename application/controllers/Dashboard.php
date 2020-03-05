<?php

class Dashboard extends CI_Controller{
    public function index()
    {
        $data['judul']='Halaman Dashboard';
        $this->load->view('template/header',$data);
        $this->load->view('home/dashboard');
        $this->load->view('template/footer');
    }
}