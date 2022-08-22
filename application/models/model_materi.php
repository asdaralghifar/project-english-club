<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_materi extends CI_Model
{
    public function tampil_data()
    {

        return $this->db->get('materi')->result_array();
    }
    public function getdata_kategori()
    {
        $query = $this->db->query("SELECT * FROM kategori_materi ORDER BY nama_kategori ASC");
        return $query->result();
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
            'judul_materi'  => $data['judul_materi'],
            'isi_materi'  => $data['isi_materi'],
            'foto'  => $data['foto'],
        );

        $this->db->where('id_materi', $id);
        $this->db->update('materi', $ubah);
    }

    public function update_no($id, $data = [])
    {
        $ubah = array(
            'nama_kategori'  => $data['nama_kategori'],
            'judul_materi'  => $data['judul_materi'],
            'isi_materi'  => $data['isi_materi'],

        );

        $this->db->where('id_materi', $id);
        $this->db->update('materi', $ubah);
    }
}
