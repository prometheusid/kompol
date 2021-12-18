<?php
class laporankunjungan extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'LAPORAN KUNJUNGAN | Development';
        $this->load->view('templates/header', $data);
        $this->load->view('laporankunjungan/index');
        $this->load->view('templates/footer');
    }
}
