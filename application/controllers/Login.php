<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->model('Login_m');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Login' ;
            $this->load->view('admin/v_login', $data);

        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
        
            $where = array('username' => $username ,
                            'password' => $password );
                        
            $cek = $this->Login_m->login($where);

            if ($cek) {
                $data_session = array(
                    'status' => 'logged in',
                    'nama_admin' => $cek[0]['nama_admin'],
                );
                $this->session->set_userdata($data_session);
                redirect('Admin');

            } else {
                $this->session->set_flashdata('pesan','Username atau password salah');
                redirect('Login/index');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login/index');
    }

}

/* End of file login.php */




?>