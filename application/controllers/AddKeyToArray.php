<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class AddKeyToArray extends CI_Controller
{
	
  public function __construct()
  {
    parent::__construct();
		
  }

  public function AddKeyToArray1()
  {
		// cach add key vao array de hien thi ra View - cach 1
		$this->load->model('your_model');
		$products = $this->post_model->getProducts();
		$comments = $this->post_model->getComments();
		$data = array(
			'products' => $products,
			'comments' => $comments
		);
		$this->load->view('ProductView',$data);
	}


	public function AddKeyToArray2()
  {
		// cach add key vao array de hien thi ra View - cach 2
		
		$this->load->model('your_model');
    $products = $this->your_model->getProducts();
    $comments = $this->your_model->getComments($this->numPostInPage);
		$posts = $this->your_model->getPosts();
		
		$this->load->view('post_view', 
			array(
				'products' => $products,
				'comments' => $comments,
				'posts' => $posts
			), false
	 );
			
		
			
	}
   
}
