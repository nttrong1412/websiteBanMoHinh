<?php 

	class login extends DController{
		
		public function __construct(){
			$message = array();
			$data = array();
			parent::__construct();
		}
		public function index(){
			$this->login();
		}
		public function login(){

			
			Session::init();
			if(Session::get("login")==true){
				header("Location:".BASE_URL."/login/dashboard");
			}
			$this->load->view('admin/login');
			

		}
		public function dashboard(){
			Session::checkSession();
			$this->load->view('admin/header');
			// $this->load->view('admin/menu');
			$this->load->view('admin/dashboard');
			$this->load->view('admin/footer');
		}
		public function authentication_login(){
			$username = $_POST['username'];
			$password = md5($_POST['password']);

			$table_admin = 'tbl_admin';
			$loginmodel = $this->load->model('loginmodel');

			$count = $loginmodel->login($table_admin,$username,$password);

			if($count==0){
				$message['msg'] = "User hoặc mật khẩu sai,xin kiểm tra lại";
				header("Location:".BASE_URL."/login");
			}else{

				$result = $loginmodel->getLogin($table_admin,$username,$password);
				Session::init();
				Session::set('login',true);
				Session::set('username',$result[0]['username']);
				Session::set('userid',$result[0]['admin_id']);

				header("Location:".BASE_URL."/login/dashboard");
			}

		}
		public function logout(){
			Session::init();
			// Session::destroy();
			unset($_SESSION['login']);
			header("Location:".BASE_URL."/login");
		}

		public function list_customer(){
			$this->load->view('admin/header');
			//$this->load->view('admin/menu');

			$table = "tbl_customers";

			$categorymodel = $this->load->model('categorymodel');
			$data['customer'] = $categorymodel->list_customer($table);

			$this->load->view('admin/list_customer',$data);
			$this->load->view('admin/footer');	
		}
		public function delete_customer($id){
		$table = "tbl_customers";
		
		$cond = "customer_id = '$id'";
		$categorymodel = $this->load->model('categorymodel');
		$result = $categorymodel->delete_customer($table,$cond);
		if($result==1){
			$message['msg'] = "Xóa tài khoản thành công";
			header('Location:'.BASE_URL."/login/list_customer?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Xóa tài khoản thất bại";
			header('Location:'.BASE_URL."login/list_customer?msg=".urlencode(serialize($message)));

		}

	}

	}


?>