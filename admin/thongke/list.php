<div class="row">
<div class="row frmtitle">
        <h1>THỐNG KÊ SẢN PHẨM THEO ĐƠN HÀNG</h1>
        </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                <th>Tên Món</th>
                <div class="tenmon">
                    <th><a href="index.php?act=thongke&loc=tongtien" style="text-decoration: none;color:black">TỔNG TIỀN</a></th>
                    <th><a href="index.php?act=thongke&loc=view" style="text-decoration: none;color:black">VIEW</a></th>
                    <th><a href="index.php?act=thongke&loc=soluong" style="text-decoration: none;color:black">  SỐ LƯỢNG</a></th>
                    </div>
                    </tr>
                <?php
                    foreach ($listthongke2 as $thongke ) {
                        extract($thongke);
                        echo '<tr>
                            <td>'.$name.'</td>
                            <td>'.$tongtien.'</td>
                            <td>'.$view.'</td>
                            <td>'.$soluong.'</td>
                        
                        </tr>';
                    }
                
                ?>    
            </table>

    </div>

            
    <div class="row frmtitle">
        <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                </tr>
                <?php
                    foreach ($listthongke as $thongke ) {
                        extract($thongke);
                        echo '<tr>
                            <td>'.$madm.'</td>
                            <td>'.$tendm.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$maxprice.'</td>
                            <td>'.$minprice.'</td>
                        
                        </tr>';
                    }
                
                ?>    
            </table>
            


        </div>

        
        
    </div>
    <div class="row mb10">
        <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
        </div>

    
</div>