<?php
class Mentor_model extends CI_Model {

        private $table_name = 'mentors';

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function store($data){
                $this->db->insert($this->table_name, $data);
                return true;
        }

}