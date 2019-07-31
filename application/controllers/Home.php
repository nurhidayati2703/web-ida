<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function index()
    {
        $this->load->view('v_home');
    }

    public function about()
    {
        $this->load->view('v_about');
    }

    public function schedule()
    {
        $this->load->view('v_schedule');
    }

    public function contact()
    {
        $this->load->view('v_contact');
    }

    
}

?>