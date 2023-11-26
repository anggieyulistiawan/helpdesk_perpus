<?php
class M_usulan extends CI_Model
{
    public function show_data()
    {
        return $this->db->query('SELECT * FROM tb_usulan 
        JOIN tb_akun on tb_usulan.id_akun=tb_akun.id_akun
        JOIN tb_prodi on tb_akun.id_prodi=tb_prodi.id_prodi
        JOIN tb_penerbit on tb_usulan.id_penerbit=tb_penerbit.id_penerbit ORDER BY id_usulan DESC');
    }

    // menampilkan data penerbit
    public function tampil_penerbit()
    {
        return  $this->db->query("SELECT * FROM tb_penerbit");
    }

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function insert_notif()
    {
        require APPPATH . 'views/vendor/autoload.php';
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            '3293f85acdfa101b7bf5',
            '779b23b49ff014df8d4b',
            '1618528',
            $options
        );

        $data['Usulan Buku'] = 'Mengusulkan Buku Baru';
        $pusher->trigger('my-channel', 'my-event', $data);
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

    public function filter_usulan($tanggal_awal, $tanggal_akhir)
    {
        $this->db->select('*');
        $this->db->from('tb_usulan');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_usulan.id_akun');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi=tb_akun.id_prodi');
        $this->db->where('tanggal_usulan >=', $tanggal_awal);
        $this->db->where('tanggal_usulan <=', $tanggal_akhir);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_data_usulanuser()
    {
        // return $this->db->get($table);
        $id_akun = $this->session->userdata('id_akun');
        $this->db->select('*');
        $this->db->from('tb_usulan');
        $this->db->order_by('id_usulan', 'DESC');
        $this->db->join('tb_penerbit', 'tb_penerbit.id_penerbit=tb_usulan.id_penerbit');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_usulan.id_akun');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi=tb_akun.id_prodi');
        $this->db->where('tb_usulan.id_akun', $id_akun);
        return $this->db->get();
    }

    public function detail_data_update($id_usulan)
    {
        $this->db->select('*');
        $this->db->from('tb_usulan');
        $this->db->join('tb_penerbit', 'tb_penerbit.id_penerbit=tb_usulan.id_penerbit');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_usulan.id_akun');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi=tb_akun.id_prodi');
        $this->db->where('id_usulan', $id_usulan);
        $query = $this->db->get();
        return $query->row();
    }
}
