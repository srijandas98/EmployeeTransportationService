<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic_details extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if((!($this->session->userdata('acc_no'))) || (!($this->session->userdata('is_otp_verified'))))
    {
      
      $data = $this->session->all_userdata();
      foreach($data as $row => $rows_value)
      {
          $this->session->unset_userdata($row);
      }
      redirect('login');
    }
    $this->load->model('details_model');
    $this->load->library('form_validation');
    $this->load->library('session');
    //$this->load->library('../controllers/question');  
  }

  function index()
  {
    $data['degree'] = $this->details_model->fetch_degree();
    $this->load->view('enter_details',$data);
  }
  function fetch_type()
  {
    if($this->input->post('degree_id'))
    {
      echo $this->details_model->fetch_type($this->input->post('degree_id'));
    }
  }

  function fetch_leaf()
  {
    if($this->input->post('type_id'))
    {
      echo $this->details_model->fetch_leaf($this->input->post('type_id'));
    }
  }
  function validation()
  {
    $this->form_validation->set_rules('degree','Degree','required');
    $this->form_validation->set_rules('type','Technical/Non-Technical','required');
    $this->form_validation->set_rules('leaf','Field','required');
    if($this->form_validation->run())
    {
        $result = $this->details_model->update_education($this->input->post('leaf'));
        if($result != '')
        {
          redirect('question');
        }
        else
        {
          $this->session->set_flashdata('message',$result);
          $this->index();
        } 
    }  

  }
}  

 
?>