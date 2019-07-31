<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Form_m extends CI_Model {

    public function ambildata(){
        $ambildata = $this->db->join('its_country','its_country.id_country = its_peserta.id_country')
            ->join('its_phonecode','its_phonecode.id_phonecode = its_phonecode.id_phonecode')
            ->get('its_peserta')->result();
        return $ambildata; 
    }

    public function country(){
        $country = $this->db->get('its_country')->result();
        return $country;
    } 
 
    public function code(){
        $code = $this->db->get('its_phonecode')->result();
        return $code;
    } 

    public function prosesinsert()
    {
        $data = array(
            'first_name' => $this->input->post('firstname'),
            'last_name'  => $this->input->post('lastname'),
            'email'      => $this->input->post('email'),
            'id_phonecode' => $this->input->post('phonecode'),
            'phone_number'      => $this->input->post('phone'),
            'id_country'        => $this->input->post('country'),
            'organization'      => $this->input->post('organization'),
            'position'          => $this->input->post('position'),
            'industry'          => $this->input->post('industry'),
            'passport_number'   => $this->input->post('passportnum'),
            'foto_passport'     => $this->input->post('foto'),
            'needs'             => $this->input->post('needs')

        );
        
            // var_dump($data);
            $insert = $this->db->insert('its_peserta', $data);
            return $insert;

    }

    function ambilpeserta()
    {
        $peserta = $this->db->get('its_peserta')->result();
        return $peserta;
    }

    // function ambilpassport()
    // {
    //     $original_value = $this->db->query("SELECT passport_number FROM its_peserta ")->result() ;
    //     // $original_value = $this->db->get('its_peserta')->row()->passport_number ;
    //     return $original_value;
    // }

    // function check_input()
    // {
    //     $passport = $this->input->post('passportnum');
    //     $con = mysqli_connect("localhost","root","","webits");
    //     $duplicate=mysqli_query("select * from its_peserta where passport_number ='$passport'");
    //     $result = true;
    //     if(mysqli_num_rows($duplicate)>0)
    //     {
    //         $this->session->set_flashdata('unique','Passport/Id Number Is Already Registered');
    //         $result &= false;
    //     }
    //     return $result;
    // }


   


    
    



    
}

?>