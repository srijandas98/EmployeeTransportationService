<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Graph extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      
  }
  function index()
  { 
  	$this->load->model('result_model');
  	$data['graph'] = $this->result_model->fetch_graph_details();
  	$this->load->view('graph',$data); 
  }
}

?>