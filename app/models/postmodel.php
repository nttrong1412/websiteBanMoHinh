<?php 
	
	class postmodel extends DModel{
		public function __construct(){
			parent::__construct();
		}

		public function category_post($table){
			$sql = "SELECT*FROM $table ORDER BY id_Cpost DESC"	;
			return $this->db->select($sql);
	
		}
	
		public function insertpost($table,$data){
			return $this->db->insert($table,$data);
			
		}
		public function post($table_post,$table_category){
			$sql = "SELECT*FROM $table_post,$table_category WHERE $table_post.id_Cpost = $table_category.id_Cpost  ORDER BY $table_post.id_post DESC"	;
			return $this->db->select($sql);
		}
		
		public function deletepost($table_post,$cond){
			return $this->db->delete($table_post,$cond);
		}
		public function list_post_home($post){
			$sql = "SELECT*FROM $post ORDER BY id_post DESC "	;
			return $this->db->select($sql);
		}
		public function postbyid($table,$cond){
			$sql = "SELECT*FROM $table WHERE $cond"	;
			return $this->db->select($sql);

		}
		public function updatepost($table,$data,$cond){
			return $this->db->update($table,$data,$cond);
		}

	}


?>