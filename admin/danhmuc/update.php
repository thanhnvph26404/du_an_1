<?php

    if(is_array($dm)){
    extract($dm);

    }
?>

<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatedm" method="post" enctype="multipart/form-data">
                    <div class="row mb20">
                        Mã loại<br>
                        <input type="text" name="maloai" disabled placeholder="auto number">
                    </div>

                    <div class="row mb10">
                        Tên loại<br>
                        <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
                    </div>

                    <div class="row mb10">
                        Hình ảnh<br>
                        <input type="file" name="hinh" id="" required>
                    </div>

                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                        <input type="submit" name= "capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=lisdm"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>  