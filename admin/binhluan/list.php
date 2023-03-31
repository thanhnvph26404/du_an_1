<?php
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
$list_comment = loadpage_comment_all($start_record, $record_per_page);
// lấy số lượng bản ghi
$count_record = count_comment();
// số lượng page
$number_page =  ceil($count_record / $record_per_page);

?>


<script src="https://cdn.tailwindcss.com"></script>
<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH Liên Hệ</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai content" id="content">
            <table>
                <thead>
                    <tr>
                        <th>stt</th>
                        <th>ảnh sp</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Tên người dùng</th>
                        <th>Thời Gian</th>
                        <th>Nội Dung</th>
                        <th>Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($list_comment as $key => $value) : extract($value) ?>
                <tr class="border-t border-stone-100">
                    <td><?= $start_record+ $key + 1 ?></td>
                    <td class="p-2 "><img src="../upload/<?= $img ?>" alt="" class="p-2 max-w-[100px] max-h-[100px]"></td>
                    <td><?=$name_pro?></td>
                    <td><?=$name_user?></td>
                    <td class="p-2 w-[150px]"><?= $time ?></td>
                    <td class="p-2 max-w-[400px] overflow-hidden"><?= $content?> </td>
                    <td><a class="p-4 bg-red-500 rounded-md text-white hover:bg-red-600" href="binhluan/xoa.php?id=<?= $id_comment ?>" onclick="return confirm('Bạn có muốn Xóa liên hệ không ?')"><button>Xóa</button></a></td>
                </tr>
            <?php endforeach ?>
                </tbody>
            </table>

        </div>
        <!-- nút bấm phân trang -->
        <?php
        $href = "index.php?act=binhluan";
        include "../model/nutbamphantrang.php";
        ?>

        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa thư mục đã chọn">
            <a href=""><input type="button" value="Nhập thêm"></a>
        </div>

    </div>
</div>