<div class="row">
            <div class="row frmtitle mb">
                <h1>DANH SÁCH LOẠI BÀN</h1>
            </div>
            <form action="index.php?act=listsp" method="post">
                <!-- <input type="text" name="kyw">
                <select name="iddm">
                        <option value="0" selected> Tất cả </option>
                      
                </select>
                <input type="submit" name ="listok" value ="Tìm"> -->
            </form>
            <div class="row frmcontent">
                    <div class="row mb10 frmdsloai">
                        
                        <table>
                            <tr>
                                <th></th>
                                <th>MÃ LOẠI</th>
                                <th>TÊN  KHÁCH HÀNG</th>
                                <th>SỐ ĐIỆN THOẠI</th>
                                <th>LOẠI BÀN</th>
                                <th>NGÀY ĐẶT BÀN</th>
                                <th>NGÀY NHẬN BÀN</th>
                                <th>BUỔI</th>
                                <th>CHECK IN</th>
                                <th>SỐ LƯỢNG</th>
                                
                                <th>TRẠNG THÁI</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach($listbooking as $booking){
                                    extract($booking);
                                    $suasp = "index.php?act=suasp&id=".$id;
                                    $xoasp = "index.php?act=xoasp&id=".$id;
                                    
                                    echo '<tr>
                                            <td><input type="checkbox" id=""></td>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$tel.'</td>
                                            <td>'.$id_table.'</td>
                                            <td>'.$book_date.'</td>
                                           
                                            <td>'.$date.'</td>
                                            <td>'.$session.'</td>
                                            <td>'.$time.'</td>
                                            <td>'.$quantity.'</td>
                                            <td>'.$status.'</td>
                                            <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
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
        </div>