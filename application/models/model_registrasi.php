<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_registrasi extends CI_Model
{
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
