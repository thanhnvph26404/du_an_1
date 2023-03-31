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
$listtable =   loadpage_table($start_record, $record_per_page);
// lấy số lượng bản ghi
$count_record = count_table();
// số lượng page
$number_page =  ceil($count_record / $record_per_page);

?>


<script src="https://cdn.tailwindcss.com"></script>
<div class="row">
    <div class="row frmtitle p-2">
        <h1>DANH SÁCH Bàn Hiện có</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai content" id="content">
            <table class="">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên<nav></nav></th>
                        <th>Số lượng bàn</th>
                        <th>Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listtable as $key => $value) : extract($value); ?>
                        <tr>
                            <td><?= $start_record+ $key + 1 ?></td>
                            <td class="pl-[50px]"><?= $name ?></td>
                            <td class="text-center" ><?= $amount ?></td>
                            <td class="text-center">
                            <a class="p-4 bg-red-500 rounded-md text-white hover:bg-red-600" href="table/xoa.php?id=<?= $id ?>" onclick="return confirm('Bạn có muốn Xóa <?= $name ?> không ?')"><button>Xóa</button></a>
                            <a class="p-4 bg-blue-500 rounded-md text-white hover:bg-blue-600" href="index.php?act=suatable&id=<?= $id ?>"><button>Sửa</button> </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
        <!-- nút bấm phân trang -->
        <?php 
            $href= "index.php?act=table";
            include "../model/nutbamphantrang.php";
        ?>

        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa thư mục đã chọn">
            <a href="index.php?act=addtable"><input type="button" value="Nhập thêm"></a>
        </div>

    </div>
</div>


