<?php

class MenteeController extends CI_Controller
{

    public function __construct()
        {
                parent::__construct();
                $this->load->model('mentee_model');
        }

    public function index(){
        $data['mentees'] = $this->mentee_model->get_all();
        return $this->load->view("mentee/index", $data);
    }
    public function register(){
        return $this->load->view("mentee/register");
    }

    public function register_post(){
        $data = $this->input->post();
        if($this->mentee_model->store($data))
            echo "success";
    }
     public function edit($id){
        $mentee = $this->mentee_model->get_by_id($id);
        $data['mentee'] = $mentee;
        return $this->load->view("mentee/edit", $data);
    }    

    public function update($id){
        $data = $this->input->post();
        if($this->mentee_model->update($id,$data)){
            $flash["type"] = "success";
            $flash["message"] = "Mentee berhasil diubah.";
            $this->session->set_flashdata('alert', $flash);
        } else {
            $flash["type"] = "danger";
            $flash["message"] = "Mentee gagal diubah. Silahkan coba lagi";
            $this->session->set_flashdata('alert', $flash);
        }
    
        redirect("mentee/edit/".$id);
    } 

    public function delete($id){
        if($this->mentee_model->destroy($id)){
            $flash["type"] = "success";
            $flash["message"] = "Mentee berhasil dihapus.";
            $this->session->set_flashdata('alert', $flash);
        } else {
            $flash["type"] = "danger";
            $flash["message"] = "Mentee gagal dihapus. Silahkan coba lagi";
            $this->session->set_flashdata('alert', $flash);
        }
        redirect("mentee");
    }     

}