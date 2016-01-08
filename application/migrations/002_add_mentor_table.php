<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Mentor_Table extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'age' => array(
                                'type' => 'INT',
                                'constraint' => '2',
                        ),
                        'interest' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => TRUE,
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'hp' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '15',
                        ),
                        'activity' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => TRUE,
                        ),
                        'facebook' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE,
                        ),
                        'quote' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'address' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('mentors');
        }

        public function down()
        {
                $this->dbforge->drop_table('mentors');
        }
}