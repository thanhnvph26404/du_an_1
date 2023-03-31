<?php

$id_user = $_SESSION['user']['id'];
$list_comment = select_comment_by_user($id_user);

$list_bill = loadpage_bill("", $id_user);

?>

<div class="w-full">
    <h1 class="text-4xl text-black ">THÔNG TIN CHUNG</h1>
    <div class="border-b-4 border-red-500 w-[60px] mb-10"></div>
    <div class="flex items-center gap-x-24">
        <!-- tiêu đề -->
        <h3 class="p-1 mb-10 border-l-4 border-red-500 text-3xl text-black ">Thông tin tài khoản</h3>
        <a href="index.php?act=thongtintk" class="p-1 pb-10 text-blue-500 hover:no-underline">Chỉnh Sửa</a>
    </div>

    <!-- form thông tin -->
    <div class="border border-black p-10 w-[350px] mb-10">
        <!-- tên -->
        <div class="mb-3">
            <div class="w-[150px]  float-left">Họ Và Tên </div>
            <div class=""><?= $name ?></div>
        </div>
        <!-- email -->
        <div class="mb-3">
            <div class="w-[150px]  float-left">Email</div>
            <div class=""><?= $email ?></div>
        </div>
        <!-- số điện thoại -->
        <div class="mb-3">
            <div class="w-[150px]  float-left">Số Điện Thoại</div>
            <div class=""><?= $tel ?></div>
        </div>
    </div>

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
                    <td><?= $key + 1 ?></td>
                    <td class="p-2 ">PH<?= $id ?></td>
                    <td> <?= loadall_cart_count($id) ?></td>
                    <td><?= $total ?></td>
                    <td><?= $time . $date ?></td>
                    <td><?= status_bill($status) ?></td>
                    <td class="w-[180px] text-blue-500  "><a class="hover:no-underline p-12 hover:text-purple-600  " href="index.php?act=billct&id=<?= $id ?>">Xem Chi Tiết</a> </td>
                    <td>
                        <?php if ($status == 0) { ?>
                            <a href="admin/index.php?act=xoabill&id=<?= $id ?>" class="text-blue-500 hover:no-underline hover:text-red-500" onclick="return confirm('Bạn có muốn Hủy Đơn Hàng không?')">Hủy Đơn</a>
                        <?php } ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <!-- bình luận -->
    <div class="flex items-center gap-x-24">
        <!-- tiêu đề -->
        <h3 class="p-1 w-[500px] mb-10 border-l-4 border-red-500 text-3xl text-black ">Bình luận</h3>
        <a href="index.php?act=binhluan" class="p-1 pb-10 text-blue-500 hover:no-underline ">Xem Tất Cả</a>
    </div>
    <div class="border-b-2 border-red-500 mb-10"></div>
    <table>
        <?php if ($list_comment !== []) {
            echo "
        <thead>
            <tr>
                <th></th>
                <th>Tên Sản Phẩm</th>
                <th>Thời Gian</th>
                <th>Nội Dung</th>
                <th>Thao Tác</th>
            </tr>
        </thead>";
        } ?>
        <tbody>
            <?php foreach ($list_comment as $key => $value) : extract($value) ?>
                <tr class="border-t border-stone-100">
                    <td class="p-2 "><img src="upload/<?= $img ?>" alt="" class="p-2 max-w-[100px] max-h-[100px]"></td>
                    <td class="w-[250px] text-blue-500  "><a class="hover:no-underline p-12 hover:text-purple-600  " href="index.php?act=chitiet_sp&id=<?= $id ?>"><?= $name ?></a> </td>
                    <td class="p-2 w-[300px]"><?= $time ?></td>
                    <td class="p-2 max-w-[400px] overflow-hidden"><?= $content ?> </td>
                    <td><a class="p-4 bg-red-500 rounded-md text-white hover:bg-red-600 hover:text-white" href="admin/binhluan/xoa.php?id=<?= $id_comment ?>" onclick="return confirm('Bạn có muốn Xóa liên hệ không ?')"><button>Xóa</button></a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>