<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public function getRekening()
    {
        return $this->db->get('rekening')->result_array();
    }
}
