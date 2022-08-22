<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model_user');
    }
    public function index()
    {
        $this->load->view('registrasi');
    }
    public function proses_registrasi()
    {
        $nama = $this->input->post('nama');
        $level = $this->input->post('level');
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path']  = './upload/user';
            $config['allowed_types']   = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata(
                    'msg',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Lengkapi Data Foto Anda</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>'
                );
                redirect('registrasi');
            } else {
                $this->session->set_flashdata(
                    'msg',
                    '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Data Berhasil Ditambahkan</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>'
                );
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama' => $nama,
            'level' => $level,
            'email' => $email,
            'password' => $password,
            'foto'     => $foto,

        );
        $this->model_user->input_data($data, 'user');

        redirect('auth/User');
    }
}
