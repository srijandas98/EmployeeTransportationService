<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller
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
        $this->load->model('result_model');
    }	
    public function index()
    {    	
    	$final_leaf = $this->result_model->search_leafvalue();
    	//print_r($final_score);
    	foreach ($final_leaf as $row1) {
    		$leaf_score = $row1->leaf_score;
    		break;
    	}
    	//echo $leaf_score;
    	$final_obj = $this->result_model->search_obj();
    	foreach ($final_obj as $row2) {
    		$leaf_obj = $row2->obj_res;
    		break;
    	}
    	//echo $leaf_obj;
    	$final_sub = $this->result_model->search_sub();
    	foreach ($final_sub as $row3) {
    		$leaf_sub = $row3->sub_res;
    		break;
    	}
    	//echo $leaf_sub;

    	$final_score = ($leaf_score*10 + $leaf_obj + $leaf_sub)/3;
    	//echo $final_score;
        $action = $this->result_model->insert_pwd($final_score);
        switch($action)
        {
            case 'pass': $this->load->view('testpass');
            break;
            case 'fail': $this->load->view('testfail');
            break;
        }

    	/*if($final_score > 65)
    	{
    	   /*$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&*';
           $generated_pwd = substr(str_shuffle($permitted_chars),0,8);
           //$encrypt_pwd = $this->encryption->encrypt($generated_pwd);*/
           //$action = $this->result_model->insert_pwd($final_score);
           /*if($action == 'OK')
            $this->load->view('testpass');

    	}
    	else
    		$this->load->view('testfail');*/
    }

    public function testpassing()
    {
        $data['fetched_data'] = $this->result_model->fetch_final_details();
        $this->load->view('pass',$data);
    }
    public function testfailing()
    {
        $this->load->view('tutorials');  
    }
    public function rbi_guidelines()
    {
        $this->load->view('rbiguide');  
    }

}