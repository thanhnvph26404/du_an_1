<?php 
// lấy id user
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
$list_bill =   loadpage_bill("",$id_user,$start_record, $record_per_page);
// lấy số lượng bản ghi
$count_record = count_bill();
var_dump($count_record);
// số lượng page
$number_page =  ceil($count_record / $record_per_page);
// biến khi chọn page nút sẽ có màu sanh
$focus=" bg-blue-500 hover:bg-blue-500";

?>

<h1 class="text-4xl text-black ">ĐƠN HÀNG CỦA BẠN</h1>
<div class="border-b-4 border-red-500 w-[60px] mb-10"></div>
<!-- đơn hàng -->
<div class="flex items-center gap-x-24">
        <!-- tiêu đề -->
        <h3 class="p-1 w-[500px] mb-10 border-l-4 border-red-500 text-3xl text-black ">Đơn Hàng</h3>
        <a href="index.php?act=donhang" class="p-1 pb-10 text-blue-500 hover:no-underline ">Xem Tất Cả</a>
    </div>
    <div class="border-b-2 border-red-500 mb-10"></div>
    <table class="table w-full">
    <?php if ($list_bill !== []) {
            echo "
        <thead>
            <tr>
                <th>STT</th>
                <th>MÃ Đơn Hàng</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th>Thời Gian</th>
                <th>Trang Thái</th>
                <th>Chi tiết đơn hàng</th>
                <th>Hủy Đơn</th>
            </tr>
        </thead>";
        } ?>
        <tbody>
            <?php foreach ($list_bill as $key => $value) : extract($value) ?>
                <tr class="border-t border-stone-100">
                    <td><?= $start_record+ $key + 1 ?></td>
                    <td class="p-2 ">PH<?= $id ?></td>
                    <td> <?= loadall_cart_count($id) ?></td>
                    <td><?= $total ?></td>
                    <td><?= $time . $date ?></td>
                    <td><?= status_bill($status) ?></td>
                    <td class="w-[180px] text-blue-500  "><a  class="hover:no-underline p-12 hover:text-purple-600  " href="index.php?act=billct&id=<?=$id?>">Xem Chi Tiết</a> </td>
                    <td>
                    <?php if ($status==0) { ?>
                       <a href="admin/index.php?act=xoabill&id=<?=$id?>" class="text-blue-500 hover:no-underline hover:text-red-500"  onclick="return confirm('Bạn có muốn Hủy Đơn Hàng không?')">Hủy Đơn</a>
                   <?php } ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>


<!-- nút bấm phân trang -->
        <?php 
            $href= "index.php?act=donhang";
            include "model/nutbamphantrang.php";
        ?>