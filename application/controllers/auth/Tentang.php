<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
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
        $this->load->model('model_tentang');
    }
    public function index()
    {
        $data['tentang'] = $this->model_tentang->tampil_data();
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/tentang/index', $data);
        $this->load->view('admin/layout/footer');
    }
    public function tambah_data_tentang()
    {
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/tentang/tambah_data_tentang');
        $this->load->view('admin/layout/footer');
    }
    public function proses_tambah_data_tentang()
    {
        $nama_founder = $this->input->post('nama_founder');
        $tentang_kec = $this->input->post('tentang_kec');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './upload/tentang';
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
                redirect('Auth/tentang/tambah_data_tentang');
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
            'nama_founder' => $nama_founder,
            'tentang_kec' => $tentang_kec,
            'foto' => $foto,

        );
        $this->model_tentang->input_data($data, 'tentang');

        redirect('Auth/Tentang');
    }
    function hapus_data_tentang($id)
    {
        $where = array('id_tentang' => $id);
        $this->model_tentang->hapus($where, 'tentang');
        redirect('Auth/Tentang');
    }
    public function edit_data_tentang($id)
    {
        $where = array('id_tentang' => $id);
        $data['tentang'] = $this->model_tentang->edit_data($where, 'tentang')->result();
        $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id')])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/tentang/edit_data_tentang', $data);
        $this->load->view('admin/layout/footer');
    }
    public function proses_edit_data_tentang()
    {
        $config['upload_path'] = './upload/tentang/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!empty($_FILES['foto']['name'])) {
            if (!$this->upload->do_upload('foto')) {
                $this->upload->display_errors();
            } else {
                $id = $this->input->post('id_tentang');
                $foto = $this->input->post('foto');
                unlink("./upload/tentang/" . $foto);
                $data = [
                    'nama_founder' => $this->input->post('nama_founder'),
                    'foto' => $this->upload->data('file_name'),
                    'tentang_kec' => $this->input->post('tentang_kec'),
                ];
                $this->model_tentang->update_yes($id, $data);
                //                 $this->session->set_flashdata(
                //                     'msg',
                //                     '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                //      <strong>Data Berhasil di Update</strong>
                //      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                //  </div>'
                //                 );
                redirect('Auth/Tentang');
            }
        } else {
            $id = $this->input->post('id_tentang');
            $data = [
                'nama_founder' => $this->input->post('nama_founder'),
                'tentang_kec' => $this->input->post('tentang_kec'),

            ];
            $this->model_tentang->update_no($id, $data);
            //             $this->session->set_flashdata(
            //                 'msg',
            //                 '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            //      <strong>Data Gagal di Update</strong>
            //      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            //  </div>'
            //             );
            redirect('Auth/Tentang');
        }
    }
    // public function detail_data_tentang($id = true)
    // {

    //     $detail = $this->model_tentang->detail_tentang($id);
    //     $data['detail'] = $detail;
    //     $data['session_user'] = $this->db->get_where('user', ['email' => $this->session->userdata('id')])->row();
    //     $this->load->view('admin/layout/header');
    //     $this->load->view('admin/layout/navbar', $data);
    //     $this->load->view('admin/layout/sidebar', $data);
    //     $this->load->view('admin/data_tentang/detail_data_tentang', $data);
    //     $this->load->view('admin/layout/footer');
    // }
}
