<div class="row">
            <div class="row frmtitle">
                <h1>THÊM MỚI MÓN ĂN</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        DANH MỤC<br>
                        <select name="iddm">
                            <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                            ?>
                        </select>   

                    </div>

                    <div class="row mb10">
                        Tên món ăn <br>
                        <input type="text" name="tensp" required>
                    </div>

                    <div class="row mb10">
                        Giá<br>
                        <input type="text" name="giasp" required>
                    </div>

                    <div class="row mb10">
                        Hình ảnh<br>
                        <input type="file" name="hinh" id="" required>
                    </div>

                    <div class="row mb10">
                        Mô tả<br>
                        <textarea name="mota" cols="30" rows="10" required></textarea>
                    </div>



                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>