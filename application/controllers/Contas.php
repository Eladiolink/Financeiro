<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contas extends CI_Controller {
    
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Exemplo1_model","Exemplo");
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function gerenciamentoContas()
	{
		$this->load->view("gerenciamentoContas");
	}

	public function transferencia()
	{
		$this->load->view("transferencia");
	}

	public function contaUser()
	{   
		$id = $this->uri->segment(3);
		$this->load->view("contaUser",["user"=>$id]);

	}

	
}
