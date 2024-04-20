<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $check_setup = $this->db->get('petugas')->row_array();
        if ($check_setup == null) {
            redirect('C_Auth/register');
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            # Gagal validasi login
            $data['title'] = 'Login Admin';
            $this->load->view('V_login', $data);
        } else {
            # Lolos validasi
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $petugas = $this->db->get_where('petugas', ['email' => $email])->row_array();

        // jika user ada
        if ($petugas) {
            # cek password

            $captcha_response = trim($this->input->post('g-recaptcha-response'));

            if ($captcha_response != '') {
                $keySecret = '6Lc2gscmAAAAAPAkXkLGbwyilbvTyP_orXDzB6Lr';

                $check = array(
                    'secret'        =>    $keySecret,
                    'response'        =>    $this->input->post('g-recaptcha-response')
                );

                $startProcess = curl_init();

                curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

                curl_setopt($startProcess, CURLOPT_POST, true);

                curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));

                curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);

                curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);

                $receiveData = curl_exec($startProcess);

                $finalResponse = json_decode($receiveData, true);

                if ($finalResponse['success']) {
                    if (password_verify($password, $petugas['password'])) {
                        $data = [
                            'email' => $petugas['email'],
                            'password' => $petugas['password,']
                        ];



                        // kondisi
                        $this->session->set_userdata($data);
                        if ($petugas['level'] == 'admin') {

                            redirect('C_Admin'); //admin

                        } else if ($petugas['level'] == 'operator') {

                            if ($petugas['is_active'] == 'blocked') {
                                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda telah di blokir !</div>');
                                redirect('C_Auth');
                            } else {

                                redirect('C_Admin'); //petugas
                            }
                        } else {

                            redirect('C_Auth');
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong password !
                      </div>');
                        redirect('C_Auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Validation gagal
                      </div>');
                    redirect('C_Auth');
                }
            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
              Captcha gagal
                </div>');
                redirect('C_Auth');
            }
        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email is not registered !
                  </div>');
            redirect('C_Auth');
        }
    }


    public function register()
    {
        $this->form_validation->set_rules('full_name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match !',
            'min_length' => 'password too short !'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi Admin';
            $this->load->view('V_register', $data);
        } else {
            $data = [
                'full_name' => htmlspecialchars($this->input->post('full_name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            ];
            $this->M_Auth->registerPetugas($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil membuat akun !
              </div>');
            redirect('C_Auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('password');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logout !
          </div>');
        redirect('C_Auth');
    }


    // Login User
    public function loginUser()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            // gagal validasi login
            $data['title'] = 'Sign In  Account';
            $this->load->view('V_loginUser', $data);
        } else {
            // lolos validasi
            $this->_loginUser();
        }
    }

    private function _loginUser()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $customer = $this->db->get_where('customer', ['email' => $email])->row_array();

        // jika user ada
        if ($customer) {
            // cek password 

            $captcha_response = trim($this->input->post('g-recaptcha-response'));

            if ($captcha_response != '') {
                $keySecret = '6Lf3lMImAAAAAPvKLQZ3YAfhweQ-TnQTK7Z7LLRA';

                $check = array(
                    'secret'        =>    $keySecret,
                    'response'        =>    $this->input->post('g-recaptcha-response')
                );

                $startProcess = curl_init();

                curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

                curl_setopt($startProcess, CURLOPT_POST, true);

                curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));

                curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);

                curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);

                $receiveData = curl_exec($startProcess);

                $finalResponse = json_decode($receiveData, true);

                if ($finalResponse['success']) {

                    if (password_verify($password, $customer['password'])) {
                        $data = [
                            'email' => $customer['email'],
                            'password' => $customer['password'],
                        ];
                        $this->session->set_userdata($data);
                        if ($this->form_validation->run() == true) {
                            //    berhasil login
                            if ($customer['is_active'] == 'blocked') {
                                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda telah di blokir !</div>');
                                redirect('C_Auth/loginUser');
                            } else {

                                redirect('C_User/beranda');
                            }
                        } else {
                            //    gagal login
                            redirect('C_Auth/loginUser');
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        Wrong password !
                          </div>');
                        redirect('C_Auth/loginUser');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Validation gagal
                      </div>');
                }
            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
              Captcha gagal
                </div>');
                redirect('C_Auth/loginUser');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered !
              </div>');
            redirect('C_Auth/loginUser');
        }
    }

    public function registerUser()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match !',
            'min_length' => 'password too short !'
        ]);
        $this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            // gagal register
            $data['title'] = 'Sign Up Account';
            $this->load->view('V_registerUser', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'telepon' => htmlspecialchars($this->input->post('telepon', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            ];
            $this->M_Auth->registerUser($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil membuat akun !
              </div>');
            redirect('C_Auth/loginUser');
        }
    }

    private function _sendEmail($token, $type)
    {
        $this->load->library('email');
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'baguspradita050205@gmail.com',
            'smtp_pass' => 'kzwgulzgdkrextto',
            'smtp_port' => "465",
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
        ];

        // $this->load->library('email', $config);

        $this->email->initialize($config);
        $this->email->from('baguspradita050205@gmail.com', 'Buah Kita');
        $this->email->to($this->input->post('email'));

        if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Click this link to reset your password : <a href="' . base_url() . 'C_Auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password </a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
        }
    }

    public function forgotPassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');



        if ($this->form_validation->run() == false) {
            $data['title'] = 'Forgot Password';
            $this->load->view('V_forgotPassword', $data);
        } else {
            $email = $this->input->post('email');
            $petugas = $this->db->get_where('petugas', ['email' => $email])->row_array();

            if ($petugas) {

                $token = base64_encode(random_bytes(32));
                $petugas_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => date('Y-m-d'),
                ];

                $this->M_Auth->token($petugas_token);
                $this->_sendEmail($token, 'forgot');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Silahkan cek gmail anda untuk mereset password !
                  </div>');
                redirect('C_Auth/forgotPassword');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email is not registered !
                  </div>');
                redirect('C_Auth/forgotPassword');
            }
        }
    }
}
