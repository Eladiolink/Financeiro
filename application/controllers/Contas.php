<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contas extends CI_Controller {
    
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Contas_model","Contas");
		$this->load->model("Transferencia_model","Transferencia");
	
		if(!isset($_SESSION['user'])){
            $this->load->helper('url');
            redirect('/Users', 'refresh');
        }
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

	public function cliente()
	{   
		$id = $this->uri->segment(3);
		$cliente=$this->Contas->getCliente($id)[0];
		$transferencia=$this->Transferencia->getTransferencia($id);
		if($cliente){
			$this->load->view("cliente",["cliente"=>$cliente,"transferencias"=>$transferencia]);
		}else{
			$this->load->helper('url');
			redirect('/', 'refresh');
		}
		

	}
    
	public function adicionarCliente()
	{
		$this->load->view("adicionarCliente");
	}
	
	public function editarCliente()
	{   
		$id = $this->uri->segment(3);
        $cliente=$this->Contas->getCliente($id)[0];

        if($cliente){
			$this->load->view("editarCliente",["cliente"=>$cliente]);
		}else{
                $this->load->helper('url');
                redirect('/Contas/gerenciamentoContas', 'refresh');
		}
	}
}
