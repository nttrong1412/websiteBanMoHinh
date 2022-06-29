<style type="text/css">
	input{
		display: block;width: 400px;height: 40px;border-radius: 10px;border-color: black; margin-bottom: 20px; margin-top: 20px;font-size: 20px;font-weight: normal;text-align: center;
	}
	label{
		font-size: 20px;

	}
	textarea{
		style="border-color: black;width: 400px; height: 70px;font-size: 20px;font-weight: normal;text-align: center;padding-top: 5px;
	}
</style>
   <?php
  if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
      echo '<span style="color:blue;font-size:22px;font-weight:bold;margin-left:400px;padding-top:20px">'.$value.'</span>';
    }
  }
  ?> 


<div style="padding-top: 20px; text-align: center;">
	<h3 style="text-align: center; font-weight: bold;">Cập nhật danh mục sản phẩm</h3>

 <div style="display: flex;font-weight: bold; font-family: Poppins, Arial, sans-serif;">
	<?php
	foreach($categorybyid as $key => $cate){ 
	?>
	<form style="margin: auto;"  action="<?php echo BASE_URL ?>/product/update_category/<?php echo $cate['idCP'] ?>" method="POST">
	  <div class="form-group">
	    <label for="email">Tên danh mục</label>
	    <input type="text" value="<?php echo $cate['titelCP'] ?>" name="titleCP" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label for="pwd">Miêu tả danh mục</label>
	    <textarea style="border-color: black;width: 400px; height: 70px;font-size: 20px;font-weight: normal;text-align: center;padding-top: 5px;" name="descCP" id="" style="resize: none;" rows="5" class="form-control"><?php echo $cate['destCP'] ?></textarea>
	  </div>
	  <button type="submit" class="btn btn-default">Cập nhật danh mục</button>
	</form>
	<?php
	} 
	?>

</div>
</div>