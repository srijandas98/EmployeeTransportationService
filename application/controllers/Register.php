<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

 public function __construct()
 {
    parent::__construct();
    if($this->session->userdata('acc_no'))
    {
     redirect('private_area');
    }
    $this->load->library('form_validation');
    $this->load->library('encryption');
    $this->load->model('register_model');
    $this->load->helper('security');
 }

 function index()
 {
    $this->load->view('register');
 }

 function validation()
 {
    $this->form_validation->set_rules('user_account', 'Account Number', 'required|trim|is_unique[registration.acc_no]',array('is_unique' => 'This %s already exists.', 'required' => 'Account Number is Required'));

    $this->form_validation->set_rules('user_number', 'Mobile Number', 'required|trim|max_length[10]|min_length[10]');

    $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[registration.email]', array('is_unique' => 'This %s already exists.', 'required' => 'Email Address is Required'));

    $this->form_validation->set_rules('user_password', 'Password', 'required');
    if($this->form_validation->run())
    {
       $verification_key = md5(rand());
       $hashed_password = password_hash($this->input->post('user_password', TRUE), PASSWORD_DEFAULT);
       $data = array(
        'acc_no'  => $this->input->post('user_account', TRUE),
        'email'  => $this->input->post('user_email', TRUE),
        'password' => $hashed_password,
        'verification_key' => $verification_key,
        'is_email_verified'  => 'no',
        'mobile' => $this->input->post('user_number', TRUE)
         );    

        $id = $this->register_model->insert($data);
        switch($id)
        {
            case "insert successfully":
                $subject = "Please verify email for login";
                  $message = "
                  <p>Hi ".$this->input->post('user_name')."</p>
                  <p>This is email verification mail from Codeigniter Login Register system. For complete registration process and login into system. First you want to verify you email by click this <a href='".base_url()."register/verify_email/".$verification_key."'>link</a>.</p>
                  <p>Once you click this link your email will be verified and you can login into system.</p>
                  <p>Thanks,</p>
                  ";
                  $config = array(
                   'protocol'  => 'smtp',
                   'smtp_host' => 'smtp.mailtrap.io',
                   'smtp_port' => 465,
                   'smtp_ssl' => 'tls',
                   'smtp_user'  => 'e59c90a6f9a371', 
                   'smtp_pass'  => 'a18b76d843a651', 
                   'mailtype'  => 'html',
                   'charset'    => 'iso-8859-1',
                   'wordwrap'   => TRUE
                  );

                  $this->load->library('email', $config);
                  $this->email->set_newline("\r\n");
                  $this->email->from('no-reply@abcbank.com');
                  $this->email->to($this->input->post('user_email'));
                  $this->email->subject($subject);
                  $this->email->message($message);
                  
                  if($this->email->send())
                  {
                    
                    $this->session->set_flashdata('message', 'Check in your email for email verification mail');
                    redirect('register');
                  }
                  break;
          case "Incorrect Account Number Or Email Address":
                   $this->session->set_flashdata('message','Incorrect Account Number Or Email Address');
                   redirect('register');
                   break;
          case "Your Already Registered":
                   $this->session->set_flashdata('message','Your Already Registered');
                   redirect('register');
                   break;
        }
        
    }
    
 }

 function verify_email()
 {
    if($this->uri->segment(3))
    {
       $verification_key = $this->uri->segment(3);
       $return_value = $this->register_model->verify_email($verification_key);

       switch($return_value)
       {
        case "Verified":
              $data['message'] = '<h1 align="center">Your Email has been successfully verified, now you can login from <a href="'.base_url().'login">here</a></h1>';
              break;

        case "No Such Account Number Found":
              $data['message'] = '<h3 align="center">No Such Account Number Found.</h3>';             
              break;
        case "Incorrect Verification Key":
              $data['message'] = '<h3 align="center">Mismatch in Verification Token</h3>';
              break;
       }
       $this->load->view('email_verification', $data);
    }
  }

}

?>