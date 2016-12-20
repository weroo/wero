<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info1 extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model('info');
		$data['fecha']=$this->info->obtener_meses();
		$data['obt_datos']=$this->info->obtener_valores('01/2016');
		$data['obt_emisiones']=$this->info->obtener_emisiones();
		$this->load->view('Plataforma/header');
		$this->load->view('Plataforma/Info1/info1',$data);
		$this->load->view('Plataforma/footer');
	}

	public function obt_datos_tabla($fecha,$clasificacion){
		$this->load->model('info');
		$obt_datos=$this->info->obtener_valores_clasificacion('01/2016',$clasificacion);
		echo "<table class='table table-bordered'>
                <tbody><tr>
                  <th>Tecnologia</th>
                  <th>Generacion MWh</th>
                </tr>
                <tr>
				";
			foreach ($obt_datos as $row){
					echo "<tr>";
				 echo "<td><a href='#'  onclick=".'"'."generagrafico("."'".$row['tecnologia']."'".")".'"'.">".$row['tecnologia']."</a></td>";
				 echo "<td>".$row['Generacion_MWh']."</td>";
				 echo "</tr>";
			}
			echo "</tbody></table>";
	}

	public function obtener_dato_json($tecnologia){
		$tecnologia=urldecode($tecnologia);

		$this->load->model('info');
		$obt=$this->info->obtener_generacion_hora($tecnologia);
		$rows = array();
		$rows['name'] = $tecnologia;
		foreach($obt as $row){
			$rows['data'][]=(float) $row['Generacion_MWh'];
		}
		$rows3 = array();
		//$rows3['name'] = 'Categorias';
		foreach($obt as $row){
			$rows3['data'][]=(string) $row['dia'];
			//$rows3[]=(string) $row['RUN'];
		}
		$result = array();
		$result3 = array();
		array_push($result,$rows);
		array_push($result3,$rows3);
		$result2['valor']=$result;
		$result2['categorias']=$result3;
		//array_push(,$result);
		print json_encode($result2);
	}



}
