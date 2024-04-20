<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('barang', 'Barang', 'required|trim');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim');

        $data['tampil'] = $this->M_Join->transaksi()->result_array();
        $data['barang'] = $this->M_Admin->barang()->result_array();
        $data['kategori'] = $this->M_Admin->kategori()->result_array();
        $data['customer'] = $this->M_User->customer($this->session->userdata('email'))->row_array();
        // $data['transaksi'] = $this->M_User->transaksi($this->session->userdata('email'))->row_array();

        if ($this->form_validation->run() == false) {
            # Gagal input orderan
            $data['title'] = 'Order Buah KIta';
            $this->load->view('V_menu', $data);
        } else {
            # Lolos validasi
            $this->_inputOrder();
        }
    }

    private function _inputOrder()
    {



        $jumlah = $this->input->post('jumlah');
        $kategori = $this->input->post('kategori');
        $customer = $this->M_User->customer($this->session->userdata('email'))->row_array();


        $kode_transaksi = $this->db->get('transaksi')->num_rows() + 1;
        $add = array(

            'nama_customer' => $customer['nama'],
            'barang_id' => $this->input->post('barang'),
            'jumlah' => $jumlah,
            'kategori_transaksi' => $kategori,
            'tanggal' => date('Y-m-d'),
            'kode_transaksi' => $kode_transaksi . '' . $customer['id_customer'],
        );

        $customer = $this->M_User->customer($this->session->userdata('email'))->row_array();

        $insert_id = $this->M_User->inputOrder($add);

        $add_notifikasi = array(
            'customer_id' => $customer['id_customer'],
            'notif_id_transaksi' => $insert_id,
            'read_status' => '0',
            'time' => date('Y-m-d H:i:s'),

        );
        $this->db->insert('notif', $add_notifikasi);

        redirect('C_User/rincian/' . $add['kode_transaksi']);
    }

    public function rincian($kode_transaksi)
    {
        $data['tampil'] = $this->M_Join->transaksi()->result_array();
        $data['kode_transaksi'] = $this->M_Join->detial_transaksi($kode_transaksi)->row_array();

        $data['title'] = 'Rincian Orderan';
        $this->load->view('V_rincian', $data);
    }

    public function get_barang()
    {
        $id_kategori = $this->input->post('id');
        $barang = $this->db->get_where('barang', ['kategori' => $id_kategori])->result();
        echo json_encode($barang);
    }

    function riwayat()
    {
        $data['customer'] = $this->M_User->customer($this->session->userdata('email'))->row_array();
        $data['riwayat'] = $this->M_Join->riwayat_transaksi()->result_array();
        $data['title'] = 'Riwayat Pemesanan';
        $this->load->view('V_riwayat', $data);
    }

    function beranda()
    {
        $data['tampil'] = $this->M_Join->transaksi()->result_array();
        $data['barang'] = $this->M_Admin->barang()->result_array();
        $data['kategori'] = $this->M_Admin->kategori()->result_array();
        $data['customer'] = $this->M_User->customer($this->session->userdata('email'))->row_array();

        $data['title'] = 'Beranda Buah Kita';
        $this->load->view('V_beranda', $data);
    }

    function setting()
    {
        $data['tampil'] = $this->M_Join->transaksi()->result_array();
        $data['customer'] = $this->M_User->customer($this->session->userdata('email'))->row_array();

        $data['title'] = 'Setting Account';
        $this->load->view('V_setting', $data);
    }

    function changePassword()
    {
        $this->form_validation->set_rules('curent', 'Curent Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'Password', 'required|trim|min_length[3]|matches[new_password2]', [
            'matches' => 'password dont match !',
            'min_length' => 'password too short !'
        ]);
        $this->form_validation->set_rules('new_password2', 'Password', 'required|trim|min_length[3]|matches[new_password1]',);

        $customer = $this->M_User->customer($this->session->userdata('email'))->row_array();

        if ($this->form_validation->run() == false) {

            $data['tampil'] = $this->M_Join->transaksi()->result_array();
            $data['customer'] = $this->M_User->customer($this->session->userdata('email'))->row_array();

            $data['title'] = 'Setting Account';
            $this->load->view('V_setting', $data);
        } else {
            $curent_password = $this->input->post('curent');
            $new_password = $this->input->post('new_password1');

            if (password_verify($curent_password, $customer['password'])) {

                if ($curent_password == $new_password) {

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New password cannot be the same as current password
                       </div>');
                    redirect('C_User/setting');
                } else {

                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('customer');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                   Password Changed !
                    </div>');
                    redirect('C_User/setting');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
               Wrong Curent Password !
                  </div>');
                redirect('C_User/setting');
            }
        }
    }



    // PDF
    public function pdf_struk($kode_transaksi)
    {
        $struk = $this->M_Join->detial_transaksi($kode_transaksi)->row_array();

        $data = array(
            "dataku" => array(
                "nama" => "Struk Customer",
                "url" => "http://petanikode.com"
            ),

            'struk' => $struk,
        );

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Struk Customer.pdf";
        $data['title'] = 'Struk Customer';
        $this->pdf->load_view('V_pdfStruk', $data);
    }
}
