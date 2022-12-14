<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
        $data['user'] = $this->model_user->tampil_data();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/data_user/index', $data);
        $this->load->view('admin/layout/footer');
    }
    public function tambah_data_user()
    {
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id_user')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/data_user/tambah_data_user', $data);
        $this->load->view('admin/layout/footer');
    }
    public function proses_tambah_data_user()
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
                    <strong>Data Belum Ditambahkan Ditambahkan</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>'
                );
                redirect('Auth/User/tambah_data_user');
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
    function hapus_data_user($id)
    {
        $where = array('id_user' => $id);
        $this->model_user->hapus($where, 'user');
        redirect('Auth/User');
    }
    public function edit_data_user($id)
    {
        $where = array('id_user' => $id);
        $data['user'] = $this->model_user->edit_data($where, 'user')->result();
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id_user')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/data_user/edit_data_user', $data);
        $this->load->view('admin/layout/footer');
    }
    public function proses_edit_data_user()
    {
        $config['upload_path'] = './upload/user/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!empty($_FILES['foto']['name'])) {
            if (!$this->upload->do_upload('foto')) {
                $this->upload->display_errors();
            } else {
                $id = $this->input->post('id_user');
                $foto = $this->input->post('foto');
                unlink("./upload/user/" . $foto);
                $data = [
                    'nama' => $this->input->post('nama'),
                    'foto' => $this->upload->data('file_name'),
                    'level' => $this->input->post('level'),
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password')),

                ];
                $this->model_user->update_yes($id, $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate!</div>');
                redirect('Auth/User');
            }
        } else {
            $id = $this->input->post('id_user');
            $data = [
                'nama' => $this->input->post('nama'),
                'level' => $this->input->post('level'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
            ];
            $this->model_user->update_no($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate!</div>');
            redirect('Auth/User');
        }
    }
    public function pesan()
    {
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id_user')])->row();
        $data['kontak'] = $this->model_user->tampil_data_pesan();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/pesan', $data);
        $this->load->view('admin/layout/footer');
    }
}
