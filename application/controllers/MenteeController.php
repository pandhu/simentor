<?php

class MenteeController extends CI_Controller
{

    public function __construct()
        {
                parent::__construct();
                $this->load->model('mentee_model');
        }

       public function index()
    {

        $this->mentee->get_last_ten_entries();
    }
    public function register(){
        return $this->load->view("mentee/register");
    }

    public function register_post(){
        $data = $this->input->post();
        if($this->mentee_model->store($data))
            echo "success";
    }    

}