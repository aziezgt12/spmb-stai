<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi_model extends CI_Model
{
    private $tableProdi = "tbl_mst_prodi";



    function getAll()
    {
        $this->db->where('is_active', 1);
        $this->db->order_by('faculty');
        return $this->db->get($this->tableProdi)->result();
    }

    function save($param)
    {
        $save = $this->db->insert($this->tableProdi, $param);

        if($save) return true;


        return false;
    }

    function update($param)
    {
        $this->db->where('prodi_id', $param['prodi_id']);
        $save = $this->db->update($this->tableProdi, $param);

        if($save) return true;


        return false;
    }

}
