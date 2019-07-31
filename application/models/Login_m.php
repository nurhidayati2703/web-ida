<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {

    public function login($where) 
    {
      $query = $this->db->get_where('its_admin', $where)->result_array();
      return $query; 
    }      

}

?>