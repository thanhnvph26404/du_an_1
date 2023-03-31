<?php

if (isset($_SESSION['user'])) {
    header('location:index.php');
  }


if (!isset($_POST['submit']) ) {
    $_SESSION['HTTP_REFERER'] =  $_SERVER["HTTP_REFERER"];
}


if (isset($_POST['submit']) && $_POST['submit'] != "") {
    extract($_POST);
    $listuser = loadall_user();    
    foreach ($listuser as $key => $value) {
        // check email
        if ($email == $value['email']) {
            // check mật khẩu
            if (password_verify($password , $value['password'])) {
                $_SESSION['user'] = $value;
                header("location:". $_SESSION['HTTP_REFERER'] );
            } 
        }
        else{
            $error = "Tài Khoản Hoặc Mật Khẩu Không chính xác";
        }
    }
}


?>

<div class="py-20 block bg-gray-100">
    <div class=" mx-auto w-10/12 grid1 grid-cols-2 border rounded-3xl overflow-auto  bg-white">
        <!-- form đăng nhập -->
        <form class="w-full opacity-90 my-10 flex flex-col justify-center items-center " action="index.php?act=dangnhap" method="post">
            <h1 class="p-4 w-full text-4xl text-center text-black ">Đăng Nhập</h1>
            <!-- báo lỗi đăng nhập thất bại -->
            <p class="text-red-500"><?=isset($error)? $error : "" ?></p>
            <input class="w-[350px] text-2xl p-4 text-black my-5 border border-gray-500 rounded-2xl" type="email" placeholder="Email" name="email">
            <input class="w-[350px] text-2xl p-4 text-black my-5 border border-gray-500 rounded-2xl " type="password" placeholder="Mật Khẩu" name="password">
            <div class="w-[350px] my-3 flex items-center justify-between">
                <label class="hover:text-blue-500 text-black " for="remember">
                    <input type="checkbox" id="remember">
                    Ghi Nhớ Mật Khẩu
                </label>
                <a class="hover:text-blue-500 text-black hover:no-underline" href="index.php?act=quenmk">Quên Mật Khẩu</a>
            </div>
            <a class="w-[350px] mb-5 flex-none flex justify-end hover:text-blue-500 text-black hover:no-underline" href="index.php?act=dangky">Tạo Tài Khoản</a>
            <input class="text-2xl p-4 mb-[15px] w-[350px] text-white bg-black rounded-2xl delay-100 hover:bg-blue-500" type="submit" name="submit" value="Đăng Nhập">
            <a class="text-2xl p-1 bg-stone-100 mb-[40px] w-[350px] border border-gray-500 rounded-2xl hover:no-underline flex justify-center items-center gap-x-1" href="#">
                <img src="view/image/logo-gg.jpg" class="h-[30px]" alt="">
                <p class=" hover:text-red-500 text-black my-auto">Đăng Nhập Với Google</p>
            </a>
        </form>
        <!-- image -->
        <div class="">
            <img class="h-full" src="view/image/slider01.jpg" alt="">
        </div>
    </div>

</div>