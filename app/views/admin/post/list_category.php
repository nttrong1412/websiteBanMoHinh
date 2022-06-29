
   <?php
  if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
      echo '<span style="color:blue;font-size:22px;font-weight:bold;margin-left:430px;padding-top:20px">'.$value.'</span>';
    }
  }
  ?> 
  <style type="text/css">
    th{
      background: #B0E0E6;
      border: 1px solid Gray;
       border-radius: 5px;
      padding: 10px;
      font-size: 20px;text-align: center;
    }
    td{
      border: 1px solid Gray;
      border-radius: 5px;

       font-size: 20px;text-align: center;width: 20px;
       padding: 8px;
    }
  </style>
  <div style="padding-top: 20px; text-align: center;">
     <h2 style="text-align: center; font-weight: bold;">Liệt kê danh mục bài viết</h2>
<table style="width: 70%;margin: auto;">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      foreach($category as $key => $cate){
        $i++;
       ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $cate['title_Cpost'] ?></td>
        <td><?php echo $cate['desc_Cpost'] ?></td>
        <td><a href="<?php echo BASE_URL ?>/post/delete_category/<?php echo $cate['id_Cpost'] ?>">Xóa</a> <br> <a href="<?php echo BASE_URL ?>/post/edit_category/<?php echo $cate['id_Cpost'] ?>">Cập nhật</a></td>
      </tr>
      <?php
      } 
      ?>
      
    </tbody>
  </table>
</div>