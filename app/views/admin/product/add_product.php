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
</style>
<div style="padding-top: 10px; text-align: center;">
   <h3 style="text-align: center;padding-bottom: 20px; font-weight: bold;">Thêm sản phẩm</h3>
   <div style="display: flex;font-weight: bold; font-family: Poppins, Arial, sans-serif;">
      <form style="margin-left:40px;width: 100%;" action="<?php echo BASE_URL ?>/product/insert_product" method="POST" enctype="multipart/form-data">
       <div class="left" style="margin-left: 40px; height: ; border: px solid;float: left;width: 45%;">
         	<div class="form-group">
            <label for="email">Tên sản phẩm</label>
            <input required=""  
             type="text" name="title_product" class="form-control" >
         </div>
         <div class="form-group">
            <label for="email">Hình ảnh sản phẩm</label>
            <input required=""  type="file" name="image_product" class="form-control" >
         </div>
         <div class="form-group">
            <label for="email">Giá sản phẩm</label>
            <input required=""  style="width: 300px;" type="text" name="price_product" class="form-control" >
         </div>
         <div class="form-group">
            <label for="email">Số lượng sản phẩm</label>
            <input required=""  style="display: block;margin: auto;width: 200px;" style="width: 200px;margin: auto;" type="text" name="quantity_product" class="form-control" >
         </div>
            <div class="form-group">
            <label for="pwd">Danh mục sản phẩm</label>
            <select  style="display: block;margin: auto;width: 200px; margin-bottom: 10px; margin-top: 10px;font-size: 16px;font-weight: normal;text-align: center;" class="form-control" name="category_product">
               <?php
                  foreach($category as $key=> $cate){
                  ?>
               <option value="<?php echo $cate['idCP']?> "><?php echo $cate['titelCP'] ?></option>
               <?php
                  }
                  ?>
            </select>
         </div>
        
          
         </div>
         <div class="right" style="height: 500px; border: px solid;float: left;width: 45%;margin-left: 50px;">
         	 <div class="form-group">
            <label for="pwd">Miêu tả sản phẩm</label>
            <textarea style="height:100px"  id="editor" required="" name="desc_product"  class="form-control"></textarea>
         </div>
            <label for="pwd">Sản phẩm hot</label>
         <select style="display: block;margin: auto;width: 150px; margin-bottom: 10px; margin-top: 10px;font-size: 16px;font-weight: normal;text-align: center;" class="form-control" name="product_hot">
            <option value="0">Không</option>
            <option value="1">Có</option>
         </select>
         
         </div>
         <div style="margin: auto;">
         	<button style=" margin-bottom: 20px;height: 45px; width: 170px; border-radius: 20px;
                        background-color: #696969; color: white" type="submit" class="btn btn-default">Thêm sản phẩm</button>
         </div>
      </form>
   </div>
</div>