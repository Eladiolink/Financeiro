<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
    
	public function __construct()
	{
		parent::__construct();
        
	}

	public function add($values)
    {   
      return ($this->get($values['email']))?false:$this->db->insert("users",$values);
    }

    public function get($email)
    {
        $this->db->select('*'); 
        $user=$this->db->get_where('users', array('email' => $email));
       
       return ($user->result())?$user->result()[0]:false;
    }
	  
    public function getUserWithoutAccount()
    {  
         $this->db->select(['users.id','users.email']);
         $this->db->from('users');
         $this->db->join('contas',  'contas.user = users.id',"left");
         $this->db->where("contas.user",null);
         $this->db->where("users.tipo_user !=","admin");
         $query  = $this->db->get();
        return ($query)?$query->result():false;
    }
}
