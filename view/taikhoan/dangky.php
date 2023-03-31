<?php
if (isset($_SESSION['user'])) {
    header('location:index.php');
  }


if (isset($_POST['submit']) && $_POST['submit'] != "") {
    extract($_POST);
    $dangky = true;
    // check email tồn tại chưa
    $listuser = loadall_user();
    foreach ($listuser as $key => $value) {
        if ($email == $value['email']) {
            $error_email = "Email Này Đã tồn Tại";
            $dangky = false;
        }
    }
    // check email đúng kiểu dữ liệu
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_email = "Vui Lòng nhập lại email";
        $dangky = false;
    }
    // check email không được để trống
    if ($email == "") {
        $error_email = "Trường Này Không Được Để trống";
        $dangky = false;
    }
    // check họ tên không được để trống
    if ($name == "") {
        $error_name = "Trường Này Không Được Để trống";
        $dangky = false;
    }
    // check số điện thoại không được để trống
    if ($tel == "") {
        $error_tel = "Trường Này Không Được Để trống";
        $dangky = false;
    }
    // var_dump($listuser);
    // check Mật khẩu không được để trống
    if ($password == "") {
        $error_password = "Trường Này Không Được Để trống";
        $dangky = false;
    }
    // check repassword đã đúng chưa
    if ($repassword !== $password) {
        $error_password = "Xác nhận mật khẩu thất bại";
        $dangky = false;
    }

    if ($dangky) {
        // mã hóa mật khẩu
        $new_password = password_hash( $password , PASSWORD_BCRYPT);
        // insert khách hàng và lấy id user mới đăng ký
        $id_user = insert_user($email,$name,$new_password,$tel);
        // đăng nhập luôn
        $user = loadone_user($id_user);
        $_SESSION['user'] = $user;
        header('location:index.php');
    }


}



?>





<div class="py-20 block bg-gray-100">
    <div class="mx-auto grid1 grid-cols-2 wide w-10/12  border rounded-3xl overflow-hidden bg-white " >
            <!-- form đăng KÝ -->
        <form class=" opacity-90 my-10 flex flex-col justify-center items-center " action="index.php?act=dangky" method="post">
            <h1 class="p-4 w-full text-4xl text-center text-black ">Đăng ký</h1>
            <!-- email -->
            <input class="w-[350px] text-2xl p-4 text-black my-5 border border-gray-500 rounded-2xl" type="text" placeholder="Email" name="email" value="<?= isset($email)  ? $email : "" ?>">
            <p class=" text-red-500">
                <?= isset($error_email) ? $error_email : "" ?>
            </p>
            <!-- name -->
            <input class="w-[350px] text-2xl p-4 text-black my-5 border border-gray-500 rounded-2xl" type="text" placeholder="Họ Tên" name="name" value="<?= isset($name) ? $name : "" ?>">
            <p class=" text-red-500">
                <?= isset($error_name) ? $error_name : "" ?>
            </p>
            <!-- tel  -->
            <input class="w-[350px] text-2xl p-4 text-black my-5 border border-gray-500 rounded-2xl" type="number" placeholder="Số Điện Thoại" name="tel" value="<?= isset($tel) ? $tel : "" ?>" min="0">
            <p class=" text-red-500">
                <?= isset($error_tel) ? $error_tel : "" ?>
            </p>
            <!-- password -->
            <input class="w-[350px] text-2xl p-4 text-black my-5 border border-gray-500 rounded-2xl " type="password" placeholder="Mật Khẩu" name="password" value="<?= isset($password) ? $password : "" ?>">
            <p class=" text-red-500">
                <?= isset($error_password) ? $error_password : "" ?>
            </p>
            <!-- repassword -->
            <input class="w-[350px] text-2xl p-4 text-black my-5 border border-gray-500 rounded-2xl " type="password" placeholder="Nhập lại Mật Khẩu" name="repassword">
            <!-- nút đăng ký -->
            <input class=" mt-5 text-2xl p-4 mb-[15px] w-[350px] text-white bg-black rounded-2xl delay-100 hover:bg-blue-500" type="submit" name="submit" value="Đăng Ký Thành Viên">
        </form>
        <!-- image -->
        <div class="">
            <img class="h-full "  src="view/image/slider01.jpg" alt="">
        </div>
        
    </div>
</div>