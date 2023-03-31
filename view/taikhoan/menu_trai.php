<?php
// lấy tên user
$name =$_SESSION['user']['name'];
$focus = "border-l-4 border-red-500 bg-slate-200";

?>
<div class="w-3/12 flex-none">
    <div class="bg-black p-2 max-h-[90px] h-full mb-10 ">
        <!-- ảnh đại diện -->
        <img src="view/image/none-avatar.png" class="max-w-[80px] float-left" alt="">
        <div class="text-stone-200 mt-5">Tài khoản của : </div>
        <div class="text-white max-w-[full-80px] overflow-hidden"><?= $name?></div>
    </div>
    <!-- menu ngang -->
    <nav class="">
        <ul>
            <li><a href="index.php?act=thongtin" class=" p-5 block bg-stone-100 hover:no-underline hover:bg-slate-200 <?php if ($act== "thongtin") { echo $focus;}  ?>  "><i class="fas fa-tachometer-alt-fast px-2" ></i>Thông Tin Chung</a></li>
            <li><a href="index.php?act=thongtintk" class="p-5 block bg-stone-100 hover:no-underline hover:bg-slate-200 <?php if ($act== "thongtintk") { echo $focus;}  ?> "><i class="fa fa-info-circle px-2" ></i>Thông Tin Tài Khoản</a></li>
            <li><a href="index.php?act=giohang" class="p-5 block bg-stone-100 hover:no-underline hover:bg-slate-200 <?php if ($act== "giohang") { echo $focus;}  ?> "><i class="fas fa-shopping-cart px-2" ></i>Giỏ hàng</a></li>
            <li><a href="index.php?act=donhang" class="p-5 block bg-stone-100 hover:no-underline hover:bg-slate-200 <?php if ($act== "donhang") { echo $focus;}  ?> "><i class="fas fa-box-open px-2" ></i>Đơn Hàng</a></li>
            <li><a href="index.php?act=datban" class="p-5 block bg-stone-100 hover:no-underline hover:bg-slate-200 <?php if ($act== "datban") { echo $focus;}  ?> "><i class="fas fa-bell px-2" ></i>Đặt Bàn</a></li>
            <li><a href="index.php?act=binhluan" class="p-5 block bg-stone-100 hover:no-underline hover:bg-slate-200 <?php if ($act== "binhluan") { echo $focus;}  ?> "><i class="fa fa-comments px-2" ></i>Bình Luận</a></li>
            <li><a href="index.php?act=doimk" class="p-5 block bg-stone-100 hover:no-underline hover:bg-slate-200 <?php if ($act== "doimk") { echo $focus;}  ?> "><i class="fa fa-lock px-2" ></i>Đổi Mật Khẩu</a></li>
            <li><a href="index.php?act=dangxuat" class="p-5 block bg-stone-100 hover:no-underline hover:bg-slate-200 "><i class="fa fa-sign-out px-2" ></i>Thoát</a></li>      
        </ul>
    </nav>
</div>