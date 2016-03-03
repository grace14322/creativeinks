<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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

        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
        
        $this->is_logged_in();
        
        $ustype_id = $this->session->userdata('ustype_id');
        
        $sql = $this->db->query("select * from user_type where ustype_id= ".$ustype_id);
        $info = $sql->row();
        
        $data = [
            'usertype' => $info->ustype_name,
        ];
        
        $this->session->set_userdata($data);
        
		$this->load->view('template/header');
        $this->load->view('dashboard/dashboard');
        $this->load->view('template/footer');
	}
    
    protected function is_logged_in()
    {
        if(!$this->session->userdata('user_id')){
            redirect('/');
        }
       
    }
}
