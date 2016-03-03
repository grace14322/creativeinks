<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

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

        
        $this->loadhelper();
        $sql = $this->db->query('SELECT * FROM products');
        $row = $sql->num_rows();
        
        
        $products = "";
        
        if($row == 0){
            $products = [];
        }else{
            $products = $sql->result();
        }
        
        $sql = $this->db->query('SELECT * FROM category');
        $row = $sql->num_rows();
        
        
        $categories = "";
        
        if($row == 0){
            $categories = [];
        }else{
            $categories = $sql->result();
        }
        
        $data = [
            'categories'  => $categories,
            'products'    => $products,
        ];
		$this->load->view('template\header',  $data);
        $this->load->view('products\products',  $data);
        $this->load->view('template\footer',  $data);
	}
    
    public function create(){
        $this->load->database();
        $this->load->helper('url');
        
        $data = [
             'pr_name'      => $_POST['productname'],
             'pr_quantity'  => $_POST['productquantity'],
             'pr_price'     => $_POST['productprice'],
             'cat_id'       => $_POST['category'],
        ];
        
        $this->db->insert('products',$data);
        
        header('location: '.base_url().'products');
    }
    
    public function view(){
        $this->load->database();
        
        $this->load->helper(['url','form']);
        
        $this->load->library('session');
        
        $pr_id = $_GET['id'];
        
        $sql = $this->db->query("SELECT * from products where pr_id = '".$pr_id."'");
        $numrow = $sql->num_rows();
        
        if($numrow == 0){
           $products = 0;
        } else {
           $products = $sql->result();
        }
        
        $sql = $this->db->query("SELECT * from category ");
        $numrow = $sql->num_rows();
        
        if($numrow == 0){
           $categories = 0;
        } else {
           $categories = $sql->result();
        }
        
        foreach($products as $product):
            $pr_id = $product->pr_id;
            $pname = $product->pr_name;
            $cat_id = $product->cat_id;
            $quantity = $product->pr_quantity;
            $pr_price = $product->pr_price;
        endforeach;
        $data = [
            'pr_id'         => $pr_id,
            'products'      => $products,
            'pname'         => $pname,
            'cat_id'        => $cat_id,
            'quantity'      => $quantity,
            'pr_price'      => $pr_price,
            'categories'    => $categories,
            
        ];
		$this->load->view('template\header',  $data);
        $this->load->view('products\productview',  $data);
        $this->load->view('template\footer',  $data);
    }
    
    public function update()
    {
        $this->loadhelper();
        
        $data = [
             'pr_name'      => $_POST['productname'],
             'pr_quantity'  => $_POST['productquantity'],
             'pr_price'     => $_POST['productprice'],
             'cat_id'       => $_POST['category'],
        ];

        $where = "pr_id = ".$_POST['id'];

        $this->db->update('products', $data, $where);
        
        header('location: '.base_url().'products/view?id='.$_POST['id']);
    }
    
    protected function loadhelper()
    {
        $this->load->library('form_validation');   
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
