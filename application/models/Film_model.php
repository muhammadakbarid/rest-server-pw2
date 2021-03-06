<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Film_model extends CI_Model
{

    public $table = 'film';
    public $id = 'id_film';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // delete film by id_homeproduction
    function delete_by_id_homeproduction($id)
    {
        $this->db->where('id_homeproduction', $id);
        $this->db->delete($this->table);
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL)
    {
        $this->db->like('id_film', $q);
        $this->db->or_like('id_homeproduction', $q);
        $this->db->or_like('judul', $q);
        $this->db->or_like('producer', $q);
        $this->db->or_like('penulis_naskah', $q);
        $this->db->or_like('musik', $q);
        $this->db->or_like('cimatografi', $q);
        $this->db->or_like('editor', $q);
        $this->db->or_like('durasi', $q);
        $this->db->or_like('poster', $q);
        $this->db->or_like('bahasa', $q);
        $this->db->or_like('negara', $q);
        $this->db->or_like('rating', $q);
        $this->db->or_like('tahun_rilis', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_film', $q);
        $this->db->or_like('id_homeproduction', $q);
        $this->db->or_like('judul', $q);
        $this->db->or_like('producer', $q);
        $this->db->or_like('penulis_naskah', $q);
        $this->db->or_like('musik', $q);
        $this->db->or_like('cimatografi', $q);
        $this->db->or_like('editor', $q);
        $this->db->or_like('durasi', $q);
        $this->db->or_like('poster', $q);
        $this->db->or_like('bahasa', $q);
        $this->db->or_like('negara', $q);
        $this->db->or_like('rating', $q);
        $this->db->or_like('tahun_rilis', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}

/* End of file Film_model.php */
/* Location: ./application/models/Film_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-02-08 08:31:37 */
/* http://harviacode.com */