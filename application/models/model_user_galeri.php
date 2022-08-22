<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_user_galeri extends CI_Model
{

    public function tampil_data()
    {

        return $this->db->get('galeri')->result_array();
    }
}
