<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Home extends CI_Controller
{
    public function index()
    {
        $data['barangLokal'] = $this->M_Admin->get_lokal()->result_array();
        $data['barangImport'] = $this->M_Admin->get_import()->result_array();
        $data['lokal'] = $this->M_Admin->get_lokal()->row_array();
        $data['import'] = $this->M_Admin->get_import()->row_array();


        $data['title'] = 'Buahkita';
        $this->load->view('V_home', $data);
    }
}
