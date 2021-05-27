<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  Migration_Add_users  extends  CI_Migration
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
            'idade' => array(
                'type' => 'INT',
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => FALSE,
            ),
            'senha' => array(
                'type' => 'VARCHAR',
                'constraint' => 256,
                'null' => FALSE,
            ),
            'tipo_user' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => FALSE,
            ),
            'create_at' => array(
                'type' => 'TIMESTAMP',
                'null' => FALSE,
            ),
            'update_at' => array(
                'type' => 'TIMESTAMP',
                'null' => FALSE,
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
        $this->dbforge->add_field("`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");
        $this->dbforge->add_field("`update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
