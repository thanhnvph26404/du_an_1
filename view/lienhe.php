<?php
// nếu không đăng nhập thì để id_user bằng null
$id = "";
if (isset($_SESSION['user'])) {
    extract($_SESSION['user']);
}


if (isset($_POST['submit'])) {
    extract($_POST);
    $lienhe = true;
    // check mail
    if ($email == "") {
        $error_email = "Trường Này Không Được Để trống";
        $lienhe = false;
    }
    // check họ tên không được để trống
    if ($name == "") {
        $error_name = "Trường Này Không Được Để trống";
        $lienhe = false;
    }
    // check số điện thoại không được để trống
    if ($tel == "") {
        $error_tel = "Trường Này Không Được Để trống";
        $lienhe = false;
    }
    // check mục đích
    if ($purpose == "") {
        $error_purpose = "Trường Này Không Được Để trống";
        $lienhe = false;
    }
    // check mô tả không đươch để trống
    $description = trim($description);
    if ($description == "") {
        $error_description = "Trường Này Không Được Để trống";
        $lienhe = false;
    }

    if ($lienhe) {
        insert_contact($name, $email, $tel, $purpose, $description, $id);
        $messenger = "Bạn đã gửi thành công";
        unset($purpose);
        unset($description);
    }
}





?>

<div class="banner"><img src="view/image/banner-234.jpg" alt="" class="banner-img"></div>

<h1 class="text-green-500 text-center"><?= isset($messenger) ? $messenger : ""; ?></h1>
<div style="margin-top: 40px; margin-bottom: 100px;" class="grid1 grid-cols-2 w-10/12 mx-auto ">
    <!-- contact -->
    <div class="">
        <h1 class="title">Contact</h1>
        <p class="text-content1">Chúng tôi luôn trân trọng mọi ý kiến của quý khách, ý kiến từ quý khách sẽ giúp chúng tôi nâng cao về chất lượng phục vụ chính quý khách cũng góp phần vào sự thành công và phát triển thương hiệu Sun Homes BBQ của chúng tôi:</p>
        <p class="text-content1">Webdesign rất hoan nghênh độc giả gửi thông tin và góp ý cho chúng tôi!</p>
        <p class="text-content1">
           <strong>Địa chỉ :</strong>  Số 29 ngõ 18 Lương Ngọc Quyến, Hà Đông, Hà Nội.
        </p>
        <p class="text-content1">
        <strong>Email :</strong> hoannvph28518@fpt.edu.vn
        </p>
        <p class="text-content1">
        <strong>SĐT :</strong>  0384940225
        </p>
        <p class="text-content1">
        <strong>Website :</strong>  <a href="http://localhost/du_an_1">http://localhost/du_an_1</a>
        </p>
    </div>
    <form action="index.php?act=lienhe" method="post" class="mt-10 ml-10 flex flex-col gap-y-2">
        <!-- name -->
        
        <input type="text" name="name" placeholder="Tên Của Bạn" value="<?= isset($name) ? $name : ""; ?>" class="border  border-black text-2xl text-black p-3 w-[400px]">
        <b class="text-red-500"> <?= isset($error_name) ? $error_name : ""; ?></b>
        <!-- email -->
       
        <input type="text" name="email" placeholder="Địa Chỉ Email" value="<?= isset($email) ? $email : ""; ?>" class="border  border-black text-2xl text-black p-3 w-[400px]">
        <b class="text-red-500"> <?= isset($error_email) ? $error_email : ""; ?></b>
        <!-- Số điện thoại -->
       
        <input type="text" name="tel" placeholder="Số điện thoại" value="<?= isset($tel) ? $tel : ""; ?>" class="border  border-black text-2xl text-black p-3 w-[400px]">
        <b class="text-red-500"> <?= isset($error_tel) ? $error_tel : ""; ?></b>
        <!-- mục Đích -->
        
        <input type="text" name="purpose" placeholder="Mục Đích liên hệ" value="<?= isset($purpose) ? $purpose : ""; ?>" class="border  border-black text-2xl text-black p-3 w-[400px]">
        <b class="text-red-500"> <?= isset($error_purpose) ? $error_purpose : ""; ?></b>
        <!-- Mô Tả -->
       
        <textarea name="description" placeholder="Mô Tả" id="" cols="46" rows="5" class="border  border-black text-2xl text-black p-3 w-[400px]">
        <?= isset($description) ? $description : ""; ?>
        </textarea>
        <b class="text-red-500"> <?= isset($error_description) ? $error_description : ""; ?></b>
        <!-- submit -->
        <input type="submit" name="submit" value="Gửi Liên Hệ" class="care-btn">
    </form>
</div>