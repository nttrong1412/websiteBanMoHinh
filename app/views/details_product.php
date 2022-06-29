
<?php
   foreach($details_product as $key =>$value){
      $name_product = $value['title_product'];
      $name_category_product = $value['titelCP'];
      $id_cate = $value['idCP'];
   
   }
   ?>
<section style="position: relative;">
   <?php
      foreach($details_product as $key =>$details){
      ?>
                  <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="POST">
                  <input type="hidden" value="<?php echo $details['id_product'] ?>" name="product_id">
                  <input type="hidden" value="<?php echo $details['title_product'] ?>" name="product_title">
                  <input type="hidden" value="<?php echo $details['image'] ?>" name="product_image">
                  <input type="hidden" value="<?php echo $details['price_product'] ?>" name="product_price">  
                  <input type="hidden" value="<?php echo $details['quantity_product'] ?>" name="product_quantity">
              
   <div class="bg_in">
      <div class="wrapper_all_main">
         <div id="dttt" class="wrapper_all_main_right no-padding-left" style="width:100%;">
            <div class="breadcrumbs">
               <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a itemprop="item" href="<?php echo BASE_URL?>">
                     <span itemprop="name">Trang chủ</span></a>
                     <meta itemprop="position" content="1" />
                  </li>
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a itemprop="item" href="<?php echo BASE_URL?>/sanpham/danhmuc/<?php echo $id_cate ?>">
                     <span itemprop="name"><?php echo $name_category_product ?></span></a>
                     <meta itemprop="position" content="2" />
                  </li>
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <span itemprop="item">
                     <strong itemprop="name">
                     <?php echo $name_product ?>
                     </strong>
                     </span>
                     <meta itemprop="position" content="3" />
                  </li>
               </ol>
            </div>
            <div class="content_page">
               <div class="content-right-items margin0">
                
                  <div class="slider-galery ">
                     <div id="sync1" class="owl-carousel owl-theme">
                        <div class="item">
                           <img src="<?php echo BASE_URL?>/public/uploads/product/<?php echo $details['image'] ?>" width="100%">
                        </div>
                      
                     </div>
                     <div id="sync2" class="owl-carousel owl-theme">
                    
                         <div class="item">
                           <img src="<?php echo BASE_URL?>/public/uploads/product/<?php echo $details['image'] ?>" width="100%">
                        </div>
                     </div>
                  </div>
                  <div class="content-des-pro" style="padding-left: 60px;">
                     <div class="content-des-pro_in">
                        <div class="pro-des-sum">
                           <div class="price">
                              
                              <div class="title-pro-des-ct" style="text-align: center;">
                                 <b><h1 style="color: blue;font-weight: 600; "> <?php echo $name_product ?></h1></b> 
                              </div>
                              <div class="status_pro">
                                 <span><b>Trạng thái:</b>  Còn hàng</span>
                              </div>
                              <div class="status_pro"><span><b>Xuất xứ:</b>  Việt Nam</span></div>
                           </div>
                           <div class="color_price">
                              <span style="color:blue" class="">Giá bán :</span> <?php echo number_format($details['price_product'],0,',','.')?> <span>vnđ</span>
                              <div class="clear"></div>
                           </div>
                        </div>
                        <div class="clear"></div>
                     </div>
                     <div class="content-pro-des">
                        <div class="content_des">
                           <?php echo $details['desc_product'] ?>
                        </div>
                     </div>
                     <h4 style="margin: 10px;">🏠 Địa chỉ: Núi Thành ,Đà Nẵng</h4>
                     <h4 style="margin:10px">🚛 Ship COD toàn quốc, thanh toán khi nhận hàng.</h4>
                     <div style="    background: #b30303;
                                     color: white;
                                     text-align: center;
                                     padding: 10px;
                                     font-size: 20px;
                                     margin-bottom: 10px;"  
                         class="hotline">Hotline: 0949.213.792</div>
                     <div style="margin-left: 100px;" class="ct">
                        <td data-th="Số lượng">
                                    <div class="clear margintop5">
                                       <div class="floatleft">

                                       <input type="number" min="1" class="inputsoluong" name="product_quantity"  value="1"></div>

                                    </div>
                 
                        <div class="wp_a">
                           <div style="float:left; width:120px;">
                            <input id="dathangchitiet" type="submit" style="box-shadow:none;height: 40px;background: #00CCFF;border: none;"  name="addcart" value="Đặt hàng">
                           </div>
                          
                           <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                     </div>
                     <div class="tags_products prodcut_detail">
                        <div class="tab_link">
                           <h3 class="title_tab_link">TAGS: </h3>
                           <div class="content_tab_link"> <a href="tag/"></a></div>
                        </div>
                     </div>
                  </div>
                  <div id="danhmuc" style="position: absolute;top: 42px ;right: 76px; width: 20%;border: 1px dashed #ffd700;padding: 10px; text-align: center;">
                     <h3 style="font-size: 16px;font-weight: 500;text-transform: uppercase">Danh mục sản phẩm</h3>
                      <ul style="text-align: left;">
                         <li style="margin-top:20px;margin-left: 10px;font-size: 16px;"><a href='<?php echo BASE_URL?>/sanpham/tatca'><i style="color: #00abff; padding-right: 10px;" class="fa fa-circle" aria-hidden="true"></i>Tất cả sản phẩm</a></li>
                           <?php
                              foreach($category as $key => $cate){
                              ?>
                           <li style="margin-top:20px;margin-left: 10px;font-size: 16px;">
                              <a href='<?php echo BASE_URL?>/sanpham/danhmuc/<?php echo $cate['idCP'] ?>'><i style="color: #00abff; padding-right: 10px;" class="fa fa-circle" aria-hidden="true"></i>
                              <span> <?php echo $cate['titelCP'] ?></span></a>
                           </li>
                           <?php
                              }
                              ?>
                        </ul>

                  </div>
                  <style type="text/css">
                     #danhmuc a:hover{
                        color: #337ab7;
                     }
                        #danhmuc a{
                        font-weight: 450;
                     }
                     
                  </style>
       
            </div>
         </div>
         <div id="rp" class="wrapper_all_main_right">
            <div class="clear"></div>
            <div class="clear"></div>
            <div class="dmsub">
               <div class="tags_products desktop">
                  <div class="tab_link">
                     <h3 class="title_tab_link">TAGS: </h3>
                     <div class="content_tab_link"> 
                        <a href="#">Mô hình đồ chơi</a>
                        <a href="#">Mô hình manga</a>
                        <a href="#">manga</a>
                        <a href="#">Mô hình 3D</a>
                     </div>
                  </div>
               </div>
            </div>
         </form>
             <?php
            }
            ?>
            <div class="module_pro_all">
               <div class="box-title">
                  <div class="title-bar">
                     <h3>Sản phẩm liên quan</h3>
                  </div>
               </div>
               <div class="pro_all_gird">
                  <div class="girds_all list_all_other_page ">
                     <?php
                        foreach($related as $key =>$relate){
                     ?>
                     <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="POST">
                
                <input type="hidden" value="<?php echo $product['id_product'] ?>" name="product_id">
                <input type="hidden" value="<?php echo $product['title_product'] ?>" name="product_title">
                <input type="hidden" value="<?php echo $product['image'] ?>" name="product_image">
                <input type="hidden" value="<?php echo $product['price_product'] ?>" name="product_price">  
                <input type="hidden" value="1" name="product_quantity">
                     <div class="grids">
                        <div class="grids_in">
                           <div class="content">
                              <div class="img-right-pro">
                                 <a href="#" style="background:#eeee">
                                 <img class="lazy img-pro content-image" src="<?php echo BASE_URL?>/public/uploads/product/<?php echo $relate['image'] ?>"  />
                                 </a>
                                 <div class="content-overlay"></div>
                                 <div class="content-details fadeIn-top">
                                    <ul class="details-product-overlay">
                                      <?php echo $relate['desc_product'] ?>
                                    </ul>
                                 </div>
                              </div>
                              <div class="name-pro-right">
                                 <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $relate['id_product'] ?>">
                                    <h3><?php echo $relate['title_product'] ?></h3>
                                 </a>
                              </div>
                               <div class="dathang">
                        <input  type="submit" style="box-shadow:none;" class="btn btn-success btn-sm mtl-35" name="addcart" value="Đặt hàng">
                     </div>
                              <div class="price_old_new">
                                 <div class="price">
                                    <span  class="news_price mtl-35"><?php echo number_format($relate['price_product'],0,',','.').'đ' ?></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                     <?php
                     }
                     ?>
                     <div class="clear"></div>
                  </div>
                  <div class="clear"></div>
               </div>
               <div class="clear"></div>
            </div>
         </div>
         <!--end:left-->
         <div class="clear"></div>
      </div>
      <div class="clear"></div>
   </div>
  
   <script>
      jQuery(document).ready(function() {
      
      
      
          var div_fixed = jQuery('.product_detail_info').offset().top;
      
          jQuery(window).scroll(function() {
      
              if (jQuery(window).scrollTop() > div_fixed) {
      
                  jQuery('.tabs-animation').addClass('fix_top');
      
              } else {
      
                  jQuery('.tabs-animation').removeClass('fix_top');
      
              }
      
          });
      
          jQuery(window).load(function() {
      
              if (jQuery(window).scrollTop() > div_fixed) {
      
                  jQuery('.tabs-animation').addClass('fix_top');
      
              }
      
          });
      
      });
      
   </script>
</section>
 <div class="clear"></div>
 <style type="text/css">
 @media (max-width: 1199px){
    #rp {
    width: 100%;
}}
 </style>
 <style type="text/css">
      input.btn.btn-success.btn-sm {
   height: 46px;
   border-radius: 5px;
   max-width: 90%;
   margin: 0 auto;
   display: block;
   border: none;
   font-size: 15px;
   }
 
   a.read_more {
   height: 28px;
   }
   span.news_price {
    padding-left: 35px;
}
   .price_old_new{
      border: none;
   }
   .grids_in {
    padding-bottom: 10px;
}
   .content-details.fadeIn-top {
       color: white;}

</style>