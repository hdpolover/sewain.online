<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Home';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }
}
