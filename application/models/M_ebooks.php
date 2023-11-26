<?php
class M_ebooks extends CI_Model
{
    public function show_data()
    {
        return $this->db->query('SELECT * FROM tb_ebooks 
        JOIN tb_penerbit on tb_ebooks.id_penerbit=tb_penerbit.id_penerbit
        JOIN tb_kategori on tb_ebooks.id_kategori=tb_kategori.id_kategori ORDER BY id_ebooks DESC');
    }

    // menampilkan data penerbit
    public function tampil_penerbit()
    {
        return  $this->db->query("SELECT * FROM tb_penerbit");
    }

    // menampilkan data kategori
    public function tampil_kategori()
    {
        return  $this->db->query("SELECT * FROM tb_kategori");
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
    public function filter_ebooks($tanggal_awal, $tanggal_akhir)
    {
        $this->db->select('*');
        $this->db->from('tb_ebooks');
        $this->db->where('tanggal_luncur >=', $tanggal_awal);
        $this->db->where('tanggal_luncur <=', $tanggal_akhir);
        $query = $this->db->get();
        return $query->result();
    }

    public function detail_data_update($id_ebooks)
    {
        $this->db->select('*');
        $this->db->from('tb_ebooks');
        $this->db->where('id_ebooks', $id_ebooks);
        $query = $this->db->get();
        return $query->row();
    }

    function data($number, $offset)
    {
        // return $query = $this->db->get('tb_ebooks', $number, $offset)->result();
        $this->db->select('*');
        $this->db->from('tb_ebooks');
        $this->db->join('tb_penerbit', 'tb_penerbit.id_penerbit=tb_ebooks.id_penerbit');
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori=tb_ebooks.id_kategori');
        $this->db->order_by('id_ebooks', 'DESC');
        $this->db->limit($number, $offset);
        return $this->db->get()->result();
    }

    function jumlah_data()
    {
        return $this->db->get('tb_ebooks')->num_rows();
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_ebooks');
        $this->db->join('tb_penerbit', 'tb_penerbit.id_penerbit=tb_ebooks.id_penerbit');
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori=tb_ebooks.id_kategori');
        $this->db->like('nama_penerbit', $keyword);
        $this->db->or_like('nama_kategori', $keyword);
        $this->db->or_like('judul_buku', $keyword);
        $this->db->or_like('tahun_terbit', $keyword);
        $this->db->or_like('pengarang', $keyword);
        $this->db->or_like('isbn', $keyword);
        return $this->db->get()->result();
    }

    public function get_buku_by_id($id_ebooks)
    {
        $query = $this->db->get_where('tb_ebooks', array('id_ebooks' => $id_ebooks));
        return $query->row();
    }

    public function increment_views($id_ebooks)
    {
        $this->db->set('views', 'views+1', FALSE);
        $this->db->where('id_ebooks', $id_ebooks);
        $this->db->update('tb_ebooks');
    }
}
