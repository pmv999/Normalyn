<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_user extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'usr_cod' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'usr_nombre' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '500',
                                'null' => TRUE,
                        ),
                        'usr_correo' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '500',
                                'null' => TRUE,
                        ),
                        'usr_pass' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '500',
                            'null' => TRUE,
                        ),
                        'usr_tipo' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '500',
                            'null' => TRUE,
                        ),
                        'usr_status' => array(
                            'type' => 'INT',
                            'constraint' => '10',
                            'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('usr_cod', TRUE);
                $this->dbforge->create_table('usuarios');
        }

        public function down()
        {
                $this->dbforge->drop_table('usuarios');
        }
}