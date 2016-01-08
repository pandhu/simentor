<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Mentor_Group_Table extends CI_Migration {

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
                        'id_mentor' => array(
                                'type' => 'INT',
                                'unsigned' => TRUE,
                        ),
                        'schedule_day' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE,
                        ),
                        'schedule_time' => array(
                                'type' => 'TIME',
                                'null' => TRUE,
                        ),
                        'logo' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'description' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('mentoring');
        }

        public function down()
        {
                $this->dbforge->drop_table('mentoring');
        }
}