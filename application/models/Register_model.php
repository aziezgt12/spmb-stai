<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_model extends CI_Model
{
    private $tableUser = "ch_gen_tbl_user";
    // private $tblContLocalDet = "ship_tbl_trn_cont_local_dtl";
    // private $tblContAccept = "ship_tbl_trn_cont_acceptance_dtl";

    function updatePersonalData($param)
    {
        $this->db->where("userid", $param['userid']);
        $sql = $this->db->update($this->tableUser, $param);

        return $sql;

    }


    function getById($id)
    {
        return $this->db->get_where($this->tableUser, ['userid' => $id])->row();
    }


}
