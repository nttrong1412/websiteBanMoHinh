<?php

class product extends DController{
	public function __construct(){
		parent::__construct();
}
	public function index(){
		$this->add_category();		
	}
	public function add_category(){
		Session::init();
		$this->load->view('admin/header');
		//$this->load->view('admin/menu');
		$this->load->view('admin/product/add_category');
		$this->load->view('admin/footer');
	}
		
	public function insert_category(){
		$title = $_POST['titleCP'];
		$desc = $_POST['descCP'];
		$table = "tbl_category_product";
		$data = array(
			'titelCP'=> $title,
			'destCP'=> $desc
		);
		$categorymodel = $this->load->model('categorymodel');
		$result = $categorymodel->insertproduct($table,$data);
		if($result==1){
			$message['msg'] = "Thêm danh mục sản phẩm thành công";
			header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Thêm sản danh mục phẩm thất bại";
			header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));

		}
		}	
		

	public function delete_category($id){
		$table = "tbl_category_product";
		
		$cond = "tbl_category_product.idCP = '$id'";
		$categorymodel = $this->load->model('categorymodel');
		$result = $categorymodel->deletecategory($table,$cond);
		if($result==1){
			$message['msg'] = "Xóa danh mục sản phẩm thành công";
			header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Xóa danh mục sản phẩm thất bại";
			header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));

		}

	}
	public function edit_category($id){
		$table = "tbl_category_product";
		$cond = "tbl_category_product.idCP = '$id'";
		$categorymodel = $this->load->model('categorymodel');
		$data['categorybyid'] = $categorymodel->categorybyid($table,$cond);
		Session::init();
		$this->load->view('admin/header');
		//$this->load->view('admin/menu');
		$this->load->view('admin/product/edit_category',$data);
		$this->load->view('admin/footer');

	}
	
	public function update_category($id){
		
		$cond = "tbl_category_product.idCP = '$id'";
		$title = $_POST['titleCP'];
		$desc = $_POST['descCP'];
		$table = "tbl_category_product";
		$data = array(
			'titelCP'=> $title,
			'destCP'=> $desc
		);


		$categorymodel = $this->load->model('categorymodel');
		$result = $categorymodel->updatecategory($table,$data,$cond);

		if($result==1){
			$message['msg'] = "Cập nhật danh mục sản phẩm thành công";
			header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Cập nhật danh mục sản phẩm thất bại";
			header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));

		}
	}
	public function list_category(){
			$this->load->view('admin/header');
			$this->load->view('admin/menu');

			$table = "tbl_category_product";

			$categorymodel = $this->load->model('categorymodel');
			$data['category'] = $categorymodel->category($table);

			$this->load->view('admin/product/list_category',$data);
			$this->load->view('admin/footer');	
		}
	//pro

	public function add_product(){
		Session::init();
		$this->load->view('admin/header');
		//$this->load->view('admin/menu');

		$table = "tbl_category_product";
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category($table);

		$this->load->view('admin/product/add_product',$data);
		$this->load->view('admin/footer');
	}

	public function insert_product(){
		$title = $_POST['title_product'];
		$desc = $_POST['desc_product'];
		$price = $_POST['price_product'];
		$hot = $_POST['product_hot'];
		$quantity = $_POST['quantity_product'];
		$image = $_FILES['image_product']['name'];
		$tmp_image = $_FILES['image_product']['tmp_name'];
		$div = explode('.',$image);
		$file_ext = strtolower(end($div));
		$unique_image = $div[0].time().'.'.$file_ext;
		$path_uploads = "public/uploads/product/".$unique_image;
		$category = $_POST['category_product'];
		$table = "tbl_product";
		$data = array(
			'title_product'=> $title,
			'desc_product'=> $desc,
			'price_product'=>$price,
			'product_hot'=> $hot,
			'quantity_product'=> $quantity,
			'image'=>$unique_image,
			'idCP'=>$category
		);
		$categorymodel = $this->load->model('categorymodel');
		$result = $categorymodel->insertproduct($table,$data);
		if($result==1){
			move_uploaded_file($tmp_image,$path_uploads);

			$message['msg'] = "Thêm sản phẩm thành công";
			header('Location:'.BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Thêm sản phẩm thất bại";
			header('Location:'.BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));

		}
		}	
		public function list_product(){
		$this->load->view('admin/header');
		//$this->load->view('admin/menu');

		$table_product = "tbl_product";
		$table_category = "tbl_category_product";

		$categorymodel = $this->load->model('categorymodel');
		$data['product'] = $categorymodel->product($table_product,$table_category);
		$this->load->view('admin/product/list_product',$data);
		$this->load->view('admin/footer');
	}

	public function delete_product($id){
		$table = "tbl_product";
		
		$cond = "tbl_product.id_product = '$id'";
		$categorymodel = $this->load->model('categorymodel');
		$result = $categorymodel->deleteproduct($table,$cond);
		if($result==1){
			$message['msg'] = "Xóa sản phẩm thành công";
			header('Location:'.BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Xóa sản phẩm thất bại";
			header('Location:'.BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));

		}

	}
		public function edit_product($id){
		$table_category = "tbl_category_product";
		$table = "tbl_product";
		$cond = "tbl_product.id_product = '$id'";
		$categorymodel = $this->load->model('categorymodel');
		$data['productbyid'] = $categorymodel->productbyid($table,$cond);
		$data['category'] = $categorymodel->category($table_category);
		Session::init();
		$this->load->view('admin/header');
		//$this->load->view('admin/menu');
		$this->load->view('admin/product/edit_product',$data);
		$this->load->view('admin/footer');

	}


		public function update_product($id){

		$table = "tbl_product";
		$categorymodel = $this->load->model('categorymodel');
		$cond = "tbl_product.id_product = '$id'";
		$hot = $_POST['product_hot'];
		$title = $_POST['title_product'];
		$desc = $_POST['desc_product'];
		$price = $_POST['price_product'];
		$quantity = $_POST['quantity_product'];
		$image = $_FILES['image_product']['name'];
		$category = $_POST['category_product'];

		$tmp_image = $_FILES['image_product']['tmp_name'];
		$div = explode('.',$image);
		$file_ext = strtolower(end($div));
		$unique_image = $div[0].time().'.'.$file_ext;
		$path_uploads = "public/uploads/product/".$unique_image;
			if($image){
				$data['productbyid'] = $categorymodel->productbyid($table,$cond);
				foreach ($data['productbyid'] as $key => $value) {
					$path_unlink = "public/uploads/product/";
					unlink($path_unlink.$value['image']);
				}
			
			$data = array(
			'title_product'=> $title,
			'desc_product'=> $desc,
			'price_product'=>$price,
			'quantity_product'=> $quantity,
			'product_hot'=>$hot,
			'image'=>$unique_image,
			'idCP'=>$category
		);
			move_uploaded_file($tmp_image,$path_uploads);
		}else{
			$data = array(
			'title_product'=> $title,
			'desc_product'=> $desc,
			'price_product'=>$price,
			'quantity_product'=> $quantity,
			'product_hot'=>$hot,
			//'image'=>$unique_image,
			'idCP'=>$category
		);

		}
		
	

		$result = $categorymodel->updateproduct($table,$data,$cond);
		if($result==1){

			$message['msg'] = "Cập nhật sản phẩm thành công";
			header('Location:'.BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Cập nhật sản phẩm thất bại";
			header('Location:'.BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));

		}
	}
}



?>