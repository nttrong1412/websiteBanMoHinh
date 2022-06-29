<?php

class sanpham extends DController{

	public function __construct(){
		$data =array();
		parent::__construct();
}

	public function index(){
		$this->danhmuc();
	}
	public function search(){
		$condd = $_POST['tukhoa'];

		$table = 'tbl_category_product';
		$table_product = 'tbl_product';
		$table_post = 'tbl_category_post';
		$cond = "($table_product.idCP=$table.idCP AND $table_product.title_product LIKE '%".$condd."%') OR ($table_product.idCP=$table.idCP AND $table_product.price_product LIKE '%".$condd."%') OR ($table_product.idCP=$table.idCP AND $table.titelCP LIKE '%".$condd."%')";
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] =$categorymodel->category_home($table);
		$data['category_post'] =$categorymodel->categorypost_home($table_post);
		$data['category_seach'] =$categorymodel->search($table, $table_product, $cond);
		
		Session::init();
		$this->load->view('header',$data);
		$this->load->view('menu',$data);
		$this->load->view('search',$data);
		$this->load->view('footer');
	}
	

	public function danhmuc($id){
		
		$table = 'tbl_category_product';
		$table_product = 'tbl_product';
		$table_post = 'tbl_category_post';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] =$categorymodel->category_home($table);
		$data['category_post'] =$categorymodel->categorypost_home($table_post);
		$data['category_by_id'] =$categorymodel->categorybyid_home($table, $table_product, $id);

		Session::init();
		$this->load->view('header',$data);
		$this->load->view('menu',$data);
		$this->load->view('categoryproduct',$data);
		$this->load->view('footer');
	}
	public function tatca(){

		$table = 'tbl_category_product';
		$table_product = 'tbl_product';
		$table_post = 'tbl_category_post';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] =$categorymodel->category_home($table);
		$data['category_post'] =$categorymodel->categorypost_home($table_post);

		$data['list_product'] =$categorymodel->list_product_home($table_product);
		Session::init();
		$this->load->view('header',$data);
		$this->load->view('menu',$data);
		$this->load->view('list_product',$data);
		$this->load->view('footer');
	}
	public function sanphamhot(){
		$table = 'tbl_category_product';
		$table_product = 'tbl_product';
		$table_post = 'tbl_category_post';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] =$categorymodel->category_home($table);
		$data['category_post'] =$categorymodel->categorypost_home($table_post);
		$data['product_hot'] =$categorymodel->product_hot($table_product);

		Session::init();
		$this->load->view('header',$data);
		$this->load->view('menu',$data);
		$this->load->view('product_hot',$data);
		$this->load->view('footer');
	}
	public function chitietsanpham($id){
		$table = 'tbl_category_product';
		$table_product = 'tbl_product';
		$table_post = 'tbl_category_post';
		$cond = "$table_product.idCP=$table.idCP AND $table_product.id_product='$id'";


		$categorymodel = $this->load->model('categorymodel');
		$data['category'] =$categorymodel->category_home($table);
		$data['category_post'] =$categorymodel->categorypost_home($table_post);

		$data['details_product'] =$categorymodel->details_product_home($table,$table_product, $cond);
		foreach($data['details_product'] as $key => $cate){
			$id_cate = $cate['idCP'];
		}
		$cond_related = "$table_product.idCP=$table.idCP AND $table.idCP = '$id_cate' AND $table_product.id_product NOT IN('$id')";
		$data['related'] =$categorymodel->related_product_home($table,$table_product, $cond_related);
		Session::init();
		$this->load->view('header',$data);
		$this->load->view('menu',$data);
		$this->load->view('details_product',$data);
		$this->load->view('footer');
	}
	
}
?>