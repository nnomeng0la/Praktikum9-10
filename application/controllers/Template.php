<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Template extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('layout/template');
        $this->load->view('layout/footer');
    }
}
