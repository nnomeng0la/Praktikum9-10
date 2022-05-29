<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        // Load atau memanggil Model
        $this->load->model('mahasiswa_model', 'mhs');

        // $this->load->model('mahasiswa_model', 'mhs1');
        // $this->mhs1->id = 1;
        // $this->mhs1->nim = '010001';
        // $this->mhs1->nama = 'Faiz Fikri';
        // $this->mhs1->gender = 'L';
        // $this->mhs1->ipk = 3.85;

        // $this->load->model('mahasiswa_model', 'mhs2');
        // $this->mhs2->id = 2;
        // $this->mhs2->nim = '020001';
        // $this->mhs2->nama = 'Pandan Wangi';
        // $this->mhs2->gender = 'P';
        // $this->mhs2->ipk = 3.35;

        // $this->load->model('mahasiswa_model', 'mhs3');
        // $this->mhs3->id = 3;
        // $this->mhs3->nim = '030001';
        // $this->mhs3->nama = 'Abdul';
        // $this->mhs3->gender = 'L';
        // $this->mhs3->ipk = 3.95;
        
        // Simpan objek ke dalam array
        // $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        $list_mhs = $this->mhs->getAll();

        // Siapin data untuk dikirim ke view
        $data['list_mhs'] = $list_mhs;

        // Tampilkan di view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layout/footer');
    }
}
?>