<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargo_db extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		$this->load->database();
		$this->load->library('session');
	}

	public function obtener_cargo() {
		$query = $this->db->query('SELECT * FROM cargo WHERE Estado=1');
		return $query->result_array();
	}

	public function obtener_cargo_unico($ID) {
		$query = $this->db->get_where('cargo', array('ID' => $ID, 'Estado' => 1));
		//echo $this->db->last_query();
		return $query->result_array();
	}

	public function obtener_cargo_unico_eliminar($ID) {
		$query = $this->db->get_where('cargo', array('ID' => $ID));
		//echo $this->db->last_query();
		return $query->result_array();
	}


	public function registrar_cargo(){
		$this->load->helper('url');
		$data = array(
			'NOMBRE' => $this->input->post('NOMBRE'),
			'ESTADO' => 1
			);
		$query=$this->db->insert('cargo', $data);
	}

	public function modificar_cargo(){
		//Tabla Movimientos
		$data = array(
			'NOMBRE' => $this->input->post('NOMBRE')
			);
		$this->db->where('ID', $this->input->post('ID'));
		$this->db->update('cargo', $data);

	}

	public function eliminar_cargo(){
		$this->load->helper('url');
		$data = array(
			'ESTADO' => 0
			);
		$this->db->where('ID', $this->input->post('ID'));
		$this->db->update('cargo', $data);
	}

	function verificar_usuario($run) {
        $query=$this->db->query("SELECT * FROM usuarios WHERE RUN='".$run."' and Estado=1");
		return $query->result();
    }

	public function login_usuario($run,$contrasena) {
		$query = $this->db->query("SELECT * FROM usuarios WHERE Estado=1 AND RUN='".$run."' AND CONTRASENA='".$contrasena."'");
		return $query->result();
	}












}
