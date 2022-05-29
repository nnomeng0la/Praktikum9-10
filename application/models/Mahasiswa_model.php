<?php

class Mahasiswa_model extends CI_Model{

    // public $id, $nama, $nim, $gender, $tmp_lahir, $tgl_lahir, $ipk, $prodi;

    // public function predikat(){
        
    //     $predikat = ($this->ipk >= 3.75)?"Cumlaude" : "Baik";
    //     return $predikat;
    // }

    private $table = 'mahasiswa';

    public function getAll(){
        // SELECT * FROM mahasiswa;
        $query = $this->db->get($this->table);
        return $query->result();
    }
}


?>