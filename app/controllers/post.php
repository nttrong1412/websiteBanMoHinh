<?php

class post extends DController{
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
		$this->load->view('admin/post/add_category');
		$this->load->view('admin/footer');
	}
	public function insert_category(){
		$title = $_POST['title_category_post'];
		$desc = $_POST['desc_category_post'];
		$table = "tbl_category_post";
		$data = array(
			'title_Cpost'=> $title,
			'desc_Cpost'=> $desc
		);
		$categorymodel = $this->load->model('categorymodel');
		$result = $categorymodel->insertcategory_post($table,$data);
		if($result==1){
			$message['msg'] = "Thêm danh mục bài viết thành công";
			header('Location:'.BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Thêm sản danh mục bài viết thất bại";
			header('Location:'.BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));

		}
		}	
		

	public function delete_category($id){
		$table = "tbl_category_post";
		
		$cond = "id_Cpost = '$id'";
		$categorymodel = $this->load->model('categorymodel');
		$result = $categorymodel->deletecategory_post($table,$cond);
		if($result==1){
			$message['msg'] = "Xóa danh mục bài viết thành công";
			header('Location:'.BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Xóa danh mục bài viết thất bại";
			header('Location:'.BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));

		}

	}
	public function edit_category($id){
		$table = "tbl_category_post";
		$cond = "id_Cpost = '$id'";
		$categorymodel = $this->load->model('categorymodel');
		$data['categorybyid_post'] = $categorymodel->categorybyid_post($table,$cond);
		Session::init();
		$this->load->view('admin/header');
		//$this->load->view('admin/menu');
		$this->load->view('admin/post/edit_category',$data);
		$this->load->view('admin/footer');

	}
	
	public function update_category($id){
		
		$cond = "id_Cpost = '$id'";
		$title = $_POST['title_category_post'];
		$desc = $_POST['desc_category_post'];
		$table = "tbl_category_post";
		$data = array(
			'title_Cpost'=> $title,
			'desc_Cpost'=> $desc
		);


		$categorymodel = $this->load->model('categorymodel');
		$result = $categorymodel->updatecategory_post($table,$data,$cond);

		if($result==1){
			$message['msg'] = "Cập nhật danh mục bài viết thành công";
			header('Location:'.BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Cập nhật danh mục bài viết thất bại";
			header('Location:'.BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));

		}
	}
	public function list_category(){
			$this->load->view('admin/header');
			//$this->load->view('admin/menu');

			$table = "tbl_category_post";

			$categorymodel = $this->load->model('categorymodel');
			$data['category'] = $categorymodel->post_category($table);
			$this->load->view('admin/post/list_category',$data);
			$this->load->view('admin/footer');	
		}
//post
	public function add_post(){
		$this->load->view('admin/header');
		//$this->load->view('admin/menu');

		$table = "tbl_category_post";
		$postmodel = $this->load->model('postmodel');
		$data['category'] = $postmodel->category_post($table);


		$this->load->view('admin/post/add_post',$data);
		$this->load->view('admin/footer');
	}
	public function insert_post(){
		$title = $_POST['title_post'];
		$content = $_POST['content_post'];
		$image = $_FILES['image_post']['name'];
		$tmp_image = $_FILES['image_post']['tmp_name'];
		$div = explode('.',$image);
		$file_ext = strtolower(end($div));
		$unique_image = $div[0].time().'.'.$file_ext;
		$path_uploads = "public/uploads/post/".$unique_image;
		$category = $_POST['category_post'];
		$table = "tbl_post";
		$data = array(
			'title_post'=> $title,
			'content_post'=> $content,
			'image_post'=>$unique_image,
			'id_Cpost'=>$category
		);
		$postmodel = $this->load->model('postmodel');
		$result = $postmodel->insertpost($table,$data);
		if($result==1){
			move_uploaded_file($tmp_image,$path_uploads);

			$message['msg'] = "Thêm bài viết thành công";
			header('Location:'.BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Thêm bài viết thất bại";
			header('Location:'.BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));

		}
		}
		public function list_post(){
			Session::init();
		$this->load->view('admin/header');
		//$this->load->view('admin/menu');

		$table_post = "tbl_post";
		$table_category = "tbl_category_post";

		$postmodel = $this->load->model('postmodel');
		$data['post'] = $postmodel->post($table_post,$table_category);

		$this->load->view('admin/post/list_post',$data);
		$this->load->view('admin/footer');
	}	
	 public function delete_post($id){
	 	$table = "tbl_post";
		
		$cond = "tbl_post.id_post = '$id'";
		$postmodel = $this->load->model('postmodel');
		$result = $postmodel->deletepost($table,$cond);
		if($result==1){
			$message['msg'] = "Xóa bài viết thành công";
			header('Location:'.BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Xóa bài viết thất bại";
			header('Location:'.BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
	 }
	}
	// 
	public function edit_post($id){
			$this->load->view('admin/header');
			$this->load->view('admin/menu');
			$cond = "id_post='$id'";
			$postmodel = $this->load->model('postmodel');
			$table = "tbl_category_post";
			$table_post = "tbl_post";

			$data['category'] = $postmodel->category_post($table);
			$data['postbyid'] = $postmodel->postbyid($table_post,$cond);

			$this->load->view('admin/post/edit_post',$data);
			$this->load->view('admin/footer');	
		}
		public function update_post($id){
			$table = "tbl_post";
			$cond = "id_post='$id'";
			$postmodel = $this->load->model('postmodel');


			$title = $_POST['title_post'];
			$content = $_POST['content_post'];
			$category = $_POST['category_post'];
			$image = $_FILES['image_post']['name'];

			$tmp_image = $_FILES['image_post']['tmp_name'];
			$div = explode('.', $image);
			$file_ext = strtolower(end($div));
			$unique_image = $div[0].time().'.'.$file_ext;
			$path_uploads = "public/uploads/post/".$unique_image;
			
			if($image){
				$data['postbyid'] = $postmodel->postbyid($table,$cond);
				foreach ($data['postbyid'] as $key => $value) {
					$path_unlink = "public/uploads/post/";
					unlink($path_unlink.$value['image_post']);
				}
				$data = array(
					'title_post' => $title,
					'content_post' => $content,
					'image_post' => $unique_image,
					'id_Cpost' => $category
				);
				move_uploaded_file($tmp_image, $path_uploads);
			}else{
				$data = array(
					'title_post' => $title,
					'content_post' => $content,
					//'image_post' => $unique_image,
					'id_Cpost' => $category
				);	
			}

			$result = $postmodel->updatepost($table,$data,$cond);

			if($result==1){
				$message['msg'] = "Cập nhật bài viết thành công";
				header('Location:'.BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
			}else{
				$message['msg'] = "Cập nhật bài viết thất bại";
				header('Location:'.BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
			}
		}


	
}
?>