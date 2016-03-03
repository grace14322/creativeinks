<?php 

defined('BASEPATH') OR exit('No Direct Script Allowed');

class Settings extends CI_Controller{
    
    
    public function index(){
        $this->loadhelper();
        $this->load->view('template\header');
        $this->load->view('settings\settings');
        $this->load->view('template\footer');
    }
    
    public function updateinfo()
    {
        $this->loadhelper();
        
        $data = [
                    'firstname' => $_POST['fname'],
                    'lastname' => $_POST['lname'],
                    'gender' => $_POST['gender'],
                    'email' => $_POST['email'],
        ];
        
      // echo $this->session->userdata('user_id');
        
        $this->db->where([ 'user_id' => $this->session->userdata('user_id') ]);
        $this->db->update('users', $data);
        
        $sql = $this->db->query('SELECT * from users where user_id = '.$this->session->userdata('user_id'));
         $info = $sql->row();
                    $data = [
                            'user_id'   => $info->user_id,
                            'firstname' => $info->firstname,
                            'lastname'  => $info->lastname,
                            'email'     => $info->email,
                            'username'  => $info->username,
                            'gender'    => $info->gender,
                    ];

                    $this->session->set_userdata($data);
        
        header('location:'.base_url().'settings');
    }
    
    public function updatepassword()
    {
        $this->loadhelper();
         
        
        $cpassword = md5($_POST['cpass']);
        $npassword = md5($_POST['npass']);
        $vpassword = md5($_POST['vpass']);
        
        $message = '';
        
        $sql = $this->db->query('SELECT * from users where user_id = '.$this->session->userdata('user_id'));
         $info = $sql->row();
        
        if($cpassword != $info->password){
            $message = 'Oops! Invalid password.';
            $message = $this->session->set_flashdata('error', $message);
            header('location:'.base_url().'settings');
            exit(1);
        }
        
        
        if($cpassword == $npassword){
            $message = 'Oops! it looks like you have an error';
            $message = $this->session->set_flashdata('error', $message);
            header('location:'.base_url().'settings');    
            exit(1);
        }
        
        if($npassword != $vpassword){
            $message = 'Oops! New Password and Confirm password did not match.';
            $message = $this->session->set_flashdata('error', $message);
            header('location:'.base_url().'settings');    
            exit(1);
        }
        
        $data = [
            'password' => $npassword,
        ];
        
        $this->db->where([ 'user_id' => $this->session->userdata('user_id') ]);
        $this->db->update('users', $data);
        
        
        
        $sql = $this->db->query('SELECT * from users where user_id = '.$this->session->userdata('user_id'));
         $info = $sql->row();
                    $data = [
                            'user_id'   => $info->user_id,
                            'firstname' => $info->firstname,
                            'lastname'  => $info->lastname,
                            'email'     => $info->email,
                            'username'  => $info->username,
                            'gender'    => $info->gender,
                    ];

                    $this->session->set_userdata($data);
        
        header('location:'.base_url().'settings');
        
        
    }
    
    protected function loadhelper(){
        $this->load->database();
        $this->load->helper(['url','form']);
        $this->load->library('session');
        $this->is_logged_in();
    }
    
     protected function is_logged_in()
    {
        if(!$this->session->userdata('user_id')){
            redirect('/');
        }
       
    }
}