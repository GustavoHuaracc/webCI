<?php
/**
* 
*/
class CLogin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MLogin');
	}
	public function index(){
		$data['mensaje']='';
		$this->load->view('VLogin',$data);
	}
	public function ingresar(){
		$usu= $this->input->post('txtUsuario');
		$pass= $this->input->post('txtClave');
		$res= $this->MLogin->ingresar($usu,$pass);
		if ($res==1) {
			
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('persona/VUdatepersona');
			$this->load->view('layout/footer');
		}else{
			$data['mensaje']="Usuario o contrasena erronea";
			$this->load->view('VLogin',$data);
		}
	}
}