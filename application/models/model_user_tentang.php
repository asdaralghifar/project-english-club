<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_user_tentang extends CI_Model
{

    public function tampil_data()
    {

        return $this->db->get('tentang')->result_array();
    }
}
