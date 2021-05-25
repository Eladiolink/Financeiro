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
    
	// Views

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

    //CRUD

	public function add()
    {
     
        $nome=$this->input->post("nome",TRUE);
        $cpf=$this->input->post("cpf",FALSE);
        $banco=$this->input->post("banco",TRUE);
        $agencia=$this->input->post("agencia",TRUE);
        $conta=$this->input->post("conta",TRUE);
        $saldo=$this->input->post("saldo",TRUE);
        
        if($nome !=null && $cpf !=null && $banco !=null &&  $agencia !=null &&  $conta !=null &&  $saldo !=null){
             $values=[
                 "nome"=>$nome,
                  "cpf"=>$cpf,
                  "nome_banco"=>$banco,
                  "agencia"=>$agencia,
                  "conta"=>$conta,
                  "saldo"=>$saldo
             ];
             
             if($this->Contas->addConta($values))
             {
                $this->load->helper('url');
                redirect('/', 'refresh');
             }
        }else{
            
        }
        
    } 
	
    public function edit()
    {   
        $id=$this->input->post("id",TRUE);
        $nome=$this->input->post("nome",TRUE);
        $cpf=$this->input->post("cpf",FALSE);
        $banco=$this->input->post("banco",TRUE);
        $agencia=$this->input->post("agencia",TRUE);
        $conta=$this->input->post("conta",TRUE);
        $saldo=$this->input->post("saldo",TRUE);
        
        $values=[
            "nome"=>$nome,
             "cpf"=>$cpf,
             "nome_banco"=>$banco,
             "agencia"=>$agencia,
             "conta"=>$conta,
             "saldo"=>$saldo
        ];

        if($this->Contas->updateClinete($values,$id)){
            $this->load->helper('url');
            redirect('/Contas/gerenciamentoContas', 'refresh');
        }else{
            $this->load->helper('url');
            redirect('/Contas/editarCliente', 'refresh');
          }
    } 

    public function delete()
    {
        $id=$this->input->post("id",TRUE);
        if($this->Contas->deleteCliente($id)){
            $this->load->helper('url');
            redirect('/Contas/gerenciamentoContas', 'refresh');
        }else{
            $this->load->helper('url');
            redirect('/Contas/editarCliente', 'refresh');
        }
    }
}