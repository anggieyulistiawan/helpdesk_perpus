<?php
class M_lulus_kuliah extends CI_Model
{
    public function show_data()
    {
        // return $this->db->query('SELECT * FROM tb_surat 
        // JOIN tb_akun on tb_surat.id_akun=tb_akun.id_akun
        // JOIN tb_prodi on tb_akun.id_prodi=tb_prodi.id_prodi ORDER BY id_surat DESC');

        // $this->db->select('tb_surat.*, tb_pegawai.nama_pegawai, tb_akun.nama_akun');
        $this->db->select('*');
        $this->db->from('tb_surat');
        $this->db->order_by('id_surat', 'DESC');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_surat.id_akun');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi=tb_akun.id_prodi');
        // $this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai=tb_surat.id_pegawai');
        $this->db->where('kategori_surat', 'lulus');
        return $this->db->get()->result();
    }

    // menampilkan data akun
    public function tampil_akun()
    {
        return  $this->db->query("SELECT * FROM tb_akun");
    }

    // menampilkan data pegawai
    public function tampil_pegawai()
    {
        return  $this->db->query("SELECT * FROM tb_pegawai");
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

    public function filter_lulus_kuliah($tanggal_awal, $tanggal_akhir)
    {
        $this->db->select('*');
        $this->db->from('tb_surat');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_surat.id_akun');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi=tb_akun.id_prodi');
        $this->db->where('kategori_surat', 'lulus');
        $this->db->where('tanggal_surat >=', $tanggal_awal);
        $this->db->where('tanggal_surat <=', $tanggal_akhir);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_data_lulususer()
    {
        // return $this->db->get($table);
        $id_akun = $this->session->userdata('id_akun');
        $this->db->select('*');
        $this->db->from('tb_surat');
        $this->db->order_by('id_surat', 'DESC');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_surat.id_akun');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi=tb_akun.id_prodi');
        $this->db->where('kategori_surat', 'lulus');
        $this->db->where('tb_surat.id_akun', $id_akun);
        return $this->db->get();
    }

    public function detail_data_update($id_surat)
    {
        $this->db->select('*');
        $this->db->from('tb_surat');
        $this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai=tb_surat.id_pegawai');
        $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan=tb_pegawai.id_jabatan');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_surat.id_akun');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi=tb_akun.id_prodi');
        $this->db->join('tb_pkl', 'tb_pkl.id_pkl=tb_surat.id_pkl');
        $this->db->join('tb_ta', 'tb_ta.id_ta=tb_surat.id_ta');
        $this->db->where('id_surat', $id_surat);
        $query = $this->db->get();
        return $query->row();
    }
}
