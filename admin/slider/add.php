<div class="row">
            <div class="row frmtitle">
                <h1>THÊM MỚI ẢNH BÌA</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addslider" method="post" enctype="multipart/form-data">
                    <div class="row mb20">
                        Số Thứ Tự<br>
                        <input type="text" name="maloai" disabled placeholder="auto number">
                    </div>

                    <div class="row mb10">
                        Hình ảnh<br>
                        <input type="file" name="hinh" id="" required>
                    </div>

                    <div class="row mb10">
                        Trạng thái<br>
                        <input type="radio" name="status" value="1" checked> Sử dụng
                        <input type="radio" name="status" value="0"> Không sử dụng
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI ẢNH">
                        <a href="index.php?act=listslider"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>