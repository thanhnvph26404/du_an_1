<div class="banner"><img src="view/image/banner-234.jpg" alt="" class="banner-img"></div>
<div class="grid wide">
    <div class="row">
        <div class="col l-12">
        <h1 class="infor-title">Cảm ơn quý khách</h1>
        <?php
        if(isset($bill)&&(is_array($bill))){
            extract($bill);
        }
        ?>
        <h3>Mã đơn hàng: <?=$bill['id']?></h3>
        <span style="display: block;">Ngày đặt hàng: <?=$bill['date']?></span>
        <span style="display: block;">Giờ giao hàng: <?=$bill['time']?></span>
        <span style="display: block;">Hình thức nhận hàng: <?=$bill['ship']?></span>
        <span style="display: block;">Tổng đơn hàng: <?=$bill['total']?></span>

        <table class="table table-borderless">
    <thead>
      <tr>
        <th>Người đặt hàng</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Ghi chú</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?=$bill['name']?></td>
        <td><?=$bill['city']?>    <?=$bill['township']?></td>
        <td><?=$bill['tel']?></td>
        <td><?=$bill['email']?></td>
        <td><?=$bill['note']?></td>
      </tr>
      
    </tbody>
  </table>
  <h1 class="infor-title">Chi tiết giỏ hàng</h1>
  <table class="table table-borderless">
  <?php
  bill_chi_tiet($billct);
  ?>
  </table>
  
        </div>
    </div>
</div>