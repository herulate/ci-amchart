<?php

class Grafik_model extends CI_Model
{
    public function get_nama()
    {
        $this->db->select('distinct(created_by)');
        return $this->db->get('tbl_contoh')->result();
    }
    public function data_grafik($filter)
    {
        $this->db->select('count(*) as data, kategori');
        $this->db->from('tbl_contoh');
        $this->db->where($filter);
        $this->db->group_by('kategori');
        return $this->db->get()->result();
    }
}
