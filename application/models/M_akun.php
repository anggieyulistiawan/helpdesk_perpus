<?php
class M_akun extends CI_Model
{
    public function show_data()
    {
        return $this->db->query('SELECT * FROM tb_akun 
        LEFT JOIN tb_prodi on tb_akun.id_prodi=tb_prodi.id_prodi
        LEFT JOIN tb_level on tb_akun.id_level=tb_level.id_level ORDER BY id_akun DESC');
    }

    // menampilkan data level
    public function tampil_level()
    {
        return  $this->db->query("SELECT * FROM tb_level");
    }

    // menampilkan data prodi
    public function tampil_prodi()
    {
        return  $this->db->query("SELECT * FROM tb_prodi");
    }

    // menampilkan data validasi
    public function validasi($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('tb_akun');
        return $query->num_rows();
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

    public function cek_login()
    {
        $username   = set_value('username');
        $password   = set_value('password');

        $result     = $this->db->where('username', $username)
            ->where('password', md5($password))
            ->join('tb_prodi', 'tb_prodi.id_prodi=tb_akun.id_prodi')
            ->limit(1)
            ->get('tb_akun');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }
}
