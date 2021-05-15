<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      /*if($this->session->userdata('acc_no'))
      {
          redirect('private_area');
      }*/
      $this->load->library('form_validation');
      $this->load->library('encryption');
      $this->load->helper('security');
      $this->load->model('login_model');

  }

  function index()
  {
      $this->load->view('login');
  }

  function validation()
  {
      $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
      $this->form_validation->set_rules('user_password', 'Password', 'required|trim');
      if($this->form_validation->run())
      {
          
          $result = $this->login_model->can_login($this->input->post('user_email', TRUE), $this->input->post('user_password', TRUE));
          
          if($result == '2step')
          {
            
            /*$data['fetched_data'] = $this->login_model->fetch_details($this->input->post('user_email'));
            $this->load->view('side-view',$data);*/
            
            //sending otp
            $otp = rand('1000','9999');
            $this->session->set_userdata('otp',$otp);                 
            $mobile_number = $this->login_model->fetch_mobile($this->input->post('user_email', TRUE));
            //echo $mobile_number."$".$otp;
            // Account details
            $fields = array(
                "sender_id" => "FSTSMS",
                "message" => "Your OTP is ".$otp,
                "language" => "english",
                "route" => "p",
                "numbers" => $mobile_number,
            );

            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_SSL_VERIFYHOST => 0,
              CURLOPT_SSL_VERIFYPEER => 0,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => json_encode($fields),
              CURLOPT_HTTPHEADER => array(
                "authorization: bBjgd9QTIXNncu1A20owWi8tzJYUqmRP37KEfxeM56vDGyhSlFER2YrXt8wfgbOoBxWLMTZjD0U9eyph",
                "accept: */*",
                "cache-control: no-cache",
                "content-type: application/json"
              ),
            ));
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err)
            {
              echo "cURL Error #:" . $err;
            }
            else
            {
              echo $response;
            }
            redirect('login/verify');
            
          }
          else
          {
              $this->session->set_flashdata('message',$result);
              $this->index();
          }
      }
      else
      {
          $this->index();
      }
  }
  function forgot_password()
  {
      $this->load->view('forgot_password');
  }

  function forgot_validate()
  {
      $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
      $this->form_validation->set_rules('user_password', 'Password', 'required');
      if($this->form_validation->run())
      {
          $result = $this->login_model->reset_password($this->input->post('user_email', TRUE), $this->input->post('user_password', TRUE));
          if($result == 'Password Reset Was Successfull')
          {
              $this->session->set_flashdata('message',$result);
              $this->load->view('forgot_password');
          }
          else
          {
            $this->session->set_flashdata('message',$result);
            $this->load->view('forgot_password');
          }
      }  

  }

  function verify()
  {
    $this->load->view('otpverify');
  }

  public function verify_otp()
    {
        // Get the otp value 
        $user_otp = $this->input->post('otp', TRUE);
        if ($user_otp == $this->session->userdata('otp'))
        {
            //unset($_SESSION['user_otp']);
            $this->session->unset_userdata('otp');
            $this->session->set_userdata('is_otp_verified', 'TRUE');
            $data['fetched_data'] = $this->login_model->fetch_details($this->session->userdata('acc_no'));
            $this->load->view('side-view',$data);
        }
        else
        {
            $this->session->unset_userdata('acc_no');
            $this->session->set_flashdata('message','Incorrect OTP');
            $this->index();
        }
    }
  function logout()
  {
      $data = $this->session->all_userdata();
      foreach($data as $row => $rows_value)
      {
          $this->session->unset_userdata($row);
      }
      redirect('login');
  }

}

?>