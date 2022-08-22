<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_galeri extends CI_Model
{
    public function tampil_data()
    {

        return $this->db->get('galeri')->result_array();
    }
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapus($table, $where)
    {
        $res = $this->db->delete($where, $table); // Kode ini digunakan untuk menghapus record yang sudah ada
        return $res;
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function update_yes($id, $data = [])
    {
        $ubah = array(
            'foto'  => $data['foto'],
        );

        $this->db->where('id_galeri', $id);
        $this->db->update('galeri', $ubah);
    }

    public function update_no($id, $data = [])
    {
        $ubah = array();

        $this->db->where('id_galeri', $id);
        $this->db->update('galeri', $ubah);
    }
}
