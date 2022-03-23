<?php 

class About extends Controller{
    public function index($nama = 'Langit', $pekerjaan = 'web developer', $hobi = 'menggambar') {
        $data['nama']      = '$nama';
        $data['pekerjaan'] = '$pekerjaan';
        $data['hobi']      = $hobi;
        $this->view('layout/header');
        $this->view('about/index', $data);
        $this->view('layout/footer');
    }

    public function page() {
        $this->view('layout/header');
        $this->view('about/page');
        $this->view('layout/footer');
    }
}
