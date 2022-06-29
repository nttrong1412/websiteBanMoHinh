<?php 
	
	class categorymodel extends DModel{
		public function __construct(){
			parent::__construct();
		}


		public function category($table){
			$sql = "SELECT*FROM $table ORDER BY idCP DESC"	;
			return $this->db->select($sql);
	
		}
		public function category_home($table){
			$sql = "SELECT*FROM $table ORDER BY idCP DESC"	;
			return $this->db->select($sql);
	
		}
		public function categorybyid_home($table,$table_product,$id){
			$sql = "SELECT*FROM $table,$table_product WHERE $table.idCP = $table_product.idCP AND $table_product.idCP ='$id' ORDER BY id_product DESC"	;
			return $this->db->select($sql);
		}
 
		public function categorybyid($table,$cond){
			$sql = "SELECT*FROM $table WHERE $cond"	;
			return $this->db->select($sql);

		}
		public function insertcategory($table_category_product,$data){
			return $this->db->insert($table_category_product,$data);
			
		}

		public function updatecategory($table_category_product,$data,$cond){
			return $this->db->update($table_category_product,$data,$cond);
		}
		public function deletecategory($table_category_product,$cond){
			return $this->db->delete($table_category_product,$cond);
		}
		// post
		public function insertcategory_post($table,$data){
			return $this->db->insert($table,$data);
		}
		public function post_category($table){
			$sql = "SELECT*FROM $table ORDER BY id_Cpost DESC"	;
			return $this->db->select($sql);
		}
		public function categorypost_home($table){
			$sql = "SELECT*FROM $table ORDER BY id_Cpost DESC"	;
			return $this->db->select($sql);
		}
		public function postbyid_home($table_post,$post,$id){
			$sql = "SELECT*FROM $table_post,$post WHERE $table_post.id_Cpost = $post.id_Cpost AND $post.id_Cpost ='$id' ORDER BY id_post DESC"	;
			return $this->db->select($sql);
		}


		public function deletecategory_post($table,$cond){
			return $this->db->delete($table,$cond);

		}
		public function updatecategory_post($table,$data,$cond){
			return $this->db->update($table,$data,$cond);
		}
		public function categorybyid_post($table,$cond){
			$sql = "SELECT*FROM $table WHERE $cond"	;
			return $this->db->select($sql);

		}
		public function details_post_home($table_post,$post,$cond){
			$sql = "SELECT*FROM $table_post,$post WHERE $cond ORDER BY $post.id_post DESC"	;
			return $this->db->select($sql);
		}

		public function related_post_home($post,$table_post, $cond_related){
			$sql = "SELECT*FROM $table_post,$post WHERE $cond_related ORDER BY $post.id_post DESC LIMIT 4"	;
			return $this->db->select($sql);
		}

		//product
		public function product_hot($table_product){
			$sql = "SELECT*FROM $table_product WHERE product_hot = 1 ORDER BY $table_product.id_product DESC"	;
			return $this->db->select($sql);
		}
		public function product_hot_index($table_product){
			$sql = "SELECT*FROM $table_product WHERE product_hot = 1 ORDER BY $table_product.id_product DESC LIMIT 5"	;
			return $this->db->select($sql);
		}
		public function list_product_index($table_product){
			$sql = "SELECT*FROM $table_product ORDER BY $table_product.id_product DESC"	;
			return $this->db->select($sql);
		}
		public function list_product_home($table_product){
			$sql = "SELECT*FROM $table_product ORDER BY $table_product.id_product DESC"	;
			return $this->db->select($sql);
		}
			public function insertproduct($table,$data){
			return $this->db->insert($table,$data);
			
		}
		public function product($table_product,$table_category){
			$sql = "SELECT*FROM $table_product,$table_category WHERE $table_product.idCP = $table_category.idCP  ORDER BY $table_product.id_product DESC"	;
			return $this->db->select($sql);
	
		}
		public function deleteproduct($table,$cond){
			return $this->db->delete($table,$cond);
		}
		public function productbyid($table,$cond){
			$sql = "SELECT*FROM $table WHERE $cond"	;
			return $this->db->select($sql);

		}
		public function related_product_home($table,$table_product, $cond_related){
			$sql = "SELECT*FROM $table,$table_product WHERE $cond_related LIMIT 4"	;
			return $this->db->select($sql);

		}
		public function updateproduct($table,$data,$cond){
			return $this->db->update($table,$data,$cond);
		}
		public function details_product_home($table,$table_product, $cond){
			$sql = "SELECT*FROM $table_product,$table WHERE $cond"	;
			return $this->db->select($sql);
		}
		public function post_index($post){
			$sql = "SELECT * FROM $post ORDER BY id_post DESC LIMIT 5";
			return $this->db->select($sql);
		}

		public function search($table, $table_product, $cond){
			$sql = "SELECT * FROM $table,$table_product WHERE $cond";
			return $this->db->select($sql);
		}
		public function list_customer($table){
			$sql = "SELECT * FROM $table";
			return $this->db->select($sql);
		}
		public function delete_customer($table,$cond){
			return $this->db->delete($table,$cond);		
		}

	}


?>