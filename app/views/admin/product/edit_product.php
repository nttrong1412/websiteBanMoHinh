
   <?php
  if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
      echo '<span style="color:blue;font-size:22px;font-weight:bold;margin-left:400px;padding-top:20px">'.$value.'</span>';
    }
  }
  ?> 
<style type="text/css">
   input.form-control {
   width: 400px; 
   margin: auto;
   text-align: center;
   }
   label{
   font-size: 20px;
   }
   .form-group {
   margin: 0px;
   }
</style>
<div style="padding-top: 10px; text-align: center;">
   <h3 style="text-align: center;padding-bottom: 20px; font-weight: bold;">Cập nhật sản phẩm</h3>
   <div style="display: flex;font-weight: bold; font-family: Poppins, Arial, sans-serif;">
      <?php
         foreach($productbyid as $key =>$pro){
         
         
         ?>	
      <form action="<?php echo BASE_URL ?>/product/update_product/<?php echo $pro['id_product'] ?>" method="POST" enctype="multipart/form-data">
         <div class="left" style="margin-left: 40px; height: ; border: px solid;float: left;width: 45%;">
            <div class="form-group">
               <label for="email">Tên sản phẩm</label>
               <input type="text" value="<?php echo $pro['title_product'] ?>" name="title_product" class="form-control" >
            </div>
            <div class="form-group">
               <label for="email">Hình ảnh sản phẩm</label>
               <input type="file" name="image_product" class="form-control" >
               <p><img src="<?php echo BASE_URL?>/public/uploads/product/<?php echo $pro['image'] ?>" height="100" width="100"></p>
            </div>
            <div class="form-group">
               <label for="email">Giá sản phẩm</label>
               <input type="text" style="width: 300px;" value="<?php echo $pro['price_product'] ?>" name="price_product"class="form-control" >
            </div>
            <div class="form-group">
               <label for="email">Số lượng sản phẩm</label>
               <input type="text"  style="display: block;margin: auto;width: 200px;" style="width: 200px;margin: auto;"  value="<?php echo $pro['quantity_product'] ?>" name="quantity_product" class="form-control" >
            </div>
            <div class="form-group">
               <label for="pwd">Danh mục sản phẩm</label>
               <select style="display: block;margin: auto;width: 200px; margin-bottom: 10px; margin-top: 10px;font-size: 16px;font-weight: normal;text-align: center;"  class="form-control" name="category_product">
                  <?php
                     foreach($category as $key=> $cate){
                     ?>
                  <option <?php if($cate['idCP'] == $pro['idCP']){
                     echo 'selected'; 
                     }?> value="<?php echo $cate['idCP']?> "><?php echo $cate['titelCP'] ?></option>
                  <?php
                     }
                     ?>
               </select>
            </div>
         </div>
         <div  class="right" style="height: 530px; border: px solid;float: left;width: 45%;margin-left: 50px;">
         	 <div class="form-group">
               <label for="pwd">Miêu tả sản phẩm</label>
               <textarea id="editor"  name="desc_product"  rows="5" style="resize:none;" class="form-control"><?php echo $pro['desc_product'] ?></textarea>
            </div>
            <div class="form-group">
               <label for="pwd">Sản phẩm hot</label>
               <select style="display: block;margin: auto;width: 150px; margin-bottom: 10px; margin-top: 10px;font-size: 16px;font-weight: normal;text-align: center;" class="form-control" name="product_hot">
                  <?php
                     if($pro['product_hot']==0){
                     ?>
                  <option selected value="0">Không</option>
                  <option value="1">Có</option>
                  <?php
                     }else{ 
                     ?>
                  <option value="0">Không</option>
                  <option selected value="1">Có</option>
                  <?php
                     } 
                     ?>
               </select>
            </div>
           
         </div>
         <button style=" margin-bottom: 20px;height: 45px; width: 170px; border-radius: 20px;
            background-color: #696969; color: white" type="submit" class="btn btn-default">Cập nhật sản phẩm</button>
      </form>
      <?php } ?>
   </div>
</div>