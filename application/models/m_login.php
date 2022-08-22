<?php

class M_login extends CI_Model
{
    public function cek_user($data)
    {
        $query = $this->db->get_where('user', $data);
        return $query;
    }
    public function get($user_id = null)
    {
        $this->db->from('user');
        if ($user_id != null) {
            $this->db->where('id', $user_id);
        }
        $query = $this->db->get();
        return $query;
    }
}
