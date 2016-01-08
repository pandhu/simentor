<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Presence_Table extends CI_Migration {

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
                        'year' => array(
                                'type' => 'INT',
                                'constraint' => '4',
                        ),
                        'month' => array(
                                'type' => 'INT',
                                'constraint' => '2',
                        ),
                        'week' => array(
                                'type' => 'INT',
                                'constraint' => '2',
                        ),
                        'date' => array(
                                'type' => 'DATE',
                        ),
                        'id_mentee' => array(
                                'type' => 'INT',
                                'unsigned' => TRUE,
                        ),

                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('presences');
        }

        public function down()
        {
                $this->dbforge->drop_table('presences');
        }
}