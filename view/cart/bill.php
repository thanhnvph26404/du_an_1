<?php
if (isset($_SESSION['user'])) {
    $address = $_SESSION['user']['address'];
    $name = $_SESSION['user']['name'];
    $tel = $_SESSION['user']['tel'];
    $email = $_SESSION['user']['email'];
} else {
    $address= "";
    $name = '';
    $tel = '';
    $email = '';
}

?>
<div class="banner"><img src="view/image/banner-234.jpg" alt="" class="banner-img"></div>
<div class="grid wide">
    <div class="row">
        <div class="col l-12">
            <em>Lưu ý: chỉ giao hàng tại Hà Nội</em>
            <form action="index.php?act=billconfirm" method="post" enctype="multipart/form-data">
                <h1 class="infor-title">Thông tin đơn hàng</h1>
                <div class="row">
                    <div class="col l-6">
                        <input name="name1" type="text" class="infor-ip" value="<?= $name ?>" placeholder="Tên người nhận...">

                    </div>
                    <div class="col l-6">
                        <input name="tel1" type="text" class="infor-ip" value="<?= $tel ?>" placeholder="Số điện thoại...">
                    </div>
                    <div class="col l-12">
                        <span class="question">Bạn muốn nhận hàng bằng hình thức nào *</span>
                        <input type="radio" name="ship" checked value="Giao hàng tận nơi"> <span style="display: inline-block;
    position: relative;
    top: -2px; margin-right: 16px;color: #292929;">Giao hàng tận nơi</span>
                        <input type="radio" name="ship" value="Tự đến lấy"> <span style="display: inline-block;
    position: relative;
    top: -2px; margin-right: 16px;color: #292929;">Tự đến lấy</span>
                        <input name="email1" type="text" class="infor-ip" placeholder="Địa chỉ email..." value="<?= $email ?>">
                        <span class="question">Nếu không tìm thấy địa chỉ chính xác, bạn hãy điền tên đường, phố và bổ sung chi tiết, chỉ dẫn vào phần 'Ghi chú' ngay phía dưới. Xin cảm ơn.</span>

                    </div>

                    <div class="col l-6">
                        <input name="city" type="text" class="infor-ip" value="Hà Nội">
                    </div>
                    <div class="col l-6">
                        <select class="infor-ip" name="township" id="">
                            <option value="1" <?= ($address == '1') ? 'selected' : '' ?>>Quận/huyện</option>
                            <option value="2" <?= ($address == '2') ? 'selected' : '' ?>>Ba Đình</option>
                            <option value="3" <?= ($address == '3') ? 'selected' : '' ?>>Ba Vì</option>
                            <option value="4" <?= ($address == '4') ? 'selected' : '' ?>>Bắc Từ Liêm</option>
                            <option value="5" <?= ($address == '5') ? 'selected' : '' ?>>Cầu Giấy</option>
                            <option value="6" <?= ($address == '6') ? 'selected' : '' ?>>Chương Mỹ</option>
                            <option value="7" <?= ($address == '7') ? 'selected' : '' ?>>Đan Phượng</option>
                            <option value="8" <?= ($address == '8') ? 'selected' : '' ?>>Đông Anh</option>
                            <option value="9" <?= ($address == '9') ? 'selected' : '' ?>>Đống Đa</option>
                            <option value="10" <?= ($address == '10') ? 'selected' : '' ?>>Gia Lâm</option>
                            <option value="11" <?= ($address == '11') ? 'selected' : '' ?>>Hà Đông</option>
                        </select>
                    </div>
                    <div class="col l-12">
                        <textarea class="area-infor" name="note" id="" cols="30" rows="10" placeholder="Ghi chú"></textarea>
                        <h1 class="infor-title">Chọn thời gian giao hàng</h1>
                    </div>
                    <div class="col l-6"><input name="date" type="date" class="infor-ip"></div>
                    <div class="col l-6"><input name="time" type="time" class="infor-ip"></div>
                    <div class="col l-12">
                <h1 class="infor-title">
                    Đơn hàng của bạn
                </h1>
                <?php viewcart(0);

                ?>

                </div>
            </form>
           

            </div>
        </div>
    </div>
</div>