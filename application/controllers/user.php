<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('logged_in') != "Sudah Loggin") {
            redirect(base_url("login_session"));
        }
        $this->load->model(['model_user', 'model_user_informasi', 'model_user_tentang', 'model_user_galeri', 'model_user_materi', 'model_user_kategori']);
    }

    public function index()
    {
        $this->load->view('v_user/layout/head');
        $this->load->view('v_user/menu');
        $this->load->view('v_user/index');
        $this->load->view('v_user/layout/footer');
    }
    public function galeri()
    {
        $data['galeri'] = $this->model_user_galeri->tampil_data();
        $this->load->view('v_user/layout/head');
        $this->load->view('v_user/menu');
        $this->load->view('v_user/galeri', $data);
        $this->load->view('v_user/layout/footer');
    }
    public function informasi()
    {
        $data['informasi'] = $this->model_user_informasi->tampil_data();
        $this->load->view('v_user/layout/head');
        $this->load->view('v_user/menu');
        $this->load->view('v_user/informasi', $data);
        $this->load->view('v_user/layout/footer');
    }
    function detail_informasi()
    {
        $kode = $this->uri->segment(3);
        $x['data'] = $this->model_user_informasi->get_berita_by_kode($kode);
        $this->load->view('v_user/layout/head');
        $this->load->view('v_user/menu');
        $this->load->view('v_user/rinci', $x);
        $this->load->view('v_user/layout/footer');
    }
    public function kontak()
    {
        $this->load->view('v_user/layout/head');
        $this->load->view('v_user/menu');
        $this->load->view('v_user/contact');
        $this->load->view('v_user/layout/footer');
    }
    public function proses_pesan()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $pesan = $this->input->post('pesan');

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'pesan' => $pesan,

        );
        $this->model_user->input_pesan($data, 'kontak');

        redirect('user/kontak');
    }
    public function Materi()
    {
        $nama_kategori = $this->uri->segment(3);
        $x['materi'] = $this->model_user_materi->get_by_nama_kategori($nama_kategori);
        $this->load->view('v_user/layout/head');
        $this->load->view('v_user/menu');
        $this->load->view('v_user/materi_user', $x);
        $this->load->view('v_user/layout/footer');
    }
    function detail_materi()
    {
        $kode = $this->uri->segment(3);
        $x['data'] = $this->model_user_materi->get_berita_by_kode($kode);
        $this->load->view('v_user/layout/head');
        $this->load->view('v_user/menu');
        $this->load->view('v_user/rinci_materi', $x);
        $this->load->view('v_user/layout/footer');
    }
    public function kategori_materi()
    {
        $data['kategori_materi'] = $this->model_user_kategori->tampil_data();
        $this->load->view('v_user/layout/head');
        $this->load->view('v_user/menu');
        $this->load->view('v_user/skills', $data);
        $this->load->view('v_user/layout/footer');
    }
    public function profil()
    {
        $data['tentang'] = $this->model_user_tentang->tampil_data();
        $this->load->view('v_user/layout/head');
        $this->load->view('v_user/menu');
        $this->load->view('v_user/profil', $data);
        $this->load->view('v_user/layout/footer');
    }
}
