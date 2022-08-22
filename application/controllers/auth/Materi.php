<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Controller
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
        $this->load->model('model_materi');
    }
    public function index()
    {
        $data['materi'] = $this->model_materi->tampil_data();
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/materi/index', $data);
        $this->load->view('admin/layout/footer');
    }
    public function tambah_data_materi()
    {
        $data['kategori_materi'] = $this->model_materi->getdata_kategori();
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/materi/tambah_data_materi', $data);
        $this->load->view('admin/layout/footer');
    }
    public function proses_tambah_data_materi()
    {
        $nama_kategori = $this->input->post('nama_kategori');
        $judul_materi = $this->input->post('judul_materi');
        $isi_materi = $this->input->post('isi_materi');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './upload/materi';
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
                redirect('Auth/Materi/tambah_data_materi');
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
            'judul_materi' => $judul_materi,
            'isi_materi' => $isi_materi,
            'foto' => $foto,


        );
        $this->model_materi->input_data($data, 'materi');

        redirect('Auth/Materi');
    }
    function hapus_data_Materi($id)
    {
        $where = array('id_materi' => $id);
        $this->model_materi->hapus($where, 'materi');
        redirect('Auth/Materi');
    }
    public function edit_data_materi($id)
    {
        $where = array('id_materi' => $id);
        $data['materi'] = $this->model_materi->edit_data($where, 'materi')->result();
        $data['kategori_materi'] = $this->model_materi->getdata_kategori();
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/materi/edit_data_materi', $data);
        $this->load->view('admin/layout/footer');
    }
    public function proses_edit_data_materi()
    {
        $config['upload_path'] = './upload/materi/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!empty($_FILES['foto']['name'])) {
            if (!$this->upload->do_upload('foto')) {
                $this->upload->display_errors();
            } else {
                $id = $this->input->post('id_materi');
                $foto = $this->input->post('foto');
                unlink("./upload/materi/" . $foto);
                $data = [
                    'nama_kategori' => $this->input->post('nama_kategori'),
                    'judul_materi' => $this->input->post('judul_materi'),
                    'isi_materi' => $this->input->post('isi_materi'),
                    'foto' => $this->upload->data('file_name'),
                ];
                $this->model_materi->update_yes($id, $data);
                //                 $this->session->set_flashdata(
                //                     'msg',
                //                     '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                //      <strong>Data Berhasil di Update</strong>
                //      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                //  </div>'
                //                 );
                redirect('Auth/Materi');
            }
        } else {
            $id = $this->input->post('id_materi');
            $data = [
                'nama_kategori' => $this->input->post('nama_kategori'),
                'judul_materi' => $this->input->post('judul_materi'),
                'isi_materi' => $this->input->post('isi_materi'),

            ];
            $this->model_materi->update_no($id, $data);
            //             $this->session->set_flashdata(
            //                 'msg',
            //                 '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            //      <strong>Data Gagal di Update</strong>
            //      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            //  </div>'
            //             );
            redirect('Auth/Materi');
        }
    }
}
