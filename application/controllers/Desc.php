    <?php
        
        defined('BASEPATH') OR exit('No direct script access allowed');
        
        class Desc extends CI_Controller {

            
            public function __construct()
            {
                parent::__construct();
                $this->load->model('Desc_m'); 
            }
            
            
            public function index()
            {
                // $data['title'] = 'Index' ; 
                // $data['konten'] = 'admin/v_description' ;
                $data['desc'] = $this->Desc_m->getDesc();
                $this->load->view('admin/templates/header', $data);
                $this->load->view('admin/v_description', $data);
                $this->load->view('admin/templates/footer'); 
                
                // $data['title'] = 'Index' ; 
                // $data['konten'] = 'v_menu' ;
                // $data['masakan'] = $this->m_menu->getMenu();
                // $this->load->view('header', $data);
                // $this->load->view('footer'); 
                
            }
            
            public function update($id_desc) // memasukkan parameter berupad id_desc
            {
                // $data['title'] = 'Edit Data';
                $data['desc'] = $this->Desc_m->getDescById($id_desc);
    
                $this->form_validation->set_rules('title', 'title', 'required', array( 'required' => '%s harus diisi'));
                $this->form_validation->set_rules('sub_title', 'sub_title ', 'required', array( 'required' => '%s harus diisi'));
                $this->form_validation->set_rules('content', 'content', 'required', array('required'  => '%s harus diisi'));
                
                var_dump($this->form_validation->run());
                $where = array('id_desc' => $id_desc );

                if($this->form_validation->run()== FALSE){

                    $this->load->view('admin/templates/header', $data);
                    // $data['konten'] = 'admin/v_edit-desc' ;
                    
                    $this->load->view('admin/v_edit-desc');
                    $this->load->view('admin/templates/footer');
                    

                }else {
                    
                    $title= $this->input->post('title');
                    $sub_title = $this->input->post('sub_title');
                    $content = $this->input->post('content');
    
                    $data = array('title' => $title ,
                                    'sub_title' => $sub_title,
                                    'content' => $content
                                );

                    var_dump($data);die;
                    
                    
                    $this->Desc_m->update_data($where,$data);
                    
                    $this->session->set_flashdata('sukses', 'di ubah');
                    
                   
                    redirect('Desc/index');
                    
                };
            }
            // public function edit($id_desc)
            // {
            //     $data['desc'] = $this->Desc_m->getDescById($id_desc);
            //     $this->load->view('admin/templates/header');
            //     $this->load->view('admin/v_edit-desc', $data);
            //     $this->load->view('admin/templates/footer');
            // }


            // public function edit($id_desc)
            // {
            //     // $data['desc'] = 'Edit Data';
                
            //     $this->form_validation->set_rules('title', 'title', 'required', array('required' => '%s harus diisi'));
            //     $this->form_validation->set_rules('sub_title', 'sub_title', 'required', array('required' => '%s harus di isi'));
            //     $this->form_validation->set_rules('content', 'content');

            //     $where = $this->db->update('its_description',  array('id_desc' => $id_desc));
        
            //     if($this->form_validation->run()== FALSE){
            //         // var_dump($this->form_validation->run()== FALSE); die;
        
            //         $data['desc'] = $this->Desc_m->getDescById($where);

                    
            //         redirect('Admin');
                     
                    
        
            //     }else {
            //         // $id_desc = $this->input->post('id_desc');
            //         $title = $this->input->post('title');
            //         $sub_title = $this->input->post('sub_title');
            //         $content = $this->input->post('content');
                    
                    
            //         $data = array(
            //             // 'id_desc' => $id_desc,
            //             'title' => $title,
            //             'sub_title' => $sub_title ,
            //             'content' => $content
                    
            //         );
                    
                    
            //         $this->Desc_m->update_data($where,$data);
                    
            //         $this->session->set_flashdata('sukses', 'di ubah');
            
            //         redirect('Admin/desc');
                    
            //     };

            // }

                public function hapus($id_desc)
                {
                    $where = array('id_desc' => $id_desc);
                    $this->Desc_m->hapus_data($where, 'desc');

                    $this->session->set_flashdata('sukses', 'dihapus ');
                    redirect('Menu/index');

                }
        
                
            }
        
        
        
        /* End of file Menu.php */
        

    ?>