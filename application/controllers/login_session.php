<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login_session extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
    }

    public function cek_login()
    {
        $data = array(
            'email' => $this->input->post('email', TRUE),
            'password' => md5($this->input->post('password', TRUE))
        );
        $this->load->model('m_login'); // load model_user
        $hasil = $this->m_login->cek_user($data);
        if ($hasil->num_rows() == 1) {

            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Loggin';
                $sess_data['uid'] = $sess->uid;
                $sess_data['email'] = $sess->email;
                $sess_data['level'] = $sess->level;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('level') == 'admin') {
                redirect('admin');
            } elseif ($this->session->userdata('level') == 'user') {
                redirect('user');
            }
        } else {
            echo "<script>alert('Gagal login: Cek email, password!');history.go(-1);</script>";
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login_session'));
    }
}
