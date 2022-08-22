<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
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
        $this->load->model('model_galeri');
    }
    public function index()
    {
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id_user')])->row();
        $data['galeri'] = $this->model_galeri->tampil_data();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/data_galeri/index', $data);
        $this->load->view('admin/layout/footer');
    }
    public function tambah_data_galeri()
    {
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id_user')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/data_galeri/tambah_data_galeri', $data);
        $this->load->view('admin/layout/footer');
    }
    public function proses_tambah_data_galeri()
    {
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path']  = './upload/galeri';
            $config['allowed_types']   = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata(
                    'msg',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Data Gagal Ditambahkan</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>'
                );
                redirect('Auth/Galeri/tambah_data_galeri');
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
            'foto'     => $foto,

        );
        $this->model_galeri->input_data($data, 'galeri');

        redirect('auth/Galeri');
    }
    function hapus_data_galeri($id)
    {
        $where = array('id_galeri' => $id);
        $this->model_galeri->hapus($where, 'galeri');
        redirect('Auth/Galeri');
    }
    public function edit_data_galeri($id)
    {
        $where = array('id_galeri' => $id);
        $data['galeri'] = $this->model_galeri->edit_data($where, 'galeri')->result();
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id_user')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/data_galeri/edit_data_galeri', $data);
        $this->load->view('admin/layout/footer');
    }
    public function proses_edit_data_galeri()
    {
        $config['upload_path'] = './upload/galeri/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!empty($_FILES['foto']['name'])) {
            if (!$this->upload->do_upload('foto')) {
                $this->upload->display_errors();
            } else {
                $id = $this->input->post('id_galeri');
                $foto = $this->input->post('foto');
                unlink("./upload/galeri/" . $foto);
                $data = [
                    'foto' => $this->upload->data('file_name'),
                ];
                $this->model_galeri->update_yes($id, $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate!</div>');
                redirect('Auth/Galeri');
            }
        } else {
            $id = $this->input->post('id_galeri');
            $this->model_galeri->update_no($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate!</div>');
            redirect('Auth/Galeri');
        }
    }
}
