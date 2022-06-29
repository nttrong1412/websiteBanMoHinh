
<section>
   <div id="nav" style="width: 100%;margin-bottom: 20px; max-height: 54px;position: block;" >
               <div id='cssmenu' style="display: flex;background-color: #b30303;justify-content: center;">
                  <ul>
                     <li ><a href='<?php echo BASE_URL?>'>Trang chủ</a></li>
                     <li class=''><a href='<?php echo BASE_URL?>/index/gioithieu'>Giới thiệu</a></li>
                     <li class=''>
                        <a href='<?php echo BASE_URL?>/sanpham/tatca'>Sản phẩm</a>
                        <ul>
                           <?php
                              foreach($category as $key => $cate){
                              ?>
                           <li>
                              <a href='<?php echo BASE_URL?>/sanpham/danhmuc/<?php echo $cate['idCP'] ?>'><span><?php echo $cate['titelCP'] ?></span></a>
                           </li>
                           <?php
                              }
                              ?>
                        </ul>
                     </li>
                     <li class=''>
                        <a href='<?php echo BASE_URL?>/tintuc/tatca'>Tin tức</a>
                        <ul>
                           <?php
                              foreach($category_post as $key => $cate){
                              ?>
                           <li>
                              <a href='<?php echo BASE_URL?>/tintuc/danhmuc/<?php echo $cate['id_Cpost'] ?>'><span><?php echo $cate['title_Cpost'] ?></span></a>
                           </li>
                           <?php
                              }
                              ?>
                        </ul>
                     </li>
                     <li class=''><a href='<?php echo BASE_URL?>/giohang'>Giỏ hàng</a></li>
                     <?php
                        if(Session::get('customer')==true){
                            ?> 
                     <li class=''><a href='<?php echo BASE_URL ?>/khachhang/dangxuat'>Đăng xuất</a></li>
                     <?php 
                        }else {
                         ?>   
                     <li class=''><a href='<?php echo BASE_URL ?>/khachhang/dangnhap'>Tài khoản</a></li>
                     <?php 
                        }
                        ?>
                      <li class=''><a href='<?php echo BASE_URL?>/index/lienhe'>Liên hệ</a></li> 
                  </ul>
            
      </div>
   </div>
</section>
<style type="text/css">
   .btn_menu_search {
   width: 86.9%;
   /* border-radius: 5px; */
   background: #b30303;
   height: 54px;
   }
  
   #cssmenu > ul > li > a:after {
   content: none;
   }
   #cssmenu > ul > li > a:hover {
   color: #00CCFF;
   }
   #cssmenu > ul > li > a {
   padding: 20px 20px;
   font-weight: 700;
   }
    .navbar-fixed-top {
    background: #b30303;
    top: -60px;
    transition: top 800ms ease 0s;
    position: fixed;
    z-index: 9999;
   }
        .show {
            top: 0px;
        }

#cssmenu{
   width: 90%;
   margin: auto;
}
#cssmenu ul ul li a {
   width: 180px;
   height: 35px;
   background: rgb(179,3,3);
   border-bottom: 1px solid rgba(150, 150, 150, 0.25);
   padding-left: 30px;
   opacity: 0.9;
   display: flex;
   align-items: center;
   
}
#cssmenu ul ul li a:hover {
   color: #00CCFF;
}
#cssmenu > ul > li:hover > a{

   background: none;
}

</style>