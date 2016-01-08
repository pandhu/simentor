<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Mentee_Table extends CI_Migration {

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
                        'class_prefix' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '7',
                        ),
                        'class' => array(
                                'type' => 'INT',
                                'constraint' => '3',
                        ),
                        'school_year' => array(
                                'type' => 'INT',
                                'constraint' => '4',
                        ),
                        'id_mentor_gorup' => array(
                                'type' => 'INT',
                                'unsigned' => TRUE,
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('mentees');
        }

        public function down()
        {
                $this->dbforge->drop_table('mentees');
        }
}