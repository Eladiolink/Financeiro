<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  Migration_Add_transferencia  extends  CI_Migration
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
            'proprietario' => array(
                'type' => 'INT',
                'constraint' => 32,
                'unsigned' => TRUE,
                'null' => FALSE,
            ),
            'destinatario' => array(
                'type' => 'INT',
                'constraint' => 64,
                'unsigned' => TRUE,
                'null' => FALSE,
            ),
            'valor' => array(
                'type' => 'INT',
                'null' => FALSE,
            ),
            'data' => array(
                'type' => 'DATE',
                'null' => FALSE,
            ),
      
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (proprietario) REFERENCES contas(id)');
        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (destinatario) REFERENCES contas(id)');
        $this->dbforge->create_table('transferencia');
    
           
    }

    public function down()
    {
        $this->dbforge->drop_table('transferencia');
    }
}
