<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Captcha_model extends CI_Model
{
    function insert($data)
    {
        $this->db->insert('sample_data', $data);
    }
}
