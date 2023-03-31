
<div class="banner"><img src="view/image/banner-234.jpg" alt="" class="banner-img"></div>
<h1 class="menu-title">THỰC ĐƠN TẠI HÀ NỘI</h1>
<div class="list-menu-link">
    <a href="#" class="menu-link active">Menu</a>
    <div class="center"></div>
    <a href="#" class="menu-link">Đặt Món</a>
</div>
<div class="grid wide">
    <div class="row border1">
        <div class="col l-12">
            <div class="list-menu">
                <em>* Áp dụng cho tất cả các ngày trong tuần</em>
                <div class="row">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);    
                        echo'
                            <div class="col l-4 ">
                            <div class="category-img">
                                <img src="view/image/'.$img.'" alt="">   
                            </div>
                            <h3 class="category-title">'.$name.'</h3>
                            <ul class="category-products">

                            ';
                            $listsanpham = loadall_sanpham_cungloai($id);
                            foreach ($listsanpham as $key => $value){
                            extract($value);

                        echo'<li class="category-item"><i class=" check-icon fa-sharp fa-solid fa-check"></i><a href="index.php?act=chitiet_sp&id='.$id.'" class="category-item-link">'.$name.'</a></li>';
                        }

                        echo '
                        
                            
                            
                        </ul>
                    </div>

                        ';
                    }
                    
                    
                    ?>

                </div>
            </div>
        </div>
    </div>
    <div class="row border1 hide">
        <div class="col l-12">
        <em>* Áp dụng cho tất cả các ngày trong tuần</em>
        </div>
        <?php
        $sanphams = loadall_sanpham('',0);
        foreach ($sanphams as $sp) {
            extract($sp);
            
            echo '<div class="col l-3">
            <a href="index.php?act=chitiet_sp&id='.$id.'" style="text-decoration: none;">
                <form action="index.php?act=addtocart" method="POST" enctype="multipart/form-data">
                    <div class="product-other">
                        <img src=upload/'.$img.' alt="" class="other-img">
                    </div>
                    <h5 class="other-name">'.$name.'</h5>
                    <h6 class="other-price">'.$price.'đ</h6>
                    <input type="text" name="id" hidden value="'.$id.'">
                    <input type="text" name="name" hidden value="'.$name.'">
                    <input type="number" name="price" hidden value="'.$price.'">
                    <input type="text" name="img" hidden value="upload/'.$img.'">
                    
                    <input type="number" name="amount" hidden value="1">
                    <input type="submit" value="Đặt ngay" name="addtocart" class="submit-order">
                </form>
            </a>
        </div>';
        }
        ?>
    </div>
</div>
<script>
    var boxs = document.querySelectorAll('.row.border1');
    console.log(boxs);
    var active = document.getElementsByClassName("menu-link");
    active[0].onclick = function() {
        active[0].classList.add('active');
        active[1].classList.remove('active');
        boxs[1].classList.add('hide');
        boxs[0].classList.remove('hide');
        
    }
    active[1].onclick = function() {
        active[1].classList.add('active');
        active[0].classList.remove('active');
        boxs[0].classList.add('hide');
        boxs[1].classList.remove('hide');
    }
</script>