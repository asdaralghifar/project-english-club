<?php defined('BASEPATH') or exit('No direct script access allowed');

class model_user_materi extends CI_Model
{

    public function tampil_data()
    {

        return $this->db->get('informasi')->result_array();
    }
    function get_by_nama_kategori($nama_kategori)
    {
        $hsl = $this->db->query("SELECT * FROM materi WHERE nama_kategori='$nama_kategori'");
        return $hsl;
    }
    function get_berita_by_kode($kode)
    {
        $hsl = $this->db->query("SELECT * FROM materi WHERE id_materi='$kode'");
        return $hsl;
    }
    public function materi($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
