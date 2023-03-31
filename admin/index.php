<?php
include "../model/pdo.php";
include "header.php";
include "../model/danhmuc.php";
include "../model/slider.php";
include "../model/sanpham.php";
include "../model/thongke.php";
include "../model/taikhoan.php";
include "../model/lienhe.php";
include "../model/cart.php";
include "../model/datban.php";
include "../model/table.php";
include "../model/binhluan.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                insert_danhmuc($tenloai, $hinh);
                $thongbao = "Thêm thành công !";
            }
            include "danhmuc/add.php";
            break;
        case 'lisdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                update_danhmuc($id, $tenloai, $hinh);
                $thongbao = "Cập nhật thành công !";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
            // controller slider
        case 'addslider':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $status = $_POST['status'];
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                insert_anhbia($hinh, $status);
                $thongbao = "Thêm thành công !";
            }
            include "slider/add.php";
            break;
        case 'xoabia':
            if (($_GET['id']) && ($_GET['id'] > 0)) {
                delete_anhbia($_GET['id']);
            }
            $listanhbia = loadall_anhbia();
            include "slider/list.php";
            break;
        case 'suabia':
            if (($_GET['id']) && ($_GET['id'] > 0)) {
                $ab = loadone_anhbia($_GET['id']);
            }
            include "slider/update.php";
            break;

        case 'listslider':
            $listanhbia = loadall_anhbia();
            include "slider/list.php";
            break;

        case 'updateslider':
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                $status = $_GET['status'];

                update_anhbia($id, "", $status);
                $thongbao = "Cập nhật thành công !";
            }
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $hinh = $_FILES['hinh']['name'];

                $status = $_POST['status'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                update_anhbia($id, $hinh, $status);
                $thongbao = "Cập nhật thành công !";
            }
            $listanhbia = loadall_anhbia();
            include "slider/list.php";
            break;
            // controller san pham

        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }


                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "Thêm thành công !";
            }
            $listdanhmuc = loadall_danhmuc();

            include "sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($tensp, $giasp, $mota, $hinh, $id, $iddm);
                $thongbao = "Cập nhật thành công !";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;

        case 'thongke':
            if (isset($_GET['loc'])) {
                $listthongke2 = loadall_thongke2($_GET['loc']);
            }else{
                $listthongke2 = loadall_thongke2();
            }
            $listthongke = loadall_thongke();
            
            include "thongke/list.php";
            break;

        case 'bieudo':
            $listthongke = loadall_thongke();
            include "thongke/bieudo.php";
            break;
        case 'dskh':
            include "taikhoan/list.php";
            break;
        case 'lienhe':
            include "lienhe/list.php";
            break;
        case '':
            include "";
            break;
        case 'listbill':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listbill = loadall_bill($kyw, 0);
            include "bill/listbill.php";
            break;
        case 'xoabill':
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                delete_bill($id);
                header("location:".$_SERVER["HTTP_REFERER"]);
            }
            break;
        case 'quanlydatban':
            $listbooking = load_all_booking();
            include "quanlydatban/list.php";
            break;
        case 'listdatban':
            include "quanlydatban/list.php";
            break;
        case 'status':
            include "quanlydatban/list.php";
            break;
        case 'detailbill':
            if(isset($_GET['idbill']) && $_GET['idbill']){
                $idbill = $_GET['idbill'];
                $bill = loadone_bill($idbill);
                $billct = loadall_cart($idbill);
            }

            include "bill/detail.php";
            break;
        case 'statusbill':
            if (isset($_POST['update']) && $_POST['update']) {
                if (isset($_GET['id']) && $_GET['id']) {
                    $id = $_GET['id'];
                    $status = $_POST['status'];
                    update_status_bill($id, $status);
                }
            }
            $listbill = loadall_bill('', 0);
            include "bill/listbill.php";
            break;
        case 'binhluan':
            include "binhluan/list.php";
            break;
        case 'table':
            include "table/list.php";
            break;
        case 'addtable':
            include "table/add.php";
            break;
        case 'suatable':
            include "table/sua.php";
            break;
        case '':
            break;
        case '':
            break;
        case '':
            break;
        case '':
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}



include "footer.php";
