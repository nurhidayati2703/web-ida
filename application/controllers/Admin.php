<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Login_m');
        
        if($this->session->userdata('status') != 'logged in')
        {
            redirect('Login/index');
        }
    }


    public function index()
    {
        
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/templates/footer');
    }

    public function desc()
    {
        $this->load->model('Desc_m');

        // $data['title'] = 'Index' ; 
        // $data['konten'] = 'v_description' ;
        $data['desc']=$this->Desc_m->desc();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_description', $data); 
        $this->load->view('admin/templates/footer'); 
        

        // $this->load->model('Desc_m');
        // $data['desc']=$this->Desc_m->desc();
        // // var_dump($data); die;
        // $data['konten'] = 'admin/v_description' ;
        // $this->load->view('admin/templates/header');
        // $this->load->view('admin/v_description');
        // $this->load->view('admin/templates/footer');

        
    }

    // public function update($id_desc)
    // {

    //     $data['title'] = 'Edit Data';
    //     $data['desc'] = $this->Desc_m->getDescById($id_desc);

    //     $this->form_validation->set_rules('title', 'Nama Masakan', 'required', array( 'required' => '%s harus diisi'));
    //     $this->form_validation->set_rules('sub_title', 'sub_title ', 'required', array( 'required' => '%s harus diisi'));
    //     $this->form_validation->set_rules('content', 'Status Masakan', 'required', array('required'  => '%s harus diisi'));
        
    //     $where = array('id_desc' => $id_desc );

    //     if($this->form_validation->run()== FALSE){

    //         $this->load->view('admin/templates/header');
    //         $data['konten'] = 'v_edit' ;

    //         $this->load->view('amdin/templates/footer');
            

    //     }else {
    //         $title= $this->input->post('title');
    //         $sub_title = $this->input->post('sub_title');
    //         $content = $this->input->post('content');

    //         $data = array('title' => $title ,
    //                         'sub_title' => $sub_title,
    //                         'content' => $content);
            
            
    //         $this->Desc_m->update_data($where,$data);
            
    //         $this->session->set_flashdata('sukses', 'di ubah');
    
    //         redirect('Menu/index');
            
    //     };
    // }

    

    public function editdesc()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_edit-desc');
        $this->load->view('admin/templates/footer');

    }



    public function homeschedule()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_home-schedule');
        $this->load->view('admin/templates/footer');
    }

    public function edithomeschedule()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_edit-home-schedule');
        $this->load->view('admin/templates/footer');
    }


    public function detailschedule()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_detail-schedule');
        $this->load->view('admin/templates/footer');
    }

    public function register()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_register');
        $this->load->view('admin/templates/footer');
    }

    public function payment()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/v_payment');
        $this->load->view('admin/templates/footer');
    }

    
        
    
}

?>