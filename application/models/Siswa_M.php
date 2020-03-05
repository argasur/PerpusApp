<?php

class Siswa_M extends CI_Model{
    public function get(){
        return $query=$this->db->get('siswa')->result_array();
    }
}