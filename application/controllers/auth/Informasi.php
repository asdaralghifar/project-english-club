<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
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
        $this->load->model('model_informasi');
    }
    public function index()
    {
        $data['informasi'] = $this->model_informasi->tampil_data();
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/data_informasi/index', $data);
        $this->load->view('admin/layout/footer');
    }
    public function tambah_data_informasi()
    {
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/data_informasi/tambah_data_informasi');
        $this->load->view('admin/layout/footer');
    }
    public function proses_tambah_data_informasi()
    {
        $judul = $this->input->post('judul');
        $isi_informasi = $this->input->post('isi_informasi');
        $tgl_informasi = $this->input->post('tgl_informasi');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './upload/informasi';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata(
                    'msg',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     <strong>Data Foto Belum Lengkap</strong>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 </div>'
                );
                redirect('Auth/Informasi/tambah_data_informasi');
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
            'judul' => $judul,
            'isi_informasi' => $isi_informasi,
            'foto' => $foto,
            'tgl_informasi' => $tgl_informasi,

        );
        $this->model_informasi->input_data($data, 'informasi');

        redirect('Auth/Informasi');
    }
    function hapus_data_informasi($id)
    {
        $where = array('id_informasi' => $id);
        $this->model_informasi->hapus($where, 'informasi');
        redirect('Auth/Informasi');
    }
    public function edit_data_informasi($id)
    {
        $where = array('id_informasi' => $id);
        $data['informasi'] = $this->model_informasi->edit_data($where, 'informasi')->result();
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/data_informasi/edit_data_informasi', $data);
        $this->load->view('admin/layout/footer');
    }
    public function proses_edit_data_informasi()
    {
        $config['upload_path'] = './upload/informasi/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!empty($_FILES['foto']['name'])) {
            if (!$this->upload->do_upload('foto')) {
                $this->upload->display_errors();
            } else {
                $id = $this->input->post('id_informasi');
                $foto = $this->input->post('foto');
                unlink("./upload/informasi/" . $foto);
                $data = [
                    'judul' => $this->input->post('judul'),
                    'foto' => $this->upload->data('file_name'),
                    'tgl_informasi' => $this->input->post('tgl_informasi'),
                    'isi_informasi' => $this->input->post('isi_informasi'),
                ];
                $this->model_informasi->update_yes($id, $data);
                //                 $this->session->set_flashdata(
                // //                     'msg',
                // //                     '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                // //      <strong>Data Berhasil di Update</strong>
                // //      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                // //  </div>'
                //                 );
                redirect('Auth/Informasi');
            }
        } else {
            $id = $this->input->post('id_informasi');
            $data = [
                'judul' => $this->input->post('judul'),
                'isi_informasi' => $this->input->post('isi_informasi'),

            ];
            $this->model_informasi->update_no($id, $data);
            //             $this->session->set_flashdata(
            //                 'msg',
            //                 '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            //      <strong>Data Gagal di Update</strong>
            //      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            //  </div>'
            //             );
            redirect('Auth/Informasi');
        }
    }
    public function detail_data_informasi($id = true)
    {

        $detail = $this->model_informasi->detail_informasi($id);
        $data['detail'] = $detail;
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/data_informasi/detail_data_informasi', $data);
        $this->load->view('admin/layout/footer');
    }
}
