<?php
   if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key=>$value){
      echo '<span style="color:blue;font-weight:bold;margin:0px 450px;font-size:24px">'.$value.'</span>';
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
<div style="padding-top: 10px; text-align: center;">
   <h3 style="text-align: center;padding-bottom: 20px; font-weight: bold;">Liệt kê đơn hàng</h3>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Code đơn hàng</th>
        <th>Ngày đặt</th>
        <th>Tình trạng</th>
        <th>Quản lý</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      foreach($order as $key => $ord){
        $i++;
       ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $ord['order_code'] ?></td>
        <td><?php echo $ord['order_date'] ?></td>
        <td><?php if($ord['order_status']==0){echo 'đơn hàng mới';}else{echo 'đã xử lý';} ?></td>
        <td><a href="<?php echo BASE_URL ?>/order/order_details/<?php echo $ord['order_code'] ?>">Xem đơn hàng</a></td>
      </tr>
      <?php
      } 
      ?>
      
    </tbody>
  </table>
</div>