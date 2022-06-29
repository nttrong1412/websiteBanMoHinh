   
<!DOCTYPE html>
<html lang="en-CA">

<head>
    <title>đồ án</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="cleartype" content="on" />
    <link rel="icon" href="template/Default/img/favicon.ico" type="image/x-icon" />
    <meta name="Description" content="" />
    <meta name="Keywords" content="" />
    
    <meta property='og:title' name="title" content='' />
    <meta property='og:url' content='' />
    <meta property='og:image' content='' />
    <meta property='og:description' itemprop='description' name="description" content='' />
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/public/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/public/css/owl.theme.default.min.css">
     <link rel="stylesheet" href="<?php echo BASE_URL?>/public/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/public/css/product.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/public/css/style.css">
    
</head>

<body>

<header style="position:relative;">
    <div id="header-top">
        <div class="icon-user" >
              
               <?php
                    if(Session::get('customer')==true){
                            ?> 
                     <a href='<?php echo BASE_URL ?>/khachhang/dangxuat'><i style="color: #777;" class="fa fa-user" aria-hidden="true"></i> Đăng xuất</a>
                     <?php 
                        }else {
                         ?>   
                        <a href='<?php echo BASE_URL ?>/khachhang/dangnhap'><i style="color: #777;" class="fa fa-user" aria-hidden="true"></i> Đăng nhập</a>
                     <?php 
                        }
                        ?>
        </div>
    </div>
    <div id="header-main">
        <div class="header-flex">
            <div class="header-center">
                <div class="logo">
                   <a href="<?php echo BASE_URL?>"><img src="<?php echo BASE_URL?>/public/images/logo.png" /></a>
                   

                </div>
            </div>
            <div class=".header-edit-1">
                <div class="header-edit-con">
                    <div class="header-left">
                        <form  class="search_form"  action="<?php echo BASE_URL ?>/sanpham/search/" method="POST">
                                <input class="searchTerm" name="tukhoa" placeholder="Nhập từ cần tìm..." />
                                <button  name="timkiem" class="searchButton" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            
                            </form>
                    </div>
                    <div class="header-right" >
                        
                        <i width="36" height="36" class="fa fa-volume-control-phone" aria-hidden="true"></i>
                        <a href="<?php echo BASE_URL?>/giohang">
                        <img src="<?php echo BASE_URL?>/public/images/cart.png" width="36" height="36"></a>                  
                    </div>
                </div>
            </div>
            <div class="header-edit-brand" style="background:#eeee">
                      <ul>
                        
                        
                        
                        <li><a href="#"><img src="<?php echo BASE_URL?>/public/images/1.jpg"></a></li>
                        
                        
                        
                        <li><a href="<?php echo BASE_URL ?>/sanpham/danhmuc/5"><img src="<?php echo BASE_URL?>/public/images/2.jpg"></a></li>
                        
                        
                        
                        <li><a href="<?php echo BASE_URL ?>/sanpham/danhmuc/5"><img src="<?php echo BASE_URL?>/public/images/3.jpg"></a></li>
                        
                        
                        
                        <li><a href="#"><img src="<?php echo BASE_URL?>/public/images/4.jpg"></a></li>
                        
                        
                        
                        <li><a href="#"><img src="<?php echo BASE_URL?>/public/images/5.jpg"></a></li>
                      </ul>
                    </div>
        </div>
    </div>
    <div class="clear"></div>
</header>
<style type="text/css">
    body{
        background: #EEEEEE;
    }
    #header-top{
        height:40px;
        background-color: #333;
    }
    #header-top > .icon-user{
        float: right;display: flex;padding-top: 10px;
    }
    #header-top > .icon-user a{
        color: #777;
        font-size: 16px;font-weight: 40px;
        margin-right: 150px;
    }
