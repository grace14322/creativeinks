<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    
	public function index()
	{

        
	}
    
    public function postLogin()
    {
       $this->load->database();
       $this->load->helper(array('form', 'url'));
        
        $this->load->library('form_validation');
        $this->load->library('session');
        
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required',
                array('required' => 'You must provide a %s.')
        );
            
        if ($this->form_validation->run() == FALSE)
        {
                header('location:'.base_url());
        }
        else
        {
                $sql = $this->db->query('SELECT * from users where username = "'.$_POST['username'].'" AND password="'.md5($_POST['password']).'"');
                $row = $sql->num_rows();
                if ($row == 0) {
                     header('location:'.base_url());
                } else {
                    
                    $info = $sql->row();
                    $data = [
                            'user_id'   => $info->user_id,
                            'firstname' => $info->firstname,
                            'lastname'  => $info->lastname,
                            'email'     => $info->email,
                            'username'  => $info->username,
                            'gender'    => $info->gender,
                            'ustype_id' => $info->ustype_id,
                    ];

                    $this->session->set_userdata($data);
                    header ('location: '.base_url().'dashboard');
                }
        }
    }
    
    public function logout()
    {
        $this->load->database();
       $this->load->helper(array('form', 'url'));
        
        $this->load->library('form_validation');
        $this->load->library('session');
        
        $this->session->sess_destroy();
        redirect('/');
    }
    
     protected function is_logged_in()
    {
        if(!$this->session->userdata('user_id')){
            redirect('/');
        }
         redirect('dashboard');
       
    }
}
