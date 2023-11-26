<?php
class M_pegawai extends CI_Model
{
    public function show_data()
    {
        return $this->db->query('SELECT * FROM tb_pegawai 
        JOIN tb_jabatan on tb_pegawai.id_jabatan=tb_jabatan.id_jabatan ORDER BY id_pegawai DESC');
    }

    // menampilkan data jabatan
    public function tampil_jabatan()
    {
        return  $this->db->query("SELECT * FROM tb_jabatan");
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
