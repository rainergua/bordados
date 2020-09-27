<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        //$this->load->model('login_model');
    }
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('vistas/portada');
		$this->load->view('template/footer');
	}
	public function qsms()
	{
		$this->load->view('template/header');
		$this->load->view('vistas/qsomos');
		$this->load->view('template/footer');
	}
	public function nsoc()
	{
		$this->load->view('template/header');
		$this->load->view('vistas/nsoc');
		$this->load->view('template/footer');
	}
}
