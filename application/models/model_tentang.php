<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_tentang extends CI_Model
{
    public function tampil_data()
    {

        return $this->db->get('tentang')->result_array();
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
            'nama_founder'  => $data['nama_founder'],
            'tentang_kec'  => $data['tentang_kec'],
            'foto'  => $data['foto'],
        );

        $this->db->where('id_tentang', $id);
        $this->db->update('tentang', $ubah);
    }

    public function update_no($id, $data = [])
    {
        $ubah = array(
            'nama_founder'  => $data['nama_founder'],
            'tentang_kec'  => $data['tentang_kec'],

        );

        $this->db->where('id_tentang', $id);
        $this->db->update('tentang', $ubah);
    }
    // public function detail_informasi($id = null)
    // {
    //     $query = $this->db->get_where('informasi', array('id_informasi' => $id))->row();
    //     return $query;
    // }
}
