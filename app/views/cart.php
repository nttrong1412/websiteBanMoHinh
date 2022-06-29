
  <section style="padding-top:20px">
    <?php
                  if(!empty($_GET['msg'])){
                     $msg = unserialize(urldecode($_GET['msg']));
                     foreach ($msg as $key => $value){
                        echo '<span style="margin-left:600px;text-aline:center ;color:blue;font-weight:bold">'.$value.'</span>';
                     }
                  }
                  ?> 
         <div class="bg_in">
            <div class="content_page cart_page">
               <div class="breadcrumbs">
                  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                     <li itemprop="itemListElement" itemscope
                        itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="<?php echo BASE_URL ?>">
                        <span itemprop="name">Trang chủ</span></a>
                        <meta itemprop="position" content="1" />
                     </li>
                     <li itemprop="itemListElement" itemscope
                        itemtype="http://schema.org/ListItem">
                        <span itemprop="item">
                        <strong itemprop="name">
                        Giỏ hàng
                        </strong>
                        </span>
                        <meta itemprop="position" content="2" />
                     </li>
                  </ol>
               </div>
               <div class="box-title">
                  <div class="title-bar">
                     <h1>Giỏ hàng của bạn</h1>
                  </div>
               </div>
              
               <div class="content_text">
                  <div class="container_table">
                     <table class="table table-hover table-condensed">
                        <thead>
                           <tr class="tr tr_first">
                              <th style="width:20px";></th>
                              <th >Hình ảnh</th>
                              <th>Tên sản phẩm</th>
                             
                              <th >Giá</th>
                              <th style="width:100px;">Số lượng</th>
                              <th>Thành tiền</th>
                              <th style="width:50px; text-align:center;"></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                                 if(isset($_SESSION['shopping_cart'])){
                           ?>
                           <form action="<?php echo BASE_URL ?>/giohang/updategiohang" method="POST">
                               <?php
                                    $total = 0;
                                    foreach($_SESSION['shopping_cart'] as $key => $value){
                                    $subtotal = $value['product_quantity']*$value['product_price'];
                                    $total+=$subtotal; 
                                 ?>
                           
                   

                                

                              <tr id="trr" class="tr">
                                   <td class="actions aligncenter">
                                   <button type="submit" style="background: none;"  value="<?php echo $value['product_id'] ?>" name="delete_cart" > <i class="fa fa-trash" aria-hidden="true" style="color:rgb(255,91,91);font-size: 24px;padding-left: 30px;"></i> </button>             
                                 </td>
                                 <td data-th="Hình ảnh">
                                    <div class="col_table_image col_table_hidden-xs"><img style="height: 120px;" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['product_image'] ?>" alt="<?php echo $value['product_title'] ?>" class="img-responsive"/></div>
                                 </td>
                                 <td data-th="Sản phẩm">
                                    <div class="col_table_name">
                                       <h4 class="nomargin"><?php echo $value['product_title'] ?></h4>
                                    </div>
                                 </td>
                              
                                 <td data-th="Giá"><span class="color_red font_money"><?php echo number_format($value['product_price'],0,',','.').'đ' ?></span></td>

                                 <td data-th="Số lượng">
                                    <div class="clear margintop5">
                                       <div class="floatleft">
                                       <input style="width: 50px;" type="number" min="1" class="inputsoluong" name="qty[<?php echo $value['product_id'] ?>]"  value="<?php echo $value['product_quantity'] ?>"></div>

                                    </div>
                                    <div class="clear"></div>
                                 </td>

                                 <td data-th="Thành tiền" class="text_center"><span class="color_red font_money"><?php echo number_format($subtotal,0,',','.').'đ' ?></span></td>

                                 <td class="actions aligncenter">
                                     <button type="submit" style="background: none;"  value="<?php echo $value['product_id'] ?>" name="update_cart" > <i class="fa fa-refresh" aria-hidden="true" style="color:#0087cc;font-size: 24px;padding-right: 30px;"></i> </button>  
                                                
                                 </td>

                              </tr>
                              <?php  
                              } 
                              ?>
                           </form>
                           <tr>
                              <td colspan="7" >
                                 <div class="sum_price_all">
                                    <span class="text_price">Tổng tiền thành toán</span>: 
                                    <span class="text_price color_red"><?php echo number_format($total,0,',','.').'đ' ?></span>
                                 </div>
                              </td>
                           </tr>
                           <?php 
                           }else{
                           ?>
                           <tr>
                              <td colspan="7">
                                 <div class="sum_price_all">
                                    <span class="text_price">Giỏ hàng trống</span>
                                 </div>
                              </td>
                           </tr>
                           <?php
                           } 
                           ?>
                        </tbody>
                     </table>
                     
                  </div>
                   <?php
                        if(Session::get('customer')==true){
                  ?> 
                  <div id="giohangmin">
                     <div  style="width: 40%;display: block;float: left;position: relative;">
                        <h1 style="padding: 20px;font-size: 20p;color: #777777;">Thông tin giỏ hàng</h1>
                                              
                           <?php
                           if(isset($_SESSION['shopping_cart'])){
                              foreach($_SESSION['shopping_cart'] as $key => $value){
                           ?>
                        <div class="giohangmini" style="display: flex;">
                           
                            <div style="position: relative;max-width: 64px;border-radius: 10px;max-height: 64px;padding: 5px;">
                              <div>
                              <img style="width: 62px;border-radius: 10px;height: 62px;" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['product_image'] ?>" alt="<?php echo $value['product_title'] ?>" class="img-responsive"/></div>
                              <span style="position:absolute;top: 0;right: 0;color: white;background: rgba(0,0,0,0.6);border-radius: 50%;    width: 20px;height: 20px;
                                 text-align: center; line-height: 20px; font-size: 14px;"><?php echo $value['product_quantity'] ?></span>
                              </div> 
                              <div style="display: flex; width: 70%;padding: 15px;">
                                 <h4 style="color: #777777;font-weight: 600;"><?php echo $value['product_title'] ?></h4>
                        
                              </div>
                              <div style="display:flex;padding: 15px;;">
                                 <span style="color: #777777;font-size: 15px;"><?php echo number_format($value['product_price'],0,',','.').'đ' ?></span>
                              </div>
                              </div>
                                <?php 
                              }
                              }
                           ?>
                           <?php
                           if(isset($_SESSION['shopping_cart'])){
                              
                           ?>
                              <div class="is-text-sm" style="font-size: 16px; margin-top: 20px; padding: 15px; border-bottom: 1px solid lightgray"><span style="color:#777777">Tạm tính:</span><span class="is-float-right pay-pay" style="text-transform: lowercase"><strong style="float: right;color: #777777;"><?php echo number_format($total,0,',','.').'đ' ?></strong></span></div>
                           <div class="pay-trant pdtb-10 is-text-sm" style="font-size: 16px; padding: 15px; border-bottom: 1px solid lightgray"><span style="color:#777777">Phí vận chuyển:</span><span class="is-float-right" style="text-transform: lowercase"><strong style="float: right;color: #777777;">Miễn phí giao hàng</strong></span></div>
                           <div class="pdtb-10 is-text-sm" style="font-size: 16px; padding: 15px; border-bottom: 1px solid lightgray"><span style="color:#777777">Thành tiền:</span><span class="is-float-right pay-pay" style="text-transform: lowercase"><strong style="float: right;color: #777777;"><?php echo number_format($total,0,',','.').'đ' ?></strong></span></div>
                           <div style="margin-top: 15px;font-size: 16px;color: #777777;">
                              <p>Hình thức thanh toán : </p>
                              <i style="display:inline;color: #00acff;" class="fa fa-check-circle" aria-hidden="true"></i><p style="display:inline;padding: 5px;">Thanh toán sau khi nhận hàng</p>

                              <!-- <img style="width: 100px;" src="<?php echo BASE_URL?>/public/images/visa.jpg">
                              <img style="width: 100px;" src="<?php echo BASE_URL?>/public/images/jcb.png">
                              <img style="width: 100px;" src="<?php echo BASE_URL?>/public/images/mastercar.jpg">
                               -->

                           </div>

                           <?php 
                              }
                           ?>
                     </div>

                     </div>

                     <style type="text/css">
                        .thongtinkh{
                           width:50%;
                        }
                        .thongtinkh h1{
                           padding: 20px;
                        }
                     </style>
                        
                     <div id="thongtin" class="thongtinkh" style="float: right;display: block;">
                        <h1 style="font-size: 20px;text-transform: uppercase;color: #777777;">Thông tin khách hàng</h1>
                        <div class="form_contact_in" >
                           <div class="box_contact">

                              <form name="FormDatHang" method="POST" autocomplete="off" action="<?php echo BASE_URL ?>/giohang/dathang">                               
                            
                                 <div class="content-box_contact">
                                    <div class="row">
                                       <div class="input">
                                          <label style="font-weight: 400; font-size: 16px;line-height: 22px; letter-spacing: 0;color: #777777;"  >Họ và tên: <span style="color:red;"></span></label>
                                          <input style="padding-left: 13px;border: 1px solid #d9d9d9;border-radius: 5px;height: 40px;font-size: 15px;margin-top: 5px;width: 80%;" type="text" name="name" required placeholder="Họ và tên" >
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                  
                                   <div class="row">
                                       <div class="input">
                                          <label style="font-weight: 400; font-size: 16px;line-height: 22px; letter-spacing: 0;color: #777777;"> Số điện thoại <span style="color:red;"></span></label>
                                          <input style="padding-left: 13px;border: 1px solid #d9d9d9;border-radius: 5px;height: 40px;font-size: 15px;margin-top: 5px;width: 80%;"type="text" name="sodienthoai" required placeholder="Số điện thoại" >
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                   
                                    <div class="row">
                                       <div class="input">
                                          <label style="font-weight: 400; font-size: 16px;line-height: 22px; letter-spacing: 0;color: #777777;">Địa chỉ <span style="color:red;"></span></label>
                                          <input style="padding-left: 13px;border: 1px solid #d9d9d9;border-radius: 5px;height: 40px;font-size: 15px;margin-top: 5px;width: 80%;" type="text" name="diachi" required class="clsip" placeholder="Địa chỉ">
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                
                                    <div class="row">
                                       <div class="input">
                                          <label style="font-weight: 400; font-size: 16px;line-height: 22px; letter-spacing: 0;color: #777777;">Email <span style="color:red;"></span></label>
                                          <input style="padding-left: 13px;border: 1px solid #d9d9d9;border-radius: 5px;height: 40px;font-size: 15px;margin-top: 5px;width: 80%;" type="email" name="email" required class="clsip" placeholder="Email">
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                
                                    <div class="row">
                                       <div class="input">
                                          <label style="font-weight: 400; font-size: 16px;line-height: 22px; letter-spacing: 0;color: #777777;">Nội dung: <span style="color:red;"></span></label>
                                          <textarea style="padding-left: 13px;border: 1px solid #d9d9d9;border-radius: 5px;height: 40px;font-size: 15px;margin-top: 5px;width: 80%;" type="text" name="noidung" class="clsipa"></textarea>
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                
                                    <div class="row btnclass">
                                       <div class="input ipmaxn ">
                                          <input type="submit" class="btn-gui" name="frmSubmit" id="frmSubmit" value="Đặt hàng">
                                          
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                  
                                    <div class="clear"></div>
                                 </div>
                              </form>
                              </div>
                        </div>
                     </div>
                  </div>
                   <?php 
                        }else{
                           ?><div id="btn-thanhtoan" style="width: 100%;padding-top: 40px;position: relative;">
                                            <a href="<?php echo BASE_URL ?>/khachhang/dangnhap">Thanh toán</a>
                                        </div>
                                       
                                        <?php 
                                    }
                                    ?>
               </div>
            </div>
         </div>
      </section>
      <div class="clear"></div>
<style type="text/css">
.sum_price_all {
    border-bottom: 1px solid #ccc ;
}
   .btnclass > .input > input.btn-gui{
          border-radius: 5px;
          border: 1px solid #ccc;
   }
    .btnclass > .input > input.btn-gui:hover{
         border-radius: 5px;
         border: 1px solid #ccc;
         background: #00acff;
         color: white;
         transition: all 0.6s;

   }
   #btn-thanhtoan:hover a{
      background: #00abff;
      color: white;
   }
    #btn-thanhtoan a{
        border-radius: 32px;width: 200px;position: absolute;top:50%;left: 50%;transform: translate(-50%, -50%);text-align: center;font-size: 16px;font-weight: 550;background: #ccc;padding-bottom: ;
    }
 
</style>