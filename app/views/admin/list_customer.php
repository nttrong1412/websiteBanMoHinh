   <?php
  if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
      echo '<span style="color:blue;font-size:22px;font-weight:bold;margin-left:500px;padding-top:20px">'.$value.'</span>';
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
  <h2 style="text-align: center; font-weight: bold;">Liệt kê danh mục người dùng</h2>
  <table style="width: 70%;margin: auto;">
    <thead>
      <tr>
        <th>Id</th>
        <th style="width: 200px;">Họ và tên</th>
        <th>Email</th>
        <!-- <th>Password</th> -->
        <th style="width: 200px;">Quản lý</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      foreach($customer as $key => $cus){
        $i++;
       ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $cus['customer_name'] ?></td>
        <td><?php echo $cus['customer_email'] ?></td>
         <!-- <td><?php echo $cus['customer_password'] ?></td> -->
        <td><a href="<?php echo BASE_URL ?>/login/delete_customer/<?php echo $cus['customer_id'] ?>">Xóa</a></td>
      </tr>
      <?php
      } 
      ?>
      
    </tbody>
  </table>
</div>