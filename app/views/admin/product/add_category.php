   <?php
  if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
      echo '<span style="color:blue;font-size:22px;font-weight:bold;margin-left:400px;padding-top:20px">'.$value.'</span>';
    }
  }
  ?> 


<style type="text/css">
	input{
		display: block;width: 400px;height: 40px;border-radius: 5px;border: 1px solid; margin-bottom: 20px; margin-top: 20px;font-size: 20px;font-weight: normal;text-align: center;
		margin: auto;
	}
	label{
		font-size: 20px;

	}
</style>


<div style="padding-top: 20px; text-align: center;">
	<h3 style="text-align: center; font-weight: bold;">Thêm danh mục sản phẩm</h3>

 <div style="display: flex;font-weight: bold; font-family: Poppins, Arial, sans-serif;">
	<form style="margin: auto;" action="<?php echo BASE_URL ?>/product/insert_category" method="POST">
	  <div class="" >
	    <!-- <label for="email">Tên danh mục</label>
	    <input type="text" name="titleCP" class="form-control" > -->
	    <label for="title">Tên danh mục</label>
        <input type="text" name="titleCP" class="input" style="" required="">
	  </div>
	  <div class="form-group">
	  	<label for="desc">Mô Tả</label><br>
        <textarea style="border-color: ;width: 400px; height: 70px;font-size: 20px;font-weight: normal;text-align: center;padding-top: 5px;" name="descCP" id="desc" class="" required=""></textarea><br>
	    <!-- <label for="pwd">Miêu tả danh mục</label>
	    <input type="text" name="descCP" class=""> -->
	  </div>
	  
	  <button style=" height: 50px; width: 170px; border-radius: 20px;
                        background-color: #696969; color: white" type="submit" class="btn btn-default">Thêm danh mục</button>
	</form>


</div>
</div>