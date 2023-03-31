<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
                <form action="" method="post">
                    <div class="row mb10 frmdsloai">
                        <table>
                            <tr>
                                <th></th>
                                <th>MÃ LOẠI</th>
                                <th>TÊN LOẠI</th>
                                <th>HÌNH</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    $suadm = "index.php?act=suadm&id=".$id;
                                    $xoadm = "index.php?act=xoadm&id=".$id;
                                    $hinhpath ="../upload/".$img;
                                    if(is_file($hinhpath)){
                                        $hinh = "<img src='".$hinhpath."' height='80'>";
                                    }else{
                                        $hinh = "no photo";
                                    }

                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$hinh.'</td>
                                    <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                                }
                            ?>

                        </table>

                    </div>

                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa thư mục đã chọn">
                        <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                    </div>
                </form>
            </div>
        </div>