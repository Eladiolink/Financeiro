<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  Migration_Add_contas  extends  CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'nome' => array(
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => FALSE,
            ),
            'nome_banco' => array(
                'type' => 'VARCHAR',
                'constraint' => 32,
                'null' => FALSE,
            ),
            'agencia' => array(
                'type' => 'VARCHAR',
                'constraint' => 4,
                'null' => FALSE,
            ),
            'conta' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => FALSE,
            ),
            'cpf' => array(
                'type' => 'VARCHAR',
                'constraint' => 11,
                'null' => FALSE,
            ),
            'saldo' => array(
                'type' => 'INT',
                'null' => FALSE,
            ),
      
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_field('user INT (5) unsigned NOT NULL');
        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (user) REFERENCES users(id)');
        $this->dbforge->create_table('contas');
    
           
    }

    public function down()
    {
        $this->dbforge->drop_table('contas');
    }
}
