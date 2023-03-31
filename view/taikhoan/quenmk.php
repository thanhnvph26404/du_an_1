<?php

if (isset($_SESSION['user'])) {
  header('location:index.php');
}



$messenger_fale = "";
if (isset($_POST['submit'])) {
    // thông báo
    $messenger_fale = "xác nhận email hoặc số điện thoại thất bại";
    extract($_POST);
    $listuser = loadall_user();
    // check email
    foreach ($listuser as $key => $value) {
        if ($value['email'] == $email) {
            if ($value['tel'] == $tel) {
                $newpassword = bin2hex(random_bytes(3));
                // mã hóa mật khảu
                $password_hash = password_hash($newpassword, PASSWORD_BCRYPT);
                // lấy id_user
                $id_user = $value['id'];
                // thay đổi mật khẩu
                update_password_user($password_hash, $id_user);
                $messenger = " mật khẩu mới của bạn là : $newpassword";
            }
        }
    }
}


?>




<form action="index.php?act=quenmk" method="post" class="w-7/12 mx-auto mt-10 h-[600px]">
    <!-- tiêu đề -->
    <h1 class="text-4xl text-black pb-2 font-bold">QUÊN MẬT KHẨU</h1>
    <div class="border-b-4 border-red-500 w-[60px] mb-10"></div>
    <h3 class="p-1  text-2xl  <?= isset($messenger) ? "text-green-500" :  "text-red-500" ?>"> <?= isset($messenger) ? $messenger :  $messenger_fale ?></h3>

    <label for="email" class="block"> email
        <input type="text" name="email" id="email" class="p-2 mb-7 border border-black  text-black rounded-md w-full">
    </label>
    <label for="tel" class="block">
        số điện thoại
        <input type="text" name="tel" id="tel" class="p-2 mb-7 border border-black  text-black rounded-md w-full">
    </label>
    <input type="submit" name="submit" value="Xác Nhận" class="p-3 px-6 rounded-lg bg-blue-500 text-white hover:bg-blue-600">
</form>