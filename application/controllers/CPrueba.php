<?php
/**
* 
*/
class CPrueba extends CI_Controller // se ectiende de una clase de Codeigniter
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index (){
		$this->load->view('VPrueba'); // carga la vista VPrueba
	}
}