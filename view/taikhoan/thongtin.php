<div class="flex container my-10 gap-x-10 mb-24">

    <?php

    // nếu không có tài khoản thì đẩy về trang chủ
    if (!isset($_SESSION['user'])) {
        header('location:index.php');
    }
    //  menu trai
    include "view/taikhoan/menu_trai.php";
    // nội dung
    echo "<div class='w-full '>";
    if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'thongtin':
                include "view/taikhoan/thongtinchung.php";
                break;
            case 'thongtinchung':
                include "view/taikhoan/thongtinchung.php";
                break;
            case 'donhang':
                include "view/taikhoan/bill.php";
                break;
            case 'giohang':
                include "view/cart/viewcart.php";
                break;
            case 'thongtintk':
                include "view/taikhoan/thongtintk.php";
                break;
            case 'doimk':
                include "view/taikhoan/doimk.php";
                break;
            case 'binhluan':
                include "view/taikhoan/binhluan.php";
                break;
            case 'billct':
                $idbill=$_GET['id'];
                $bill = loadone_bill($idbill);
                $billct = loadall_cart($idbill);
                include "view/cart/billconfirm.php";
                break;
            case 'value':
                # code...
                break;
            case 'value':
                # code...
                break;
            case 'value':
                # code...
                break;
            case 'value':
                # code...
                break;
            case 'value':
                # code...
                break;
            case 'value':
                # code...
                break;
            case 'value':
                # code...
        }
    } else {
        include "view/taikhoan/thongtinchung.php";
    }
    echo "</div>";
    ?>
    

</div>