<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Buy extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Form_m');
    }

    public function index()
    {
        $data['country']=$this->Form_m->country();
        $data['code']=$this->Form_m->code();
        
        $data['ambildata']=$this->Form_m->ambildata();

        $this->load->view('v_form', $data);

    }

    public function insert()
    {
        $this->form_validation->set_rules('firstname','firstname');
		$this->form_validation->set_rules('lastname','lastname','required|trim');
		$this->form_validation->set_rules('email','email','required|trim');
		$this->form_validation->set_rules('phonecode','phonecode','required');
		$this->form_validation->set_rules('phone','phone','required');
        $this->form_validation->set_rules('country','country','required');
		$this->form_validation->set_rules('organization','organization'); 
		$this->form_validation->set_rules('position','position');
        $this->form_validation->set_rules('industry','industry');

        $this->form_validation->set_rules('passportnum','passportnum','required','is_unique');
        
        // $this->form_validation->set_rules(
        //     'passportnum', 'passportnum',
        //     'required|is_unique[its_peserta.passport_number]',
        //     array(
        //             'required'      => 'You have not provided %s.',
        //             'is_unique'     => 'This %s already exists.'
        //     )
        // );


        // $original_value = $this->db->query("SELECT passport_number FROM its_peserta ")->row()->passport_number ;
        // if($_POST['passportnum'] != $original_value) {
        //     $this->session->set_flashdata('add_failed','Email id must be unique & valid email address.');
        //     $is_unique =  '|is_unique[its_peserta.passport_number]';
        // } else {
        //     $is_unique =  '';

        // $original_value['original_value']=$this->Form_m->ambilpassport();

        // if($this->input->post('passportnum') == $original_value) {
        //     $this->session->set_flashdata('unique','Email id must be unique & valid email address.');
        //     $is_unique =  '|is_unique[its_peserta.passport_number]';
        // } else {
        //     $is_unique =  '';
        // }

        // $this->form_validation->set_rules('passportnum', 'passportnum', 'required','is_unique');

        // var_dump($original_value); die;



        $this->form_validation->set_rules('foto','foto','required');
        $this->form_validation->set_rules('needs','needs');
        
        


		if($this->form_validation->run() == TRUE){
            // var_dump($this->form_validation->run() == TRUE); die;
        //    if($this->input->post('passportnum')){
        //     $this->load->model('Form_m');
        //     $this->Form_m->check_input();
            
        //    }
   
            //  else {
                if($this->Form_m->prosesinsert()){
                    $this->session->set_flashdata('pesan_berhasil', 'Input Data Success');
    
                }else{
                    $this->session->set_flashdata('pesan_gagal', 'Input Data Failed ');
                }
            // }
            redirect('payment','refresh');
            
		}else{

            $this->session->set_flashdata('pesan_gagal', 'Input Data Failed');
            redirect('buy','refresh');

            // $nama=$this->input->post('firstname');
            // $this->session->set_flashdata('firstname', $nama);
            // var_dump($nama); die;
        
        }
        
       
        
        }

    
}
// if($this->input->post('passportnum') != $is_unique) {
                
                //     $is_unique =  '|is_unique[its_peserta.passport_number]';
                //     $this->session->set_flashdata('unique', 'Id Number Is Already Registered');
                //  } else {
                //     $is_unique =  '';
                //  }

?>

