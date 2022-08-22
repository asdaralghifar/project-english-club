<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('logged_in') != "Sudah Loggin") {
            redirect(base_url("login_session"));
        }
        if ($this->session->userdata('level') != "admin") {
            redirect(base_url("login_session"));
        }
        $this->load->model('model_user');
    }
    public function index()
    {
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id_user')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/beranda');
        $this->load->view('admin/layout/footer');
    }
    // kelola data user



}
