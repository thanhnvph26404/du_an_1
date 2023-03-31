<?php
if (isset($_POST['submit'])) {
    // lấy mật khẩu cũ
    $oldpassword = $_SESSION['user']['password'];
    // lấy id user
    $id_user = $_SESSION['user']['id'];
    // điều kiện để thay đỏi mk
    $thucthi = true;
    // trả thông tin người dùng nhập vào
    extract($_POST);
    // xác nhận nhập đúng mk cũ 
    if (!password_verify($password, $oldpassword)) {
        $password_error = "Mật khẩu cũ không chính xác";
        $thucthi = false;
    }
    // xác nhận mật khẩu mới
    if ($newpassword !== $renewpassword) {
        $newpassword_error = "xác nhận mật khẩu thất bại";
        $thucthi = false;
    }
    // mật khẩu cũ không được để trống
    if ($password == "") {
        $password_error = "Vui lòng nhập mật khẩu cũ";
        $thucthi = false;
    }
    // check mật khẩu mới
    if ($newpassword == "") {
        $newpassword_error = "Vui lòng nhập mật khẩu Mới";
        $thucthi = false;
    }
    // check xác nhận mật khẩu
    if ($renewpassword == "") {
        $renewpassword_error = "Vui lòng xác nhận mật khẩu mới";
        $thucthi = false;
    }
    if ($thucthi) {
        // mã hóa mật khảu
        $password_hash = password_hash($newpassword,PASSWORD_BCRYPT);
        // thay đổi mật khẩu
        update_password_user($password_hash, $id_user);
        // thay đổi user trong session
        $user =loadone_user($id_user);
        $_SESSION['user'] = $user ;
        // bỏ dữ liệu trong phương thức post
        unset($renewpassword,$newpassword);
        $messenger = "bạn đã thay đổi mật khẩu thành công";
    }
}




?>


<!-- tiêu đề -->
<h1 class="text-4xl text-black pb-2 font-bold">ĐỔI MẬT KHẨU</h1>
<div class="border-b-4 border-red-500 w-[60px] mb-10"></div>
<h3 class="p-1  text-2xl text-green-500 "> <?= isset($messenger) ? $messenger : "" ?></h3>
<form action="index.php?act=doimk" class="w-9/12" method="POST">
    <!-- mật khẩu cũ -->
    <label for="password">Mật Khẩu Cũ</label>
    <h3 class="p-1  text-2xl text-red-500 "><?= isset($password_error) ? $password_error : "" ?></h3>
    <input type="text" id="password" name="password" class="p-2 mb-7 border border-black  text-black rounded-md w-full  ">
    <!-- mật khẩu mới -->
    <label for="newpassword">Mật Khẩu Mới</label>
    <h3 class="p-1  text-2xl text-red-500 "><?= isset($newpassword_error) ? $newpassword_error : "" ?></h3>
    <input type="text" id="newpassword" name="newpassword" value="<?= isset($newpassword) ? $newpassword : "" ?>" class="p-2 mb-7 border border-black  text-black rounded-md w-full  ">
    <!-- xác nhận mật khẩu mới -->
    <label for="renewpassword">Xác Nhận Mật Khẩu Mới</label>
    <h3 class="p-1  text-2xl text-red-500 "><?= isset($renewpassword_error) ? $renewpassword_error : "" ?></h3>
    <input type="text" id="renewpassword" name="renewpassword" value="<?= isset($renewpassword) ? $renewpassword : "" ?>" class="p-2 mb-7 border border-black  text-black rounded-md w-full  ">
    <!-- nut đổi mật khẩu -->
    <input type="submit" value="Đổi Mật Khẩu" name="submit" value="submit" class="p-3 px-6 rounded-lg bg-blue-500 text-white hover:bg-blue-600">
</form>