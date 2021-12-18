<?php
class forum extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'FORUM | Development';
        $this->load->view('templates/header', $data);
        $this->load->view('forum/index');
        $this->load->view('templates/footer');
    }

    public function forumsample()
    {
        $data['judul'] = 'FORUM | Development';
        $this->load->view('templates/header', $data);
        $this->load->view('forum/forumsample');
        $this->load->view('templates/footer');
    }
}
