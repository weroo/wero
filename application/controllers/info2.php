<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info2 extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model('info');
		$data['obt_datos']=$this->info->inf2_factores_emision();
		$data['obt_datos2']=$this->info->inf2_factores_estado();
		$data['obt_datos3']=$this->info->inf2_factores_estado2();
		$data['fecha']=$this->info->obtener_meses();
		$this->load->view('Plataforma/header');
		$this->load->view('Plataforma/Info2/info2',$data);
		$this->load->view('Plataforma/footer');
	}

	public function prueba_json(){
		$this->load->model('Usuarios');
		$obt=$this->Usuarios->obtener_usuarios();
		$rows = array();
		$rows['name'] = 'Revenue';
		foreach($obt as $row){
			$rows['data'][]=(int) $row['ESTADO'];
		}
		$rows2 = array();
		$rows2['name'] = 'Overhead';
		foreach($obt as $row){
			$rows2['data'][]=(int) $row['ESTADO'];
		}
		$rows3 = array();
		//$rows3['name'] = 'Categorias';
		foreach($obt as $row){
			$rows3['data'][]=(string) $row['RUN'];
			//$rows3[]=(string) $row['RUN'];
		}
		$result = array();
		$result3 = array();
		array_push($result,$rows);
		array_push($result,$rows2);
		array_push($result3,$rows3);
		$result2['valor']=$result;
		$result2['categorias']=$result3;
		//array_push(,$result);
		print json_encode($result2);
	}

}
