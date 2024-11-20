<?php
class About extends Controller
{
    public function __construct()
    {
        if ($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
            header('location: ' . base_url . '/login');
            exit;
        }
    }
    public function index()
    {
        $data['title'] = 'Halaman About Me';
        $data['nama'] = 'Muhammad Supiani';
        $data['alamat'] = 'Pal 7';
        $data['no_hp'] = '087874306616';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('about/index', $data); // Pastikan file ini ada
        $this->view('templates/footer');
    }
}
