<?php 
    $listuser = loadall_user();


?>
<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH tài khoản</h1>
            </div>
            <div class="row frmcontent">
                <form action="" method="post">
                    <div class="row mb10 frmdsloai">
                        <table>
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Email</th>
                                <th>Mật Khẩu</th>
                                <th>Tên</th>
                                <th>Số Điện Thoại</th>
                                <th>thao Tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($listuser as $key => $value): extract($value); ?>
                                <tr>
                                    <td><?=$key+1?></td>
                                    <td><?=$email?></td>
                                    <td>******</td>
                                    <td><?=$name?></td>
                                    <td><?=$tel?></td>
                                    <td><a href="taikhoan/xoa.php?id=<?=$id?>"><button>Xóa</button></a></td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>

                    </div>

                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa thư mục đã chọn">
                        <a href=""><input type="button" value="Nhập thêm"></a>
                    </div>
                </form>
            </div>
        </div>