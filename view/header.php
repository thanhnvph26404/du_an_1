<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="view/css/base.css">
    <link rel="stylesheet" href="view/css/main.css">
    <link rel="stylesheet" href="view/css/grid.css">
    <link rel="stylesheet" href="view/fonts/BerkshireSwash-Regular.ttf">
    <link rel="stylesheet" href="view/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <div class="restaurant">
        <div class="header">
            <div class="grid wide">
                <div class="header-control">
                    <a href="index.php"><img src="view/image/logo-Sunhomes-BBQ-01.png" alt="" class="logo height-center"></a>
                    <ul class="navv height-center">
                        <li class="navv-item"><a class="navv-item-link" href="index.php">Trang chủ</a></li>
                        <li class="navv-item"><a class="navv-item-link" href="index.php?act=gioi_thieu">Giới thiệu</a></li>
                        <li class="navv-item"><a class="navv-item-link" href="index.php?act=dat_ban">Đặt bàn</a></li>
                        <li class="navv-item"><a class="navv-item-link" href="index.php?act=thuc_don">Thực đơn</a></li>
                        <li class="navv-item"><a class="navv-item-link" href="">Tin tức</a></li>
                        <li class="navv-item"><a class="navv-item-link" href="index.php?act=lienhe">Liên hệ</a></li>
                        <li class="navv-item"><a class="navv-item-link" href="index.php?act=viewcart"><i class="nav-icon fa-solid fa-cart-shopping"></i></a>
                        


                     </li>
                        <?php
                        if (isset($_SESSION['user'])) {
                            extract($_SESSION['user']);

                        ?>
                            <li class="navv-item">
                                <a class="navv-item-link" href="index.php?act=dangnhap" class="arrow"><i class="nav-icon fa-solid fa-caret-down"></i></a>
                                <ul class="sub-navv"> 
                                    <li class="sub-navv-item"><a href="index.php?act=thongtin" class="sub-navv-link">Trang cá nhân</a></li>
                                    <?php if ($rol == 1) { ?>
                                        <li class="sub-navv-item"><a href="admin/index.php" class="sub-navv-link">Đi tới trang quản trị</a></li>
                                    
                                    <?php } ?>
                                    <li class="sub-navv-item"><a href="view/taikhoan/dangxuat.php" class="sub-navv-link">Đăng Xuất</a></li>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li class="navv-item"><a class="navv-item-link" href="index.php?act=dangnhap"><i class="nav-icon fa-solid fa-right-to-bracket"></i></a></li>
                            <li class="navv-item"><a class="navv-item-link" href="index.php?act=dangky">Đăng ký</a></li>
                        <?php } ?>

                        <li class="navv-item"><a href="" class="hotline">Hotline: 0984966806</a></li>
                    </ul>
                </div>
            </div>
        </div>