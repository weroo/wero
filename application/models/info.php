<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Model {

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

	public function obtener_valores($fecha) {
		$query = $this->db->query("SELECT clasificacion,ROUND(SUM(Generacion_MWh),2) AS Generacion_MWh FROM generacion_bruta WHERE CONCAT(LPAD(mes,2,'0'),'/',ano)='$fecha' GROUP BY 1");
		return $query->result_array();
	}

	public function obtener_valores_clasificacion($fecha,$clasificacion) {
		$query = $this->db->query("SELECT tecnologia,format(ROUND(SUM(Generacion_MWh),2),2,'de_DE') AS Generacion_MWh FROM generacion_bruta WHERE CONCAT(LPAD(mes,2,'0'),'/',ano)='$fecha' AND clasificacion='$clasificacion' GROUP BY 1");
		return $query->result_array();
	}


	public function obtener_meses() {
		$query = $this->db->query("SELECT DISTINCT CONCAT(LPAD(mes,2,'0'),'/',ano) AS fecha FROM generacion_bruta");
		$obt=$query->result_array();
		return $obt;
	}

	public function obtener_generacion_hora($tecnologia){
		$query = $this->db->query("SELECT convert(dia,unsigned) as dia,ROUND(AVG(Generacion_MWh),2) AS Generacion_MWh FROM generacion_bruta WHERE tecnologia='$tecnologia' GROUP BY 1 ORDER BY convert(dia,unsigned) asc");
		return $query->result_array();
	}

	public function obtener_usuarios_unico_eliminar($ID) {
		$query = $this->db->query("SELECT clasificacion,SUM(Generacion_MWh) AS Generacion_MWh FROM generacion_bruta_sic_sing GROUP BY 1 ");
		return $query->result_array();
	}

	public function obtener_emisiones() {
		$query = $this->db->query("SELECT format(AVG(industria_de_la_energia),2,'de_DE') AS industria_de_la_energia, AVG(Industria_manufactureras_y_de_la_construccion) AS Industria_manufactureras_y_de_la_construccion, format(AVG(Transporte),2,'de_DE') AS Transporte, format(AVG(Otros_sectores),2,'de_DE') AS Otros_sectores, AVG(Emisiones_fugitivas) AS Emisiones_fugitivas FROM factores_emision");
		return $query->result_array();
	}

	public function inf2_factores_emision() {
		$query = $this->db->query("SELECT central,SUM(Generacion_Mwh) AS Generacion_Mwh,AVG(Generacion_Mwh) AS Prom_Generacion_Mwh FROM generacion_bruta WHERE tecnologia='Solar Fotovoltaica' GROUP BY 1");
		return $query->result_array();
	}

	public function inf2_factores_estado() {
		$query = $this->db->query("SELECT
	`Región` as Region,
	`Comuna`,
	`Central`,
	`Estado`
	 FROM
	`capacidad_instalada`
	WHERE `Tipo_Final`='Solar Fotovoltaica'");
		return $query->result_array();
	}

	public function inf2_factores_estado2() {
		$query = $this->db->query("SELECT
	Tipo_Final,
	SUM(`Potencia_Bruta`) Potencia_bruta,
	SUM(`Potencia_Neta`) Potencia_neta
	 FROM
	`wero`.`capacidad_instalada`
	WHERE `Estado`='En Operacion'
	GROUP BY
	Tipo_Final");
		return $query->result_array();
	}




	public function registrar_usuario(){
		$this->load->helper('url');
		$data = array(
			'RUN' => str_replace(".", "",$this->input->post('RUN')),
			'NOMBRE' => $this->input->post('NOMBRE'),
			'APELLIDO_P' => $this->input->post('APELLIDO_P'),
			'APELLIDO_M' => $this->input->post('APELLIDO_M'),
			'CONTRASENA' => md5($this->input->post('PASSWORD')),
			'EMAIL' => $this->input->post('EMAIL'),
			'ESTADO' => 1
			);
		$query=$this->db->insert('usuarios', $data);
	}

	public function modificar_usuario(){
		//Tabla Movimientos
		$data = array(
			'NOMBRE' => $this->input->post('NOMBRE'),
			'APELLIDO_P' => $this->input->post('APELLIDO_P'),
			'APELLIDO_M' => $this->input->post('APELLIDO_M'),
			'EMAIL' => $this->input->post('EMAIL')
			);
		$this->db->where('RUN', $this->input->post('RUN'));
		$this->db->update('usuarios', $data);

	}

	public function eliminar_usuario(){
		$this->load->helper('url');
		$data = array(
			'ESTADO' => 0
			);
		$this->db->where('ID', $this->input->post('ID'));
		$this->db->update('usuarios', $data);
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
