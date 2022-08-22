<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_informasi extends CI_Model
{
    public function tampil_data()
    {

        return $this->db->get('informasi')->result_array();
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
            'judul'  => $data['judul'],
            'isi_informasi'  => $data['isi_informasi'],
            'foto'  => $data['foto'],
        );

        $this->db->where('id_informasi', $id);
        $this->db->update('informasi', $ubah);
    }

    public function update_no($id, $data = [])
    {
        $ubah = array(
            'judul'  => $data['judul'],
            'isi_informasi'  => $data['isi_informasi'],

        );

        $this->db->where('id_informasi', $id);
        $this->db->update('informasi', $ubah);
    }
    public function detail_informasi($id = null)
    {
        $query = $this->db->get_where('informasi', array('id_informasi' => $id))->row();
        return $query;
    }
}
