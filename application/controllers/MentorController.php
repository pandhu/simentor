<?php

class MentorController extends CI_Controller
{

    public function __construct()
        {
                parent::__construct();
                $this->load->model('mentor_model');
        }

   
    public function register(){
        return $this->load->view("mentor/register");
    }

    public function register_post(){
        $data = $this->input->post();
        if($this->mentee_model->store($data))
            echo "success";
    }    

}