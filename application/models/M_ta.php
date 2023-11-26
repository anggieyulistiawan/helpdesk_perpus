<?php
class M_ta extends CI_Model
{
    public function show_data()
    {
        return $this->db->query('SELECT * FROM tb_ta
        JOIN tb_akun on tb_ta.id_akun=tb_akun.id_akun
        LEFT JOIN tb_prodi on tb_akun.id_prodi=tb_prodi.id_prodi ORDER BY id_ta DESC');
    }

    // menampilkan data akun
    public function tampil_akun()
    {
        return  $this->db->query("SELECT * FROM tb_akun");
    }

    // menampilkan data prodi
    public function tampil_prodi()
    {
        return  $this->db->query("SELECT * FROM tb_prodi");
    }

    // menampilkan data prodi
    public function tampil_dosen($id_prodi)
    {
        return  $this->db->query("SELECT * FROM tb_dosen WHERE id_prodi = '$id_prodi'");
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

    public function filter_ta($tanggal_awal, $tanggal_akhir)
    {
        $this->db->select('*');
        $this->db->from('tb_ta');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_ta.id_akun');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi=tb_akun.id_prodi');
        $this->db->where('tanggal_ta >=', $tanggal_awal);
        $this->db->where('tanggal_ta <=', $tanggal_akhir);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_data_tauser()
    {
        // return $this->db->get($table);
        $id_akun = $this->session->userdata('id_akun');
        $this->db->select('*');
        $this->db->from('tb_ta');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_ta.id_akun');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi=tb_akun.id_prodi');
        $this->db->where('tb_ta.id_akun', $id_akun);
        return $this->db->get();
    }

    public function detail_data_update($id_ta)
    {
        $this->db->select('*');
        $this->db->from('tb_ta');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_ta.id_akun');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi=tb_akun.id_prodi');
        $this->db->where('id_ta', $id_ta);
        $query = $this->db->get();
        return $query->row();
    }

    public function upload_satu()
    {
        $id_akun = $this->session->userdata('id_akun');
        $this->db->select('*');
        $this->db->from('tb_ta');
        $this->db->where('id_akun', $id_akun);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_akun()
    {
        $id_akun = $this->session->userdata('id_akun');
        $this->db->select('*');
        $this->db->from('tb_akun');
        $this->db->where('id_akun', $id_akun);
        $query = $this->db->get();
        return $query->row();
    }
}
