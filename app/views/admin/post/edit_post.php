<?php
	if(!empty($_GET['msg'])){
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value){
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}
	?> 

<style type="text/css">
   input.form-control {
    width: 400px; 
    margin: auto;
    display: block;font-size: 16px;font-weight: normal;text-align: center;
}
   label{
   font-size: 20px;
   }
</style>
<div style="padding-top: 10px; text-align: center;">
   <h3 style="text-align: center;padding-bottom: 20px; font-weight: bold;color: black;">Cập nhật Bài viết</h3>
   <div style="display: flex;font-weight: bold; font-family: Poppins, Arial, sans-serif;">
<?php
foreach($postbyid as $key => $pos) {
?>
	<form style="margin:auto;"action="<?php echo BASE_URL ?>/post/update_post/<?php echo $pos['id_post'] ?>" method="POST" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="email">Tên bài viết</label>
	    <input type="text" value="<?php echo $pos['title_post'] ?>" name="title_post" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label for="email">Hình ảnh sản phẩm</label>
	    <input type="file" name="image_post" class="form-control" >
	    <p><img src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $pos['image_post'] ?>" height="100" width="100"></p>
	  </div>
	  <div class="form-group">
	    <label for="pwd">Chi tiết bài viết</label>
	    <textarea  id="editor" name="content_post" rows="10" style="resize: none" class="form-control"><?php echo $pos['content_post'] ?></textarea>  
	  </div>
	  <div class="form-group">
	    <label for="pwd">Danh mục bài viết</label>
	    <select style="width: 200px;margin: auto;text-align: center;" class="form-control" name="category_post">
	    	<?php
	    	foreach($category as $key => $cate){ 
	    	?>
	    	<option <?php if($cate['id_Cpost']==$pos['id_Cpost']){ echo 'selected'; } ?> value="<?php echo $cate['id_Cpost'] ?>"><?php echo $cate['title_Cpost'] ?></option>
	    	<?php
	    	} 
	    	?>
	    </select>
	  </div>

	  <button style=" margin-bottom: 20px; height: 50px; width: 170px; border-radius: 20px;
                        background-color: #696969; color: white" type="submit" name="updatepost" class="btn btn-default">Cập nhật bài viết</button>
	</form>
<?php
} 
?>

</div>
</div>