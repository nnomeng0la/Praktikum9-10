<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('dosen_model', 'dsn1');
        $this->dsn1->id = 1;
        $this->dsn1->nidn = '01345';
        $this->dsn1->nama = 'Prof. Dr. Badrun Kartawagiran';
        $this->dsn1->gender = 'L';
        $this->dsn1->pendidikan = 'Psikometri';

        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id = 2;
        $this->dsn2->nidn = '02345';
        $this->dsn2->nama = 'Prof. Dr. Sri Wening';
        $this->dsn2->gender = 'P';
        $this->dsn2->pendidikan = 'Penelitian dan Evaluasi Pendidikan';
        
        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->id = 3;
        $this->dsn3->nidn = '03345';
        $this->dsn3->nama = 'Dr. Sunaryo Soenarto';
        $this->dsn3->gender = 'L';
        $this->dsn3->pendidikan = 'Teknologi Pendidikan';
        
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn'] = $list_dsn;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data["judul"] = "Form Kelola Dosen";
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/create', $data);
        $this->load->view('layout/footer');

    }

    public function save(){
        $this->load->model('dosen_model', 'dsn');

        $this->dsn->nidn = $this->input->post('nidn');
        $this->dsn->nama = $this->input->post('nama');
        $this->dsn->gender = $this->input->post('gender');
        $this->dsn->tmp_lahir = $this->input->post('tmp_lahir');
        $this->dsn->tgl_lahir = $this->input->post('tgl_lahir');
        $this->dsn->pendidikan = $this->input->post('pendidikan');

        $data['dsn'] = $this->dsn;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/view', $data);
        $this->load->view('layout/footer');

    }
}
?>