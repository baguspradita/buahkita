<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $data['notif'] = $this->M_Join->notif()->result_array();
    }

    // Dashboard
    public function index()
    {
        $data['notif'] = $this->M_Join->notif()->result_array();
        $data['petugas'] = $this->M_Admin->petugas($this->session->userdata('email'))->row_array();
        $data['kategori'] = $this->M_Admin->kategori()->result_array();
        $pembeli = $this->M_Admin->transaksi()->num_rows();


        $lokal = array(
            'kategori_transaksi' => 'lokal',

        );
        $this->db->where($lokal);
        $lokal = $this->db->get('transaksi')->num_rows();

        $import = array(
            'kategori_transaksi' => 'import',

        );
        $this->db->where($import);
        $import = $this->db->get('transaksi')->num_rows();

        $notif = array(
            'read_status' => '0',

        );
        $this->db->where($notif);
        $notif = $this->db->get('notif')->num_rows();



        $data['jumlah'] = array(
            'lokal' => $lokal,
            'import' => $import,
            'notif' => $notif,
            'pembeli' => $pembeli,
        );

        $data['title'] = 'Dashboard Buahkita';
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('V_dashboard', $data);
        $this->load->view('templates/footer', $data);
    }

    // Barang
    public function barang($kategori)
    {
        $notif = array(
            'read_status' => '0',

        );
        $this->db->where($notif);
        $notif = $this->db->get('notif')->num_rows();

        $data['jumlah'] = array(
            'notif' => $notif,
        );

        $data['notif'] = $this->M_Join->notif()->result_array();
        $data['petugas'] = $this->M_Admin->petugas($this->session->userdata('email'))->row_array();
        $data['kategori'] = $this->M_Admin->kategori()->result_array();
        $data['tampil'] = $this->M_Join->transaksi()->result_array();
        $data['barang'] = $this->M_Admin->barang()->result_array();
        $data['jenis'] = $kategori;



        $data['kategoriId'] = $this->M_Join->barangId($kategori)->row_array();
        $data['barangId'] = $this->M_Join->barangId($kategori)->result_array();

        $data['title'] = 'Data Buah';
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('V_barang', $data);
        $this->load->view('templates/footer', $data);
    }


    public function inputBarang()
    {

        $barang = $this->input->post('barang');
        $harga = $this->input->post('harga');
        $kategori = $this->input->post('kategori');
        $deskripsi = $this->input->post('deskripsi');

        // Upload file
        $config['upload_path']          = './assets/uploads';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        $this->upload->do_upload('img');
        $upload_img = $this->upload->data('file_name');

        $add = array(
            'nama_barang' => $barang,
            'harga' => $harga,
            'kategori' => $kategori,
            'deskripsi' => $deskripsi,
            'img' => $upload_img,
        );

        $barang = $this->db->get_where('barang', ['id_barang' => $kategori])->row_array();
        $this->M_Admin->inputBarang($add);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data berhasil ditambahkan 
          </div>');
        redirect('C_Admin/barang/' . $add['kategori']);
    }

    public function editBarang($id)
    {
        $barang = $this->input->post('barang');
        $harga = $this->input->post('harga');

        $update = [
            'nama_barang' => $barang,
            'harga' => $harga,
        ];

        $this->db->where('id_barang', $id);
        $this->M_Admin->editBarang($update);

        $barang = $this->db->get_where('barang', ['id_barang' => $id])->row_array();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data berhasil diedit 
          </div>');
        redirect('C_Admin/barang/' . $barang['kategori']);
    }

    public function deleteBarang($id)
    {
        $barang = $this->db->get_where('barang', ['id_barang' => $id])->row_array();
        $this->db->where('id_barang', $id);
        $this->db->delete('barang');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Data berhasil di hapus !
          </div>');
        redirect('C_Admin/barang/' . $barang['kategori']);
    }

    // Transaksi
    public function transaksi()
    {
        $notif = array(
            'read_status' => '0',

        );
        $this->db->where($notif);
        $notif = $this->db->get('notif')->num_rows();

        $proses = array(
            'status' => 'proses',

        );
        $this->db->where($proses);
        $proses = $this->db->get('transaksi')->num_rows();

        $selesai = array(
            'status' => 'selesai',

        );
        $this->db->where($selesai);
        $selesai = $this->db->get('transaksi')->num_rows();

        $data['jumlah'] = array(
            'notif' => $notif,
            'proses' => $proses,
            'selesai' => $selesai,
        );

        $data['notif'] = $this->M_Join->notif()->result_array();
        $data['petugas'] = $this->M_Admin->petugas($this->session->userdata('email'))->row_array();
        $data['tampil'] = $this->M_Join->transaksi()->result_array();
        $data['barang'] = $this->M_Admin->barang()->result_array();
        $data['customer'] = $this->M_Admin->customer()->result_array();
        $data['kategori'] = $this->M_Admin->kategori()->result_array();



        $data['title'] = 'Data Transaksi';
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('V_transaksi', $data);
        $this->load->view('templates/footer', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_transaksi', $id);
        $this->db->delete('transaksi');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Data berhasil di hapus !
          </div>');
        redirect('C_Admin/transaksi');
    }

    public function editTransaksi($id)
    {
        $customer = $this->input->post('customer');
        $barang = $this->input->post('barang');
        $jumlah = $this->input->post('jumlah');
        $status = $this->input->post('status');

        $update = array(

            'id_customer' => $customer,
            'id_barang' => $barang,
            'jumlah' => $jumlah,
            'status' => $status,
        );

        $this->db->where('id_transaksi', $id);
        $this->M_Admin->editTransaksi($update);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data berhasil di edit !
          </div>');
        redirect('C_Admin/transaksi');
    }

    // customer
    public function customer()
    {
        $notif = array(
            'read_status' => '0',

        );
        $this->db->where($notif);
        $notif = $this->db->get('notif')->num_rows();

        $data['jumlah'] = array(
            'notif' => $notif,
        );

        $data['notif'] = $this->M_Join->notif()->result_array();
        $data['petugas'] = $this->M_Admin->petugas($this->session->userdata('email'))->row_array();
        $data['kategori'] = $this->M_Admin->kategori()->result_array();
        $data['tampil'] = $this->M_Join->transaksi()->result_array();
        $data['barang'] = $this->M_Admin->barang()->result_array();
        $data['customer'] = $this->M_Admin->customer()->result_array();

        $data['title'] = 'Data Customer';
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('V_customer', $data);
        $this->load->view('templates/footer', $data);
    }

    // masterdata
    function masterdata()
    {
        $notif = array(
            'read_status' => '0',

        );
        $this->db->where($notif);
        $notif = $this->db->get('notif')->num_rows();

        $data['jumlah'] = array(
            'notif' => $notif,
        );

        $data['notif'] = $this->M_Join->notif()->result_array();
        $this->form_validation->set_rules('full_name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match !',
            'min_length' => 'password too short !'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['petugas'] = $this->M_Admin->petugas($this->session->userdata('email'))->row_array();
            $data['kategori'] = $this->M_Admin->kategori()->result_array();
            $data['tampil'] = $this->M_Join->transaksi()->result_array();
            $data['barang'] = $this->M_Admin->barang()->result_array();
            $data['customer'] = $this->M_Admin->customer()->result_array();
            $data['getPetugas'] = $this->M_Admin->getPetugas()->result_array();

            $data['title'] = 'Master Data';
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('V_masterdata', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'full_name' => htmlspecialchars($this->input->post('full_name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'level' => htmlspecialchars($this->input->post('level', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            ];
            $this->M_Auth->registerPetugas($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil membuat akun !
              </div>');
            redirect('C_Admin/masterdata');
        }
    }

    function editPetugas($id)
    {

        $update = array(

            'full_name' => htmlspecialchars($this->input->post('full_name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'level' => htmlspecialchars($this->input->post('level', true)),
        );

        $this->db->where('id_petugas', $id);
        $this->M_Auth->updatePetugas($update);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data berhasil di edit !
          </div>');
        redirect('C_Admin/masterdata');
    }

    public function deletePetugas($id)
    {
        $this->db->where('id_transaksi', $id);
        $this->db->delete('transaksi');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Data berhasil di hapus !
          </div>');
        redirect('C_Admin/masterdata');
    }

    // notif
    function readNotif($notif_id)
    {
        $update = [
            'read_status' => 'read',
        ];
        $this->M_Admin->readStatus($notif_id, $update);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Laporan telah dibaca !
		  </div>');
        redirect('C_Admin');
    }

    // change password
    function changePassword()
    {

        $this->form_validation->set_rules('curent', 'Curent Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'Password', 'required|trim|min_length[3]|matches[new_password2]', [
            'matches' => 'password dont match !',
            'min_length' => 'password too short !'
        ]);
        $this->form_validation->set_rules('new_password2', 'Password', 'required|trim|min_length[3]|matches[new_password1]',);



        if ($this->form_validation->run() == false) {

            $notif = array(
                'read_status' => '0',

            );
            $this->db->where($notif);
            $notif = $this->db->get('notif')->num_rows();

            $data['jumlah'] = array(
                'notif' => $notif,
            );

            $data['notif'] = $this->M_Join->notif()->result_array();
            $data['kategori'] = $this->M_Admin->kategori()->result_array();
            $data['tampil'] = $this->M_Join->transaksi()->result_array();
            $data['barang'] = $this->M_Admin->barang()->result_array();
            $data['customer'] = $this->M_Admin->customer()->result_array();
            $data['petugas'] = $this->M_Admin->petugas($this->session->userdata('email'))->row_array();

            $data['title'] = 'Change Password';
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('V_change', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $curent_password = $this->input->post('curent');
            $new_password = $this->input->post('new_password1');
            $petugas = $this->M_Admin->petugas($this->session->userdata('email'))->row_array();

            if (password_verify($curent_password, $petugas['password'])) {

                if ($curent_password == $new_password) {

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New password cannot be the same as current password
                       </div>');
                    redirect('C_Admin/changePassword');
                } else {

                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('petugas');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                   Password Changed !
                    </div>');
                    redirect('C_Admin/changePassword');
                }
            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Curent Password !
                   </div>');
                redirect('C_Admin/changePassword');
            }
        }
    }

    public function pesananBaru($id)
    {
        $proses = [
            'status' => 'proses',
        ];


        $this->db->where('id_transaksi', $id);
        $this->M_Admin->proses($proses);
        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">
		Pesanan Sedang Di Proses !
		  </div>');
        redirect('C_Admin/transaksi');
    }

    public function proses($id)
    {
        $proses = [
            'status' => 'selesai',
        ];


        $this->db->where('id_transaksi', $id);
        $this->M_Admin->proses($proses);
        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">
		Pesanan Siap Di Ambil !
		  </div>');
        redirect('C_Admin/transaksi');
    }

    public function blocked($id)
    {
        $blocked = [
            'is_active' => 'blocked',
        ];


        $this->db->where('id_customer', $id);
        $this->M_Admin->blocked($blocked);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
		Akun berhasil di blokir !
		  </div>');
        redirect('C_Admin/customer');
    }

    public function active($id)
    {
        $active = [
            'is_active' => 'active',
        ];


        $this->db->where('id_customer', $id);
        $this->M_Admin->active($active);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Akun berhasil di aktifkan !
		  </div>');
        redirect('C_Admin/customer');
    }

    public function blockedP($id)
    {
        $blocked = [
            'is_active' => 'blocked',
        ];


        $this->db->where('id_petugas', $id);
        $this->M_Admin->blockedP($blocked);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
		Akun berhasil di blokir !
		  </div>');
        redirect('C_Admin/masterdata');
    }
    public function activeP($id)
    {
        $active = [
            'is_active' => 'active',
        ];


        $this->db->where('id_petugas', $id);
        $this->M_Admin->activeP($active);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
		Akun berhasil di aktifkan !
		  </div>');
        redirect('C_Admin/masterdata');
    }



    // function inputPetugas()
    // {

    //     if ($this->form_validation->run() == false) {

    //         $data['petugas'] = $this->M_Admin->petugas($this->session->userdata('email'))->row_array();
    //         $data['kategori'] = $this->M_Admin->kategori()->result_array();
    //         $data['tampil'] = $this->M_Join->transaksi()->result_array();
    //         $data['barang'] = $this->M_Admin->barang()->result_array();
    //         $data['customer'] = $this->M_Admin->customer()->result_array();
    //         $data['getPetugas'] = $this->M_Admin->getPetugas()->result_array();

    //         $data['title'] = 'Master Data';
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('V_masterdata', $data);
    //         $this->load->view('templates/footer', $data);
    //     } else {
    //     }
    // }


    // PDF
    public function pdf_customer()
    {
        $customer = $this->M_Admin->customer()->result_array();

        $data = array(
            "dataku" => array(
                "nama" => "Data Customer",
                "url" => "http://petanikode.com"
            ),

            'customer' => $customer,
        );

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Data Customer.pdf";
        $data['title'] = 'Data Customer';
        $this->pdf->load_view('V_pdfCustomer', $data);
    }

    public function pdf_transaksi()
    {
        $transaksi = $this->M_Join->transaksi()->result_array();

        $data = array(
            "dataku" => array(
                "nama" => "Data Customer",
                "url" => "http://petanikode.com"
            ),

            'transaksi' => $transaksi,
        );

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Data Transaksi.pdf";
        $data['title'] = 'Data Transaksi';
        $this->pdf->load_view('V_pdfTransaksi', $data);
    }

    public function pdf_barang($kategori)
    {
        $transaksi = $this->M_Join->transaksi()->result_array();
        $kategoriId = $this->M_Join->barangId($kategori)->row_array();
        $barangId = $this->M_Join->barangId($kategori)->result_array();
        $jenis = $kategori;

        $data = array(
            "dataku" => array(
                "nama" => "Data Customer",
                "url" => "http://petanikode.com"
            ),

            'jenis' => $jenis,
            'transaksi' => $transaksi,
            'kategori' => $kategoriId,
            'barang' => $barangId,
        );

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Data Transaksi.pdf";
        $data['title'] = 'Data Transaksi';
        $this->pdf->load_view('V_pdfBarang', $data);
    }
}
