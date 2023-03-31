<?php

$id_user = $_SESSION['user']['id'];
// lấy page hiện tại 
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
// số lượng bản ghi trên 1 trang 
$record_per_page = 10;
// bản ghi bắt đầu
$start_record = ($page - 1) * $record_per_page;
// lấy bản ghi theo page
$list_comment =   select_comment_by_user($id_user,$start_record, $record_per_page);
// lấy số lượng bản ghi
$count_record = count_comment();
// số lượng page
$number_page =  ceil($count_record / $record_per_page);
// biến khi chọn page nút sẽ có màu sanh
$focus=" bg-blue-500 hover:bg-blue-500";


?>

<h1 class="text-4xl text-black ">BÌNH LUẬN CỦA TÔI</h1>
<div class="border-b-4 border-red-500 w-[60px] mb-10"></div>

<table>
        <?php if ($list_comment !== []) {
            echo "
        <thead>
            <tr>
                <th>stt</th>
                <th></th>
                <th>Tên Sản Phẩm</th>
                <th>Thời Gian</th>
                <th>Nội Dung</th>
                <th>Thao Tác</th>
            </tr>
        </thead>";
        }else echo "chưa có bình luận nào";
        ?>
        <tbody>
            <?php foreach ($list_comment as $key => $value) : extract($value) ?>
                <tr class="border-t border-stone-100">
                    <td><?= $start_record+ $key + 1 ?></td>
                    <td class="p-2 "><img src="upload/<?= $img ?>" alt="" class="p-2 max-w-[100px] max-h-[100px]"></td>
                    <td class="w-[250px] text-blue-500  "><a  class="hover:no-underline p-12 hover:text-purple-600  " href="index.php?act=chitiet_sp&id=<?=$id?>"><?= $name ?></a> </td>
                    <td class="p-2 w-[300px]"><?= $time ?></td>
                    <td class="p-2 max-w-[400px] overflow-hidden"><?= $content?> </td>
                    <td><a class="p-4 bg-red-500 rounded-md text-white hover:bg-red-600 hover:text-white" href="admin/binhluan/xoa.php?id=<?= $id_comment ?>" onclick="return confirm('Bạn có muốn Xóa liên hệ không ?')"><button>Xóa</button></a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <!-- nút bấm phân trang -->
        <?php 
            $href= "index.php?act=lienhe";
            include "model/nutbamphantrang.php";
        ?>




