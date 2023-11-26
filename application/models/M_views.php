<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_views extends CI_Model
{

    public function get_views_count()
    {
        $query = $this->db->get('views');
        $row = $query->row();
        return $row->count;
    }

    public function increment_views_count()
    {
        $this->db->set('count', 'count+1', FALSE);
        $this->db->update('views');
    }
}
