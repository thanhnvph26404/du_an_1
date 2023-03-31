<?php

    if(is_array($ab)){
    extract($ab);

    }
?>
<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updateslider" method="post" enctype="multipart/form-data">
                    <div class="row mb20">
                        Mã loại<br>
                        <input type="text" name="maloai" disabled placeholder="auto number">
                    
                    </div>

                    <div class="row mb10">
                        Hình ảnh<br>
                        <input type="file" name="hinh"  value = "<?=$img?>">
                        <img style="max-height: 200px;" src="../upload/<?=$img?>" alt="">
                    </div>
                    <div class="row mb10">
                        Trạng thái<br>
                        
                        <?php
                        if($status == 0){
                            echo '<input type="radio" name="status" value="1" > Sử dụng
                            <input type="radio" name="status" value="0" checked> Không sử dụng';
                        }else{
                            echo '<input type="radio" name="status" value="1" checked> Sử dụng
                            <input type="radio" name="status" value="0"> Không sử dụng';
                        }
                        ?>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                        <input type="submit" name= "capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=updateslider"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>  