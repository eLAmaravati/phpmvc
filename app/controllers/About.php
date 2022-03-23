<?php 

class About extends Controller{
    public function index($nama = 'Langit', $pekerjaan = 'web developer', $hobi = 'menggambar') {
        $data['nama']      = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['hobi']      = $hobi;
        $data['title']     = 'About';
        $this->view('layout/header', $data);
        $this->view('about/index');
        $this->view('layout/footer');
    }

    public function page() {
        $data['title'] = 'Page';
        $this->view('layout/header', $data);
        $this->view('about/page');
        $this->view('layout/footer');
    }
}
