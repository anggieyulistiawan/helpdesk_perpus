<?php
class M_umum extends CI_Model
{
    public function show_data()
    {
        $this->db->select('*');
        $this->db->from('tb_surat');
        $this->db->order_by('id_surat', 'DESC');
        $this->db->where('kategori_surat', 'umum');
        return $this->db->get();
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

    public function filter_umum($tanggal_awal, $tanggal_akhir)
    {
        $this->db->select('*');
        $this->db->from('tb_surat');
        $this->db->where('kategori_surat', 'umum');
        $this->db->where('tanggal_surat >=', $tanggal_awal);
        $this->db->where('tanggal_surat <=', $tanggal_akhir);
        $query = $this->db->get();
        return $query->result();
    }
}
