<?php
/**
* 
*/
class CPersona extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MPersona');
		$this->load->model('MUsuario');
		

	}
	public function index(){
		$this->load->view('persona/VRegPersona');

	}
	public function guardar(){
		//PERSONA
		$param['DNI']=$this->input->post('txtDNI');
		$param['nombre']=$this->input->post('txtNombre');
		$param['apepaterno']=$this->input->post('txtApePaterno');
		$param['apematerno']=$this->input->post('txtApeMaterno');
		$param['email']=$this->input->post('txtEmail');
		$param['fechanac']=$this->input->post('txtFechaNac');
		//USUARIO
		$paramUsuario['nomUsuario']=$this->input->post('txtUsuario');
		$paramUsuario['clave']=$this->input->post('txtClave');//enviando clave encriptada $this->encrypt->sha1( ); <== no sale $this->load->library('encrypt');

		$lastId=$this->MPersona->guardar($param);
		if($lastId>0){
			$paramUsuario['idPersona']= $lastId;
			$this->MUsuario->guardarusuario($paramUsuario);
		}

	}


	public function actualizarDatos(){
		$param['nombre']=$this->input->post('txtNombre');
		$param['apepaterno']=$this->input->post('txtApePaterno');
		$param['apematerno']=$this->input->post('txtApeMaterno');
		$param['email']=$this->input->post('txtEmail');
		$this->MPersona->actualizarDatos($param);
		redirect('CPersona/index');
	}
	public function eliminarPersona(){
		$idP= $this->input->post('txtIdPersona');
		//$this->input->post('idPersona');
		$this->MUsuario->eliminarUsuario($idP);
		$this->MPersona->eliminarPersona($idP);

	}
}
