
   <?php
  if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
      echo '<span style="color:blue;font-size:22px;font-weight:bold;margin-left:460px;padding-top:20px">'.$value.'</span>';
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
     <h2 style="text-align: center; font-weight: bold;">Liệt kê sản phẩm</h2>
  <table style="width: 80%;margin: auto;">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tên </th>
        <th>Hình ảnh </th>
        <th>Danh mục </th>
        <th>Giá</th>
        <th>Số lượng </th>
        <th>Hot</th>
        <th>Mô tả</th>
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      foreach($product as $key => $pro){
        $i++;
       ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $pro['title_product'] ?></td>
        <td><img src="<?php echo BASE_URL?>/public/uploads/product/<?php echo $pro['image'] ?>" height="100" width="100"></td>
        <td><?php echo $pro['titelCP'] ?></td>
        <td><?php echo number_format($pro['price_product'],0,',','.').'đ' ?></td>
        <td><?php echo $pro['quantity_product'] ?></td>
          <td><?php 

        if($pro['product_hot']==0){
          echo 'Không có';
        }else{
          echo 'Có';
        }

         ?></td>
        <td style="width: 200px;"><?php echo $pro['desc_product'] ?></td>
        <td><a href="<?php echo BASE_URL ?>/product/delete_product/<?php echo $pro['id_product'] ?>">Xóa</a><br><a href="<?php echo BASE_URL ?>/product/edit_product/<?php echo $pro['id_product'] ?>">Cập nhật</a></td>
      </tr>
      <?php
      } 
      ?>
      
    </tbody>
  </table>
</div>