</style>
<style type="text/css">
.header-right{
    padding-right: 30px;
}
.header-right i{
    padding-right: 30px;
}
.header-left{
    padding: 30px;

}
.header-edit-brand ul li {
    display: inline-block;
    padding-right: 20px;
s}
.header-edit-brand ul {
    list-style-type: none;
    display: flex;
}
.header-edit-brand {
    display: flex;
    justify-content: flex-end;
    background-color: white;
    height: 75px;
}
    .search_form .searchTerm{
    width: 400px;
    padding: 0 15px 0 15px;
    font-size: 13px;
    height: 38px;
    outline: none;
    }
    #header-main{
    position: relative;
    max-width: 1280px;
    width: 100%;
    margin: 0 auto;
    padding-left: 50px;
    padding-right: 50px;
    }
    .header-main .header-flex .header-left {
    padding: 10px 20px;
    background-color: #ffffff00;
}
   .header-main .header-flex {
    display: flex;
    background-color: white;
    justify-content: center;
    height: 75px;
}

.header-edit-con {
    display: flex;
    align-items: center;
    height: 100%;
    justify-content: flex-end;
}
.header-edit-1 {
    flex: 1;
}
.header-main .header-flex .header-center {
    display: block;
    width: 30%;
    text-align: center;
    padding-left: 0;
    padding-right: 0;
    padding: 18px;
}
.header-main .header-flex .header-center .logo {
    margin: 5px;
}
.logo img {
    max-width: 330px;
    width: 100%;
    max-height: 100px;
    min-width: 128px;
    height: auto;
}
</style>
 <style type="text/css">
@media (max-width: 1199px){
  .content_page .wrapper_all_main_right {
     width:100 %;
}  
}
@media (max-width: 740px){
    .floatleft input{
        margin-left: 165px;
    }
    #danhmuc{
        display: none;
    }
        header .logo a img {
    position: absolute;
    top: 0;
        left: 0;
    }
    .header-right{
        display: none;
    }
    form.search_form {
    position: absolute;
    left: 20px;
    top: 150px;
}

#header-top{
    display: none;
}
#header-main .header-edit-brand {
    display: none;
}
form.search_form .searchTerm{
    width: 89%;
}
.searchButton{
        right: 44px;
}
.img-header{
    display: none;
}
header{
    margin-bottom: 150px;
}
div #cssmenu #menu-button:after {
    position: absolute;
    top: 22px;
    right: 17px;
    display: block;
    height: 10px;
    width: 30px;
    border-top: 3.1px solid #fff;
    border-bottom: 3.1px solid #fff;
    content: '';
}
.dathang input.btn.btn-success.btn-sm{
    max-width: 90%;
    margin: 0 auto;
    
}
#nav .menu-margin{
    width: 100%;
}
.tab_link{
    display: none;
}
#dathangchitiet{
        margin-left: -130px;
}
#giohangmin{
    display: none;
}
#thongtin{
    width: 80%;
}
#thongtin h1{
    margin-left: -35px;
}
.container_table.table>tfoot>tr>td{
    text-align: center;
}
#nav #cssmenu ul ul li a{
    opacity: 1.0;
    font-size: 15px;
}
.img-list{
    width: 100%;
    margin: auto;
    display: block;
}
.content-list-in{
    display: none;
}
.content-list {
    width: 100%;
    float: left;
    padding-top: 176px;
}
.content-list >.content-list-in,.lists .xt, a.btn_df.btn_table.floatleft{
    display: none;
}
.lists .content-list {
    padding: 11px;
    height: auto;
}
#content .contact-conten .contact-info{
    width: 100%;
}
#content .contact-conten .contact-form{
    display:none ;
}

}
@media (min-width: 769px) and (max-width: 1024px){
    #danhmuc{
        display: none;
    }
    .img1> .img-header img {
    max-width: 84px;
    }
    .wrapper_all_main>.wrapper_all_main_right{
        width: 100%;
    }
    #footer .col-lg-4 .widget{
        width: 32%;
    }
    .map {

    width: 31%;
    float: right;
}
.name-pro-right a h3 {
    font-size: 13px;
}
}
</style>
<style type="text/css">
    .img-header img{
        max-width: 125px;
        max-height: 50px;
    }
    .img-header{
        max-width: 100%;
    }

</style>