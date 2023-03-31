<form action="index.php?act=listbill" method="post">
    <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
    <input type="submit" name="listok" value="Go">
</form>

<div class="row frmcontent">
    <div class="row mb10 frmdsloai">
        <a href="index.php?act=statusbill&id='.$id.'"></a>
        <table>
            <tr>
                <th></th>
                <th>MÃ ĐƠN HÀNG</th>
                <th>KHÁCH HÀNG</th>
                <th>SỐ LƯỢNG</th>
                <th>HÌNH THỨC GIAO HÀNG</th>
                <th>GHI CHÚ</th>
                <th>GIÁ TRỊ ĐƠN HÀNG</th>
                <th>TRẠNG THÁI HIỆN TẠI</th>
                <th>ĐIỀU KHIỂN</th>
                <th>NGÀY NHẬN </th>
                <th>action</th>
            </tr>

            
            <?php

            foreach ($listbill as $bill) {
                extract($bill);
                $detail = '<a style="display: inline-block; margin-bottom: 10px;" href="index.php?act=detailbill&idbill='.$id.'">Chi tiết</a>';
                $action = '<form style="display: flex;" action="index.php?act=statusbill&id=' . $id . '" method="post">
                                    <select name="status" id="">
                                            <option value="0">Đang xử lý</option>
                                            <option value="1">Đang giao</option>
                                            <option value="2">Giao hàng thành công</option>
                                        </select>
                                        <input style="display: block; margin: 0 auto;" type="submit" name="update" value="submit">
                                    </form>';
                $xoabill = "index.php?act=xoabill&id=" . $bill['id'];
                if ($status == 0) {
                    $status = 'Đang xử lý';
                    $action = '<form style="display: flex;" action="index.php?act=statusbill&id=' . $id . '" method="post">
                                    <select name="status" id="">
                                            <option  value="0">Đang xử lý</option>
                                            <option value="1">Đang giao</option>
                                            <option value="2">Giao hàng thành công</option>
                                        </select>
                                        <input style="display: block; margin: 0 auto;" type="submit" name="update" value="submit">
                                    </form>';
                } else if ($status == 1) {
                    $status = 'Đang giao';
                    $action = '<form style="display: flex;" action="index.php?act=statusbill&id=' . $id . '" method="post">
                                    <select name="status" id="">
                                    <option  value="1">Đang giao</option>
                                            <option value="0">Đang xử lý</option>
                                            
                                            <option value="2">Giao hàng thành công</option>
                                        </select>
                                        <input style="display: block; margin: 0 auto;" type="submit" name="update" value="submit">
                                    </form>';
                } else {
                    $status = 'Giao thành công';
                    $action = '<form style="display: flex;" action="index.php?act=statusbill&id=' . $id . '" method="post">
                                    <select name="status" id="">
                                    <option value="2">Giao hàng thành công</option>
                                            <option value="0">Đang xử lý</option>
                                            <option value="1">Đang giao</option>
                                           
                                        </select>
                                        <input style="display: block; margin: 0 auto;" type="submit" name="update" value="submit">
                                    </form>';
                }
                $countsp = loadall_cart_count($bill["id"]);
                echo '<tr>
                                            <td><input type="checkbox" id=""></td>
                                            <td>' . $id . '</td>
                                            <td>' . $name . '</td>
                                            
                                            <td>' . $countsp . '</td>
                                            <td>' . $ship . '</td>
                                            <td>' . $note . '</td>
                                            <td>' . $total . '</td>
                                            <td>' . $status . '</td>
                                            <td>' . $action . '</td>
                                            <td>' . $date . '/' . $time . '</td>
                                            <td>'.$detail.'
                                             <a href="'. $xoabill .'"><input type="button" value="Xóa"></a></td>
                                        </tr>';
            }
            ?>

        </table>

    </div>

    <div class="row mb10">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa thư mục đã chọn">
        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
    </div>
</div>