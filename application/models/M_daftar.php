<?php
class M_daftar extends CI_Model
{
    public function show_data()
    {
        return $this->db->query('SELECT * FROM tb_registrasi 
        JOIN tb_prodi on tb_registrasi.id_prodi=tb_prodi.id_prodi ORDER BY id_registrasi DESC');
    }

    // menampilkan data prodi
    public function tampil_prodi()
    {
        return  $this->db->query("SELECT * FROM tb_prodi");
    }

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function filter_daftar($tanggal_awal, $tanggal_akhir)
    {
        $this->db->select('*');
        $this->db->from('tb_registrasi');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi=tb_registrasi.id_prodi');
        $this->db->where('tanggal_registrasi >=', $tanggal_awal);
        $this->db->where('tanggal_registrasi <=', $tanggal_akhir);
        $query = $this->db->get();
        return $query->result();
    }
}
