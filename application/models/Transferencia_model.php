<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transferencia_model extends CI_Model {
    
	public function __construct()
	{
		parent::__construct();
        $this->load->model("Contas_model","Contas");
	}

	public function addTransferencia($values)
    {    
    
         $saldo_proprietario_final=$this->Contas->getSaldo($values["proprietario"])-$values["valor"];
         $saldo_destinatario_final=$this->Contas->getSaldo($values["destinatario"])+$values["valor"];
         if($saldo_proprietario_final>=0){
            $this->Contas->updateClinete(["saldo"=>$saldo_proprietario_final],$values["proprietario"]);
            $this->Contas->updateClinete(["saldo"=>$saldo_destinatario_final],$values["destinatario"]);
            return $this->db->insert("transferencia",$values);
         }else{
             return false;
         }
       
    }

    public function getTransferencia($id)
    {
        $this->db->select( ['valor','data','nome'] ); 
        $this->db->from( 'transferencia' ); 
        $this->db-> where( 'proprietario' ,  $id );
        $this->db->order_by( 'data' ,  'DESC' ); 
        $this->db->join( 'contas' ,  'contas.id = transferencia.destinatario' ); 
        $query  = $this->db->get();
        
         return $query->result();

    }

    public function getTransferenciaDate($id,$dateStart,$dateEnd)
    {
        $this->db->select( ['valor','data','nome'] ); 
        $this->db->from( 'transferencia' ); 
        $this->db-> where( 'data>=' ,  $dateStart );
        $this->db-> where( 'data<=' ,  $dateEnd );
        $this->db->order_by( 'data' ,  'DESC' ); 
        $this->db->join( 'contas' ,  'contas.id = transferencia.destinatario' ); 
        $query  = $this->db->get();
        return $query->result();

    }
	
}