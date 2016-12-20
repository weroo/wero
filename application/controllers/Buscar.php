<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Plataforma/header');
		//$this->load->view('Plataforma/Buscar/buscar_servicio');
		$this->load->view('Plataforma/footer');
	}
	
}
