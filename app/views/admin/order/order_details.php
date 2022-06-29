
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
   <h3 style="text-align: center;padding-bottom: 20px; font-weight: bold;">Chi tiết đơn hàng</h3>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tên người đặt</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Ghi chú</th>
      
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
     
      foreach($order_info as $key => $ord){
       
        $i++;
       ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $ord['name'] ?></td>
        <td><?php echo $ord['email'] ?></td>
        <td><?php echo $ord['sodienthoai'] ?></td>
        <td><?php echo $ord['diachi'] ?></td>
        <td><?php echo $ord['noidung'] ?></td>
      </tr>
      <?php
      } 
      ?>
     
      
    </tbody>
</table>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
      
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      $total = 0;
      foreach($order_details as $key => $ord){
        $total+=$ord['product_quantity']*$ord['price_product'];
        $i++;
       ?>

      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $ord['title_product'] ?></td>
        <td><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $ord['image'] ?>" height="100" width="100"></td>
        <td><?php echo $ord['product_quantity'] ?></td>
        <td><?php echo number_format($ord['price_product'],0,',','.').'đ' ?></td>
        <td><?php echo number_format($ord['product_quantity']*$ord['price_product'],0,',','.').'đ' ?></td>
       
      </tr>
      <?php
      } 
      ?>
      <form method="POST" action="<?php echo BASE_URL ?>/order/order_confirm/<?php echo $ord['order_code'] ?>">
      <tr>
        <td><a href="<?php echo BASE_URL?>/order"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a></td>
        <td align="right" colspan="4">Tổng tiền : <?php echo number_format($total,0,',','.').'đ' ?></td>
        <td align="right" colspan="2"><input type="submit" name="update_order" value="Đã xử lý" class="btn btn-default"></td>
      </tr>
      </form>
      
    </tbody>
  </table>
</div>