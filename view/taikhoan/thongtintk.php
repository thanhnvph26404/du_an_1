<?php
// xuất thông tin user để in ra
extract($_SESSION['user']);

if (isset($_POST['submit'])) {
    extract($_POST);
    // điều kiện để cập nhập thông tin
    $thucthi = true;
    // check tên không được để trống
    if ($name == "") {
        $name_error = "trường này không được để trống";
        $thucthi = false;
    }
    // số điện thoại không được để trống
    if ($tel == "") {
        $tel_error = "trường này không được để trống";
        $thucthi = false;
    }
    // lấy id user
    $id_user = $_SESSION['user']['id'];
    // thực thi cập nhập user
    if ($thucthi) {
        update_user($name, $tel, $gender, $address, $id_user);
        // cập nhập tài khoản user vào session
        $user = loadone_user($id_user);
        $_SESSION['user'] = $user;
        // tạo thông báo cho người dùng
        $messenger = "cập nhập tài khoản thành công";
        // lấy lại thông tin để xuất ra
        extract($_SESSION['user']);
    }
}



?>



<!-- tiêu đề -->
<h1 class="text-4xl text-black">THÔNG TIN TÀI KHOẢN</h1>
<div class="border-b-4 border-red-500 w-[60px] mb-10"></div>
<h3 class="p-1 my-10 border-l-4 border-red-500 text-3xl text-black ">Cập Nhập Thông Tin Tài Khoản</h3>
<h3 class="p-1  text-2xl text-green-500 "> <?= isset($messenger) ? $messenger : "" ?></h3>
<form action="index.php?act=thongtintk" method="POST" class="w-9/12">
    <!--tài Khoản  -->
    <label class="w-full" for="">Tài Khoản</label>
    <input type="text" id="" value="<?= $email ?>" readonly class="p-2 mb-7 border border-black  text-black rounded-md w-full bg-stone-200">
    <!-- tên -->
    <label class="w-full" for="name">Tên</label>
    <h3 class="p-1  text-2xl text-red-500 "><?= isset($name_error) ? $name_error : "" ?></h3>
    <input type="text" id="name" name="name" value="<?= $name ?>" class="p-2 mb-7 border border-black  text-black rounded-md w-full ">
    <!-- số điện thoại -->
    <label class="w-full" for="tel">Số Điện Thoại</label>
    <h3 class="p-1  text-2xl text-red-500 "><?= isset($tel_error) ? $tel_error : "" ?></h3>
    <input type="number" id="tel" name="tel" value="<?= $tel ?>" class="p-2 mb-7 border border-black  text-black rounded-md w-full ">
    <!-- giới tính -->
    <label class="w-full" for="gender">Giới Tính</label>
    <select name="gender" id="gender" name="gender" class="p-2 mb-7 border border-black  text-black rounded-md w-full ">
        <option value="0" <?= ($gender == 0) ? 'selected' : "" ?>></option>
        <option value="1" <?= ($gender == 1) ? 'selected' : "" ?>>Nam</option>
        <option value="2" <?= ($gender == 2) ? 'selected' : "" ?>>Nữ</option>
    </select>
    <!-- địa chỉ -->
    <label class="w-full" for="address">Địa Chỉ</label>
    <select class="p-2  text-2xl mb-7 border border-black  text-black rounded-md w-full " name="address" id="">
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
    <!-- nút cập nhật -->
    <input type="submit" value="Cập Nhập" name="submit" class="p-3 px-6 rounded-lg bg-blue-500 text-white hover:bg-blue-600">
</form>