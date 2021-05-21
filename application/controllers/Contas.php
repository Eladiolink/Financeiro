<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contas extends CI_Controller {
    
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Contas_model","Contas");
	}

	public function index()
	{ 
	    $clientes=$this->Contas->getContas();
		$this->load->view('index',["clientes"=>$clientes]);
	}

	public function gerenciamentoContas()
	{    
		$clientes=$this->Contas->getContas();
		$this->load->view("gerenciamentoContas",["clientes"=>$clientes]);
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
    
	public function adicionarCliente()
	{
		$this->load->view("adicionarCliente");
	}
	
	public function editarCliente()
	{   
		$id = $this->uri->segment(3);
        $cliente=$this->Contas->getCliente($id);

        if($cliente){
			$this->load->view("editarCliente",["cliente"=>$cliente[0]]);
		}else{
                $this->load->helper('url');
                redirect('/Contas/gerenciamentoContas', 'refresh');
		}
	}
}
