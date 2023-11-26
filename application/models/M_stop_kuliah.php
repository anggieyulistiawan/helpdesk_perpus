<?php
class M_stop_kuliah extends CI_Model
{
    public function show_data()
    {
        // return $this->db->query("SELECT * FROM tb_surat 
        // JOIN tb_akun on tb_surat.id_akun=tb_akun.id_akun
        // JOIN tb_prodi on tb_akun.id_prodi=tb_prodi.id_prodi 
        // WHERE kategori_surat = stop' 
        // ORDER BY id_surat DESC");

        $this->db->select('*');
        $this->db->from('tb_surat');
        $this->db->order_by('id_surat', 'DESC');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_surat.id_akun');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi=tb_akun.id_prodi');
        $this->db->where('kategori_surat', 'stop');
        return $this->db->get();
    }

    // menampilkan data akun
    public function tampil_akun()
    {
        return  $this->db->query("SELECT * FROM tb_akun");
    }

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    // public function insert_data($data, $table)
    // {
    //     $this->db->insert($table, $data);
    // }

    public function insert_data($data)
    {
        $this->db->insert('tb_surat', $data);
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

    public function filter_stop_kuliah($tanggal_awal, $tanggal_akhir)
    {
        $this->db->select('*');
        $this->db->from('tb_surat');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_surat.id_akun');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi=tb_akun.id_prodi');
        $this->db->where('kategori_surat', 'stop');
        $this->db->where('tanggal_surat >=', $tanggal_awal);
        $this->db->where('tanggal_surat <=', $tanggal_akhir);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_data_stopuser()
    {
        $id_akun = $this->session->userdata('id_akun');
        $this->db->select('*');
        $this->db->from('tb_surat');
        $this->db->order_by('id_surat', 'DESC');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_surat.id_akun');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi=tb_akun.id_prodi');
        $this->db->where('kategori_surat', 'stop');
        $this->db->where('tb_surat.id_akun', $id_akun);
        return $this->db->get();
    }

    public function detail_data_update($id_surat)
    {
        $this->db->select('*');
        $this->db->from('tb_surat');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_surat.id_akun');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi=tb_akun.id_prodi');
        $this->db->where('id_surat', $id_surat);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_last_number($tanggal_surat)
    {
        $this->db->where('tanggal_surat', $tanggal_surat);
        $this->db->order_by('id_surat', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_surat');
        return $query->row();
    }

    public function update_last_number($tanggal_surat, $nomor_surat)
    {
        $this->db->where('tanggal_surat', $tanggal_surat);
        $this->db->update('tb_surat', array('nomor_surat' => $nomor_surat));
    }
}
