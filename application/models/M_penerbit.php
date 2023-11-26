<?php
class M_penerbit extends CI_Model
{
    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('tb_penerbit');
        $this->db->order_by('id_penerbit', 'DESC');
        return $this->db->get();
    }

    public function get_data_jabatan()
    {
        $this->db->select('*');
        $this->db->from('tb_jabatan');
        $this->db->order_by('id_jabatan', 'DESC');
        return $this->db->get();
    }

    public function get_data_kategori()
    {
        $this->db->select('*');
        $this->db->from('tb_kategori');
        $this->db->order_by('id_kategori', 'DESC');
        return $this->db->get();
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
