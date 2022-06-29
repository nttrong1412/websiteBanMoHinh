<?php
	if(!empty($_GET['msg'])){
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key=>$value){
			echo '<span style="color:red;font-weight:bold">'.$value.'</span>';
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
   <h3 style="text-align: center;padding-bottom: 20px; font-weight: bold;color: black;">Thêm Bài viết</h3>
   <div style="display: flex;font-weight: bold; font-family: Poppins, Arial, sans-serif;">
	<form style="margin:auto;" action="<?php echo BASE_URL ?>/post/insert_post" method="POST" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="email">Tên bài viết</label>
	    <input  type="text" name="title_post" class="form-control" >
	  </div>
	    <div class="form-group">
	    <label for="email">Hình ảnh bài viết</label>
	    <input type="file" name="image_post" class="form-control" >
	  </div>
	  
	  <div class="form-group">
	    <label for="pwd">Chi tiết bài viết</label>
	    <textarea id="editor" name="content_post" rows="10" style="resize:none;" class="form-control"></textarea>
	  </div>
	   <div class="form-group">
	    <label for="pwd">Danh mục bài viết</label>
	    <select style="width: 200px;margin: auto;text-align: center;" class="form-control" name="category_post">
	    	<?php
	    		foreach($category as $key=> $cate){
	    	?>
	    	<option value="<?php echo $cate['id_Cpost']?> "><?php echo $cate['title_Cpost'] ?></option>
	    	<?php
	    	}
	    	?>
	    	
	    </select>
	  </div>
	  <button style=" margin-bottom: 20px; height: 40px; width: 170px; border-radius: 20px;
                        background-color: #696969; color: white" type="submit" class="btn btn-default">Thêm bài viết</button>
	</form>

</div>
</div>