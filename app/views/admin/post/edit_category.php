<?php
	if(!empty($_GET['msg'])){
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value){
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}
	?> 
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

<div style="padding-top: 20px; text-align: center;">
	<h3 style="text-align: center; font-weight: bold;">Cập nhật danh mục bài viết</h3>

 <div style="display: flex;font-weight: bold; font-family: Poppins, Arial, sans-serif;">
	<?php
	foreach($categorybyid_post as $key => $cate){ 
	?>
	<form style="margin: auto;"  action="<?php echo BASE_URL ?>/post/update_category/<?php echo $cate['id_Cpost'] ?>" method="POST">
	  <div class="form-group">
	    <label for="email">Tên danh mục</label>
	    <input type="text" value="<?php echo $cate['title_Cpost'] ?>" name="title_category_post" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label for="pwd">Miêu tả danh mục</label>
	    <textarea style="border-color: black;width: 400px; height: 70px;font-size: 20px;font-weight: normal;text-align: center;padding-top: 5px;" name="desc_category_post" id="" style="resize: none;" rows="5" class="form-control"><?php echo $cate['desc_Cpost'] ?></textarea>
	  </div>
	  <button type="submit" class="btn btn-default">Cập nhật danh mục</button>
	</form>
	<?php
	} 
	?>

</div>
</div>