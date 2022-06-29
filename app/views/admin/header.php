<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="<?php echo BASE_URL  ?>/public/template/css/style.css">
	
	<title>Admin</title>
</head>
<body>
	<div class="container"> -->
		<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Sidebar Dashboard Template With Sub Menu</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
		<link rel="stylesheet" href="<?php echo BASE_URL  ?>/public/template/css/style.css">
		<link rel="stylesheet" href="<?php echo BASE_URL?>/public/admin/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	</head>
	<style type="text/css">
		a{
			font-size: 15px;
		}
		center {
    display: block;
    text-align: -webkit-center;
}
    
    
.wrapper .main-container{
	padding: 0px;
}
	</style>
	<body>


		<!--wrapper start-->
		<div class="wrapper">
			<!--header menu start-->
			<div class="header">
				<div class="header-menu">
					<div class="title"> <span>Mike Shop</span></div>
				<!-- 	<div class="sidebar-btn">
						<i class="fas fa-bars"></i>
					</div> -->
					<ul>
						<li><a href="#"><i class="fas fa-search"></i></a></li>
						<li><a href="#"><i class="fas fa-bell"></i></a></li>
						<li><a href="<?php echo BASE_URL ?>/login/logout"><i class="fas fa-power-off"></i></a></li>
					</ul>
				</div>
			</div>
			<!--header menu end-->
			<!--sidebar start-->
			<div class="sidebar">
				<div class="sidebar-menu">
					<center  class="profile">
						<img src="<?php echo BASE_URL?>/public/admin/1.jpg" alt="">
						<p style="font-size:16px;">Admin</p>
					</center>
					<!-- <li class="item">
						<a href="<?php echo BASE_URL ?>/login/dashboard" class="menu-btn">
							<i class="fas fa-desktop"></i><span>Dashboard</span>
						</a>
					</li> -->
					<li class="item">
						<a href="<?php echo BASE_URL ?>/login/list_customer" class="menu-btn">
							<i class="fas fa-users"></i><span>Quản lý người dùng</span>
						</a>
					</li>
					<li class="item" id="profile">
						<a href="#profile" class="menu-btn">
							<i class="fas fa-robot"></i><span>Sản Phẩm <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="<?php echo BASE_URL ?>/product"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Thêm Danh mục</span></a>
							<a href="<?php echo BASE_URL ?>/product/list_category"><i class="fa fa-list" aria-hidden="true"></i><span>Liệt kê danh mục</span></a>
							<a href="<?php echo BASE_URL ?>/product/add_product"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Thêm sản phẩm</span></a>
							<a href="<?php echo BASE_URL ?>/product/list_product"><i class="fa fa-list" aria-hidden="true"></i><span>Liệt kê sản phẩm</span></a>
						</div>
					</li>
					<li class="item" id="settings">
						<a href="#settings" class="menu-btn">
							<i class="far fa-newspaper"></i><span>Bài viết <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="<?php echo BASE_URL ?>/post"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Thêm danh mục</span></a>
							<a href="<?php echo BASE_URL ?>/post/list_category"><i class="fa fa-list" aria-hidden="true"></i><span>Liệt kê danh mục</span></a>
							<a href="<?php echo BASE_URL ?>/post/add_post"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Thêm bài viết</span></a>
							<a href="<?php echo BASE_URL ?>/post/list_post"><i class="fa fa-list" aria-hidden="true"></i><span>Liệt kê bài viết</span></a>
							
						</div>
					</li>
					<li class="item" id="messages">
						<a href="#messages" class="menu-btn">
							<i class="fas fa-truck"></i><span>Đơn hàng <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="<?php echo BASE_URL ?>/order"><i class="fa fa-list" aria-hidden="true"></i><span>Liệt kê đơn hàng</span></a>
						</div>
					</li>

				<!-- 	<li class="item">
						<a href="#" class="menu-btn">
							<i class="fas fa-cogs"></i><span>Setting</span>
						</a>
					</li>
					<li class="item">
						<a href="#" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>About</span>
						</a>
					</li> -->
				</div>
			</div>
			<!--sidebar end-->
			<!--main container start-->
			<div style="background: #f8f9fa;" class="main-container">
				
			<!--main container end-->

	
