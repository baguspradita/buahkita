<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Join extends CI_Model
{
    public function transaksi()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('customer', 'customer.id_customer=transaksi.nama_customer', 'left');
        $this->db->join('barang', 'barang.id_barang=transaksi.barang_id', 'left');
        $this->db->join('kategori', 'kategori.kategori=transaksi.kategori_transaksi', 'left');
        return $this->db->get();
    }

    public function barangId($kategori)
    {
        $this->db->select("*");
        $this->db->from('barang');
        $this->db->join('kategori', 'kategori.kategori = barang.kategori');
        $this->db->where('kategori.kategori', $kategori);
        return $this->db->get();
    }

    function detial_transaksi($kode_transaksi)
    {
        $clause = array(
            'transaksi.kode_transaksi' => $kode_transaksi,
        );
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('barang', 'barang.id_barang=transaksi.barang_id');
        $this->db->join('kategori', 'kategori.kategori=transaksi.kategori_transaksi');
        $this->db->where($clause);
        // $this->db->join('ruangan', 'ruangan.ruangan_id=booking.id_ruangan');
        return  $this->db->get();
    }

    public function riwayat_transaksi()
    {
        $user = $this->M_User->customer($this->session->userdata('email'))->row_array();

        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('customer', 'customer.nama=transaksi.nama_customer');
        $this->db->join('barang', 'barang.id_barang=transaksi.barang_id');
        $this->db->join('kategori', 'kategori.kategori=transaksi.kategori_transaksi');
        $this->db->where('customer.nama', $user['nama']);
        return $this->db->get();
    }

    function notif()
    {
        $this->db->select('*');
        $this->db->from('notif');
        $this->db->join('customer', 'customer.id_customer=notif.customer_id');
        $this->db->join('transaksi', 'transaksi.id_transaksi=notif.notif_id_transaksi');
        return $this->db->get();
    }
}
