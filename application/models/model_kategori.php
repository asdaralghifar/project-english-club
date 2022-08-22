<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_Kategori extends CI_Model
{
    public function tampil_data()
    {

        return $this->db->get('kategori_materi')->result_array();
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

    public function update_yes($id, $data = [])
    {
        $ubah = array(
            'nama_kategori'  => $data['nama_kategori'],
            'foto'  => $data['foto'],
        );

        $this->db->where('id_kategori', $id);
        $this->db->update('kategori_materi', $ubah);
    }

    public function update_no($id, $data = [])
    {
        $ubah = array(
            'nama_kategori'  => $data['nama_kategori'],

        );

        $this->db->where('id_kategori', $id);
        $this->db->update('kategori_materi', $ubah);
    }
}
