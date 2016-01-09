<?php

class MentorController extends CI_Controller
{

    public function __construct()
        {
                parent::__construct();
                $this->load->model('mentor_model');
        }

    public function index(){
        $data['mentors'] = $this->mentor_model->get_all();
        return $this->load->view("mentor/index", $data);
    }
   
    public function register(){
        return $this->load->view("mentor/register");
    }

    public function register_post(){
        $data = $this->input->post();
        if($this->mentor_model->store($data))
            echo "success";
    }

    public function edit($id){
        $mentor = $this->mentor_model->get_by_id($id);
        $data['mentor'] = $mentor;
        return $this->load->view("mentor/edit", $data);
    }    

    public function update($id){
        $data = $this->input->post();
        if($this->mentor_model->update($id,$data)){
            $flash["type"] = "success";
            $flash["message"] = "Mentor berhasil diubah.";
            $this->session->set_flashdata('alert', $flash);
        } else {
            $flash["type"] = "danger";
            $flash["message"] = "Mentor gagal diubah. Silahkan coba lagi";
            $this->session->set_flashdata('alert', $flash);
        }
    
        redirect("mentor/edit/".$id);
    } 

    public function delete($id){
        if($this->mentor_model->destroy($id)){
            $flash["type"] = "success";
            $flash["message"] = "Mentor berhasil dihapus.";
            $this->session->set_flashdata('alert', $flash);
        } else {
            $flash["type"] = "danger";
            $flash["message"] = "Mentor gagal dihapus. Silahkan coba lagi";
            $this->session->set_flashdata('alert', $flash);
        }
        redirect("mentor");
    } 

}