<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Auth extends CI_Model
{
    public function registerPetugas($data)
    {
        $this->db->insert('petugas', $data);
    }

    public function updatePetugas($update)
    {
        $this->db->update('petugas', $update);
    }

    public function registerUser($data)
    {
        $this->db->insert('customer', $data);
    }

    function forgotPassword($email)
    {
        $this->db->get_where('petugas', ['email' => $email])->row_array();
    }

    function token($petugas_token)
    {
        $this->db->insert('token', $petugas_token);
    }
}
