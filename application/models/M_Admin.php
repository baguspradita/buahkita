<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Admin extends CI_Model
{

    public function petugas($email)
    {
        return $this->db->get_where('petugas', ['email' => $email]);
    }

    public function editTransaksi($update)
    {
        $this->db->update('transaksi', $update);
    }

    public function barang()
    {
        return $this->db->get('barang');
    }

    public function kategori()
    {
        return $this->db->get('kategori');
    }

    public function transaksi()
    {
        return $this->db->get('transaksi');
    }

    public function get_lokal()
    {
        return $this->db->get_where('barang', ['kategori' => 'lokal']);
    }

    public function get_import()
    {
        return $this->db->get_where('barang', ['kategori' => 'import']);
    }

    public function get_kategori($kategori)
    {
        return $this->db->get_where('barang', ['kategori_id' => $kategori]);
    }

    public function customer()
    {
        return $this->db->get('customer');
    }

    public function getPetugas()
    {
        return $this->db->get('petugas');
    }

    public function inputBarang($add)
    {
        return $this->db->insert('barang', $add);
    }

    public function editBarang($update)
    {
        $this->db->update('barang', $update);
    }

    public function readStatus($notif_id, $update)
    {
        $this->db->where('notif_id', $notif_id);
        $this->db->update('notif', $update);
    }

    function pesananBaru($pesananBaru)
    {
        $this->db->update('transaksi', $pesananBaru);
    }

    function proses($proses)
    {
        $this->db->update('transaksi', $proses);
    }

    function blocked($blocked)
    {
        $this->db->update('customer', $blocked);
    }

    function active($active)
    {
        $this->db->update('customer', $active);
    }

    function blockedP($blocked)
    {
        $this->db->update('petugas', $blocked);
    }

    function activeP($active)
    {
        $this->db->update('petugas', $active);
    }
}
