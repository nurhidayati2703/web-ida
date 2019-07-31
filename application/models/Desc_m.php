<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Desc_m extends CI_Model {

    public function getDesc()
    {
        $description = $this->db->get('its_description')->result_array();
        return $description ; 
    }    

    public function getDescById($id_desc)
    {
        return $this->db->get_where('its_description' , ['id_desc' => $id_desc])->row_array();
    }

    // public function hapus_data($where,$description)
    // {
    //     $this->db->where($where);
    //     $this->db->delete($description);
    // }

    // public function tambah_data($data)
    // {
    //     $this->db->insert('its_description', $data);
    // }

   public function update_data($where, $data)
   {
     
       $this->db->where($where);
       return $this->db->update('its_description', $data);
   }

    

    // public function do_upload($type, $gambar)
	// {
	// 	$this->load->helper(array('form', 'url'));
	
	// 	$now = date('dmYHis');
	// 	$config['upload_path']          = "./assets/$type";
	// 	$config['allowed_types']        = 'gif|jpg|png';
	// 	$config['max_size']             = 10000;
	// 	$config['file_name']             = $now;
	
	// 	$this->load->library('upload',$config);
	
	// 	$uploaddir = "./assets/$type";
	// 	$file_name = $now.".jpg";
	// 	$uploadfile = $_SERVER['DOCUMENT_ROOT'] . "/lowcarbo/assets/tps/".$file_name;

	// 	if (move_uploaded_file($_FILES[$gambar]['tmp_name'], $uploadfile)) {
	// 		$dataDB['status'] = 'success';       
	// 		$dataDB['filename'] = $file_name;
	// 		return false;
	// 	} else {
	// 		$dataDB['status'] =  'failure';  
	// 		return $type . '/' . $file_name;     
    //     }
        
    // }


    

}

?>