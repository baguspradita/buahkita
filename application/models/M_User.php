<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_User extends CI_Model
{

    public function customer($email)
    {
        return $this->db->get_where('customer', ['email' => $email]);
    }

    function inputOrder($add)
    {
        $this->db->insert('transaksi', $add);
        return $this->db->insert_id();
    }

    public function transaksi($email)
    {
        return $this->db->get_where('transaksi', ['nama_customer' => $email]);
    }

    function get_barang($kategori)
    {
        return $this->db->get_where('barang', ['kategori' => $kategori]);
    }

    public function riwayat()
    {
        $user = $this->M_User->customer($this->session->userdata('email'))->row_array();

        return $this->db->get_where('transaksi', ['email' => $user['email']]);
    }
}
