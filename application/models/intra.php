<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class intra extends CI_Model {

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

	}

	public function obtener_usuarios($q) {
		$query = $this->db->query("SELECT persona.ID,CONCAT(persona.NOMBRE,' ',persona.APELLIDO_P,' ',persona.APELLIDO_M) as NOMBRE_PERSONAL,unidad.NOMBRE as NOMBRE_UNIDAD,
																cargo.NOMBRE as NOMBRE_CARGO, depto.NOMBRE as NOMBRE_DEPTO,institucion.NOMBRE as NOMBRE_INSTITUCION, ANEXO,MAIL,IMAGEN
																FROM persona left join cargo on persona.CARGO=cargo.ID
																left join unidad on unidad.ID=persona.UNIDAD
																left join depto on depto.ID=unidad.DEPTO
																left join institucion on depto.institucion=institucion.ID
																WHERE UPPER(persona.NOMBRE) LIKE '%".strtoupper($q)."%' OR UPPER(persona.APELLIDO_P) LIKE '%".strtoupper($q)."%'
																OR UPPER(persona.APELLIDO_M) LIKE '%".strtoupper($q)."%' OR UPPER(unidad.NOMBRE) LIKE '%".strtoupper($q)."%'
																OR UPPER(depto.NOMBRE) LIKE '%".strtoupper($q)."%' OR UPPER(cargo.NOMBRE) LIKE '%".strtoupper($q)."%'
																");
		return $query->result_array();
	}

	public function obtener_usuarios_esp($q) {
		$query = $this->db->query("SELECT persona.ID,CONCAT(persona.NOMBRE,' ',persona.APELLIDO_P,' ',persona.APELLIDO_M) as NOMBRE_PERSONAL,unidad.NOMBRE as NOMBRE_UNIDAD,
																cargo.NOMBRE as NOMBRE_CARGO, depto.NOMBRE as NOMBRE_DEPTO,institucion.NOMBRE as NOMBRE_INSTITUCION, ANEXO,MAIL,IMAGEN
																FROM persona left join cargo on persona.CARGO=cargo.ID
																left join unidad on unidad.ID=persona.UNIDAD
																left join depto on depto.ID=unidad.DEPTO
																left join institucion on depto.institucion=institucion.ID
																WHERE persona.ID=$q
																");
		return $query->result_array();
	}

	public function obtener_usuarios_esp_j($q) {
		$query = $this->db->query("SELECT persona.ID,CONCAT(persona.NOMBRE,' ',persona.APELLIDO_P,' ',persona.APELLIDO_M) as NOMBRE_PERSONAL,unidad.NOMBRE as NOMBRE_UNIDAD,
																cargo.NOMBRE as NOMBRE_CARGO, depto.NOMBRE as NOMBRE_DEPTO, ANEXO,MAIL,IMAGEN
																FROM persona left join cargo on persona.CARGO=cargo.ID
																left join unidad on unidad.ID=persona.UNIDAD
																left join depto on depto.ID=unidad.DEPTO
																WHERE persona.ID=(SELECT encar FROM persona WHERE ID=$q)
																");
		return $query->result_array();
	}

	public function obtener_usuarios_esp_s($q) {
		$query = $this->db->query("SELECT persona.ID,CONCAT(persona.NOMBRE,' ',persona.APELLIDO_P,' ',persona.APELLIDO_M) as NOMBRE_PERSONAL,unidad.NOMBRE as NOMBRE_UNIDAD,
																cargo.NOMBRE as NOMBRE_CARGO, depto.NOMBRE as NOMBRE_DEPTO, ANEXO,MAIL,IMAGEN
																FROM persona left join cargo on persona.CARGO=cargo.ID
																left join unidad on unidad.ID=persona.UNIDAD
																left join depto on depto.ID=unidad.DEPTO
																WHERE persona.encar=$q
																");
		return $query->result_array();
	}






}
