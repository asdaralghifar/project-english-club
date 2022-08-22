<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_materi extends CI_Controller
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
        $this->load->model('model_kategori');
    }
    public function index()
    {
        $data['kategori_materi'] = $this->model_kategori->tampil_data();
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/materi/kategori_materi', $data);
        $this->load->view('admin/layout/footer');
    }
    public function tambah_data_kategori()
    {
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/materi/tambah_data_kategori');
        $this->load->view('admin/layout/footer');
    }
    public function proses_tambah_data_kategori()
    {
        $nama_kategori = $this->input->post('nama_kategori');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './upload/kategori';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata(
                    'msg',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     <strong>Data Foto Belum Ditambahkan</strong>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 </div>'
                );
                redirect('Auth/kategori/tambah_data_kategori');
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
            'nama_kategori' => $nama_kategori,
            'foto' => $foto,

        );
        $this->model_kategori->input_data($data, 'kategori_materi');

        redirect('Auth/kategori_materi');
    }
    function hapus_data_kategori($id)
    {
        $where = array('id_kategori' => $id);
        $this->model_kategori->hapus($where, 'kategori_materi');
        redirect('Auth/kategori_materi');
    }
    public function edit_data_kategori($id)
    {
        $where = array('id_kategori' => $id);
        $data['kategori_materi'] = $this->model_kategori->edit_data($where, 'kategori_materi')->result();
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/materi/edit_data_kategori', $data);
        $this->load->view('admin/layout/footer');
    }
    public function proses_edit_data_kategori()
    {
        $config['upload_path'] = './upload/kategori/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!empty($_FILES['foto']['name'])) {
            if (!$this->upload->do_upload('foto')) {
                $this->upload->display_errors();
            } else {
                $id = $this->input->post('id_kategori');
                $foto = $this->input->post('foto');
                unlink("./upload/kategori/" . $foto);
                $data = [
                    'nama_kategori' => $this->input->post('nama_kategori'),
                    'foto' => $this->upload->data('file_name'),
                ];
                $this->model_kategori->update_yes($id, $data);
                // $this->session->set_flashdata(
                //                     'msg',
                //                     '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                //      <strong>Data Berhasil di Update</strong>
                //      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                //  </div>'
                //                 );
                redirect('Auth/kategori_materi');
            }
        } else {
            $id = $this->input->post('id_kategori');
            $data = [
                'nama_kategori' => $this->input->post('nama_kategori'),

            ];
            $this->model_kategori->update_no($id, $data);
            // $this->session->set_flashdata(
            //                 'msg',
            //                 '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            //      <strong>Data Gagal di Update</strong>
            //      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            //  </div>'
            //             );
            redirect('Auth/Kategori_materi');
        }
    }
}
