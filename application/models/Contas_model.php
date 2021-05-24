<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contas_model extends CI_Model {
    
	public function __construct()
	{
		parent::__construct();
      
	}

	public function addConta($values)
    {    
         return $this->db->insert("contas",$values);
    }

    public function getContas()
    {
      
        $this->db->distinct();
        $clientes=$this->db->get('contas');
        return $clientes->result();  
    }

    public function getCliente($id)
    {
      $cliente=$this->db->get_where('contas', array('id' => $id));
      return $cliente->result();
    }
    
    public function getSaldo($id)
    {
     $this->db->select('saldo'); 
     $saldo=$this->db->get_where('contas', array('id' => $id));
    
     return $saldo->result()[0]->saldo;
    }

    public function updateClinete($values,$id)
    {
      $this->db->where('id',$id); 
     return $this->db->update('contas',$values); 
    }

    public function deleteCliente($id)
    {
      $this->db->where( 'id' ,  $id ); 
      return $this->db->delete( 'contas' );
    }
	
}