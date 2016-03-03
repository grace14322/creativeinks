<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

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
$this->load->helper(array('form', 'url'));
        
        $this->load->library('form_validation');
        $this->load->library('session');
        
        $this->load->database();
        
        $this->is_logged_in();
        
        $sql = $this->db->query('SELECT * FROM category');
        $row = $sql->num_rows();
        
        
        $category = "";
        
        if($row == 0){
            $category = '<span class="text-center">No category available</span>';
        }else{
            $category = $sql->result();
        }
        
        $data = [
            'categories'  => $category,
        ];
        
		$this->load->view('template/header', $data);
        $this->load->view('category/category', $data);
        $this->load->view('template/footer', $data);
	}
    
    public function create(){
        
        $this->load->helper(array('form', 'url'));
        
        $this->load->library('form_validation');
        $this->load->library('session');
         $this->load->database();
        
        $this->is_logged_in();
        $data = [
            'cat_name' => $_POST['categoryname'],
        ];
        
        $this->db->insert('category', $data);
        
        header('location:'.base_url().'category');
    }
    
    
    protected function is_logged_in()
    {
        if(!$this->session->userdata('user_id')){
            redirect('/');
        }
       
    }
}
