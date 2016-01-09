<?php
class Mentor_model extends CI_Model {

        private $table_name = 'mentors';

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        public function get_all(){
                return $this->db->get($this->table_name)->result();
        }

        public function get_by_id($id){
                $mentors = $this->db->get_where($this->table_name, array("id"=>$id))->result();
                if(count($mentors)>0)
                        return $mentors[0];
                else 
                        return null; 
        }
        public function store($data){
                $this->db->insert($this->table_name, $data);
                return true;
        }

         public function update($id,$data){
                $this->db->where("id", $id);
                $this->db->update($this->table_name, $data);
                return true;
        }

        public function destroy($id){
                $this->db->delete($this->table_name, array('id' => $id));
                return true; 
        }


}