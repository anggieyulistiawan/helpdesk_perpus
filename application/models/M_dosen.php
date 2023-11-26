<?php
class M_dosen extends CI_Model
{
    public function show_data()
    {
        return $this->db->query('SELECT * FROM tb_dosen 
        JOIN tb_prodi on tb_dosen.id_prodi=tb_prodi.id_prodi ORDER BY id_dosen DESC');
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
}
