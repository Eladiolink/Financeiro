<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transferencia extends CI_Controller {
    
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
	{   $user=$this->Contas->getClienteUser($_SESSION['user']['id']);
        $clientes=$this->Contas->getContas();
        if($user!=null){
            $this->load->view("transferencia",["clientes"=>$clientes,"user_id"=> $user[0]->id]);
        }else{
            $this->load->view("transferencia",["clientes"=>$clientes,"user_id"=>null]);
        }
		
	}

	public function add()
    {  
       $valor = $this->input->post("valor",TRUE);
       $proprietario=$this->input->post("proprietario",TRUE);
       $destinatario=$this->input->post("destinatario",TRUE);
       $data = date('Y-m-d'); 
       $values=[
           "proprietario"=>$proprietario,
           "destinatario"=>$destinatario,
           "valor"=>$valor,
           "data"=> $data
       ];
       if($proprietario != $destinatario){
           if($this->Transferencia->addTransferencia($values)){
            $this->load->helper('url');
            redirect('/', 'refresh');
           }
       }else{
        $this->load->helper('url');
        redirect('/Transferencia', 'refresh');
       }
       
    } 
	
    public function getTransferencias(){
        $id = $this->input->post("id",TRUE);
        $dataStart = $this->input->post("dataStart",TRUE);
        $dataEnd = $this->input->post("dataEnd",TRUE);
        $transferencia=$this->Transferencia->getTransferenciaDate($id,$dataStart,$dataEnd);
        
        print_r(json_encode($transferencia));

    }

    public function edit()
    {   
       
    } 

    public function delete()
    {
      
    }
}
