 <!-- slide -->
 <div class="slider">
     <?php
        $sliders = load_anhbia_status();
        ?>
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
             <?php
                foreach ($sliders as $key => $value) {
                    ?>
                   <li data-target="#myCarousel" data-slide-to="<?=$key?>" class="<?php if($key==0){echo 'active';}?>"></li>
                   <?php
                }
                ?>
             <!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li> -->
         </ol>

         <!-- Wrapper for slides -->
         <div class="carousel-inner">
             <?php
                foreach ($sliders as $key => $value) {
                    extract($value);
                    ?>
                    <div  class="item <?php if($key==0){echo 'active';}?>">
                        <img src="view/image/<?=$img?>" style="position: relative; top: -80px;" alt="Los Angeles">
                    </div>
                    <?php
                    
                }
                ?>
             <!-- <div class="item active">
                 <img src="view/image/slider01.jpg" style="position: relative; top: -80px;" alt="Los Angeles">
             </div>

             <div class="item">
                 <img src="view/image/SLIDER2.jpg" style="position: relative; top: -80px;" alt="Chicago">
             </div>

             <div class="item">
                 <img src="view/image/slider3.jpg" style="position: relative; top: -80px;" alt="New York">
             </div>
             <div class="item">
                 <img src="view/image/slider4.jpg" style="position: relative; top: -80px;" alt="New York">
             </div> -->
         </div>

         <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left"></span>
             <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" data-slide="next">
             <span class="glyphicon glyphicon-chevron-right"></span>
             <span class="sr-only">Next</span>
         </a>
     </div>
 </div>
 <img src="view/image/bang-gia-01-1024x165.png" alt="" class="list-price">
 <div class="grid wide">
     <div class="row">
         <div class="col l-6">
             <h1 class="title">Sun Homes BBQ</h1>
             <p class="text-content"><strong>Sun Homes BBQ</strong>(Quán thịt nướng Hàn Quốc) sẽ đưa bạn đến
                 Seoul, nơi những con phố bình dị, những quán ăn dân dã đã trở nên quen thuộc và gắn bó với người
                 dân xứ Hàn. Nếu đã một lần thưởng thức thịt nướng tại <strong>Sun Homes BBQ</strong>, bạn sẽ
                 không thể quên được hương vị “ngất ngây” của những món sườn non bò Mỹ, nạc vai bò Mỹ, dẻ sườn
                 tươi…. khi hòa quyện vào với các loại gia vị đặc trưng của xứ sở Kimchi đã trở nên hấp dẫn đến
                 thế nào. </p>
             <p class="text-content">Bí quyết của <strong>Sun Homes BBQ</strong> nằm ở nước sốt tẩm ướp thịt được
                 chế biến từ nguyên liệu hoàn toàn tự nhiên, theo công thức bí truyền, do Bếp Trưởng <strong>Park
                     Sung Min</strong> hơn 40 năm kinh nghiệm nghiên cứu và chế biến. <strong>Sun Homes
                     BBQ</strong> có 2 dạng thực đơn để Quý Khách lựa chọn là: <strong>Chọn Combo</strong> và
                 <strong>Gọi Món</strong>.
             </p>
         </div>
         <div class="col l-6">
             <div class="space-between">
                 <div class="intro"><img class="intro-img" src="view/image/menu_trang_chu_xeo_xeo_gogi.png" alt="">
                     <a href="" class="order-link"><i class="order-icon fa-sharp fa-solid fa-star"></i><span>Chọn
                             combo</span></a>
                 </div>
                 <div class="intro"><img class="intro-img" src="view/image/lau2-1.png" alt="">
                     <a href="" class="order-link" style="min-width: 150px;"><i class="order-icon fa-sharp fa-solid fa-heart"></i><span>gọi món nướng</span></a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="menu">
     <div class="grid wide">
         <div class="row">
             <div class="col l-6 menu-mt">
                 <div class="row">
                     <div class="col l-6">
                         <img src="view/image/1212.jpg" alt="" class="menu-img">
                         <img src="view/image/4534545345.jpg" alt="" class="menu-img">
                     </div>
                     <div class="col l-6">
                         <img src="view/image/fzn_0496_ll-900x598-300x199.jpg" alt="" class="menu-img">
                         <img src="view/image/fzn_0370_ll12-1.jpg" alt="" class="menu-img">
                     </div>
                 </div>
             </div>
             <div class="col l-6 menu-mt">
                 <h1 class="title menu-color">Menu</h1>
                 <p class="text-content">Hơn 200 món ăn được chắt lọc từ Tinh hoa ẩm thực Hàn Quốc với mức giá
                     chỉ từ 69.000 cùng nhiều combo và set bộ hấp dẫn đều có trong menu của King BBQ. Ngoài ra
                     các bạn còn được thưởng thức những món ăn đặc trưng và nổi tiếng trong văn hoá ẩm thực của
                     Hàn Quốc do chính tay đàu bếp người Hàn Quốc chế biến.</p>
                 <a href="" class="button-link button-link-menu">
                     <i class="icon-button fa-solid fa-bag-shopping"></i>Thực đơn
                 </a>
             </div>
         </div>
     </div>
 </div>
 <div class="grid wide ">
     <div class="row">
         <div class="col l-6">
             <h1 class="title">Restaurant</h1>
             <p class="text-content">Khi nói đến Hàn Quốc, ẩm thực là nét văn hóa đặc trưng không thể bỏ qua và
                 thịt nướng Hàn Quốc luôn được “truyền tai” về độ tươi ngon, đậm đà qua những trang cẩm nang du
                 lịch hay những bộ phim Hàn gây bão</p>
             <p class="text-content">Hệ thống <strong>Sun Homes BBQ</strong> hiện có 17 nhà hàng trong đó 7 nhà
                 hàng chuyên về Buffet tự chọn (Buffet) và 10 nhà hàng chuyên về gọi món (Alacarte).
             </p>
             <p class="text-content">Hãy lựa chọn địa điểm gần bạn nhất và liên hệ đặt bàn ngay nhé!
             </p>
             <a href="" class="button-link button-link-menu button-link-white">
                 <i class="icon-button fa-solid fa-magnifying-glass"></i>Nhà hàng
             </a>
         </div>
         <div class="col l-6">
             <div class="space-between">
                 <div class="intro"><img class="intro-img" src="view/image/nha-hang-king-bbq-1-2-679x1024.jpg" alt="">

                 </div>
                 <div class="intro"><img class="intro-img" src="view/image/nha-hang-king-bbq-1-1-679x1024.jpg" alt="">

                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="register-care">
     <form action="" class="register-care-form ">
         <h2 class="register-care-title z-ind-2" style="margin-top: 0;">Đăng ký để nhận ưu đãi hàng tháng tới 30%
             từ Sun Homes BBQ</h2>
         <div class="care-email z-ind-2">
             <input type="text" name="" class="care-input" placeholder="Nhập địa chỉ email...">
             <input type="button" name="" value="Đăng ký ngay" class="care-btn">
         </div>
     </form>
 </div>
 <div class="grid wide ">
     <div class="row">
         <div class="col l-6">
             <div class="space-between">
                 <div class="korea"><img class="korea-img" src="view/image/213854-set-menu-han-quoc-hap-dan-danh-cho-2-nguoi-suon-nuong-han-quoc.jpg" alt="">
                 </div>
             </div>
         </div>
         <div class="col l-6">
             <h1 class="title">Korea Cousine</h1>
             <p class="text-content">Khi nói đến Hàn Quốc, ẩm thực là nét văn hóa đặc trưng không thể bỏ qua và
                 thịt nướng Hàn Quốc luôn được “truyền tai” về độ tươi ngon, đậm đà qua những trang cẩm nang du
                 lịch hay những bộ phim Hàn gây bão</p>
             <p class="text-content">Sốt chấm Ssamjang cay nồng thường được dùng để ăn kèm với các loại thịt
                 nướng. Đó là hỗn hợp được trộn giữa tương đậu và tương ớt lên men..mỗi khi thịt chín ruộm, người
                 ta phết một chút sốt lên bề mặt miếng thịt, cuộn cùng với kim chi, xà lách xoăn, dưa chuột. Cho
                 tất cả vào miệng và nhai kỹ bạn sẽ cảm nhận được ngay hương vị đặc biệt của loại tương này.</p>
         </div>
     </div>
     <div class="row m-t">
         <div class="col l-3">
             <a href="" class="korea-link">
                 <img src="view/image/cach-an-thit-nuong-2.jpg" alt="" class="korea-link-img">
             </a>
         </div>
         <div class="col l-3">
             <a href="" class="korea-link">
                 <img src="view/image/img20161208034438844.jpg" alt="" class="korea-link-img">
             </a>
         </div>
         <div class="col l-3">
             <a href="" class="korea-link">
                 <img src="view/image/1-11-2014-6-05-19-PM.jpg" alt="" class="korea-link-img">
             </a>
         </div>
         <div class="col l-3">
             <a href="" class="korea-link">
                 <img src="view/image/1-11-2014-6-05-19-PM.jpg" alt="" class="korea-link-img">
             </a>
         </div>
     </div>
 </div>
 <div class="set-table mt-20">
     <div class="grid wide z-ind-2">
         <div class="row ">
             <div class="col l-6  z-ind-2">
                 <h1 class="title white" style="padding-top: 10px;">Set Table</h1>
                 <p class="text-content f-w white">Quý khách vui lòng đặt bàn trước để có trải nghiệm thưởng thức
                     ẩm thực tốt nhất tại Sun Homes BBQ.</p>
                 <p class="text-content f-w white">Gợi ý đặt bàn:</p>
                 <ul class="suggest white">
                     <li class="suggest-item white"><i class="set-table-icon fa-solid fa-chevron-right"></i>Đi 1
                         người: đặt bàn đơn</li>
                     <li class="suggest-item white"><i class="set-table-icon fa-solid fa-chevron-right"></i>Đi 2
                         người: đặt bàn đôi</li>
                     <li class="suggest-item white"><i class="set-table-icon fa-solid fa-chevron-right"></i>Đi
                         nhóm 4-6 người: đặt bàn 6 người</li>
                     <li class="suggest-item white"><i class="set-table-icon fa-solid fa-chevron-right"></i>Đi
                         nhóm 6-12 người: đặt bàn dài</li>
                     <li class="suggest-item white"><i class="set-table-icon fa-solid fa-chevron-right"></i>Đi
                         nhóm >12 người: gọi trực tiếp Hotline: 0909.009.009</li>
                 </ul>
             </div>
             <div class="col l-6  z-ind-2">
                 <form action="">
                     <input type="text" class="set-order-text" placeholder="Tên của bạn...">
                     <input type="text" class="set-order-text" placeholder="Số điện thoại...">
                     <input type="number" class="set-order-text" placeholder="Số người ăn...">
                     <input type="date" class="set-order-text" placeholder="">

                     <div class="list-check-box">
                         <span class="checkbox-item">
                             <input type="checkbox" id="08:30" value="08:30">
                             <label class="check-time" for="08:30">08:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="09:00" value="09:00">
                             <label class="check-time" for="09:00">09:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="09:30" value="09:30">
                             <label class="check-time" for="09:30">09:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="10:00" value="10:00">
                             <label class="check-time" for="10:00">10:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="10:30" value="10:30">
                             <label class="check-time" for="10:30">10:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="11:00" value="11:00">
                             <label class="check-time" for="11:00">11:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="11:30" value="11:30">
                             <label class="check-time" for="11:30">11:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="12:00" value="12:00">
                             <label class="check-time" for="12:00">12:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="12:30" value="12:30">
                             <label class="check-time" for="12:30">12:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="13:00" value="13:00">
                             <label class="check-time" for="13:00">13:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="13:30" value="13:30">
                             <label class="check-time" for="13:30">13:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="14:00" value="14:00">
                             <label class="check-time" for="14:00">14:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="14:30" value="14:30">
                             <label class="check-time" for="14:30">14:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="15:00" value="15:00">
                             <label class="check-time" for="15:00">15:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="15:30" value="15:30">
                             <label class="check-time" for="15:30">15:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="16:00" value="16:00">
                             <label class="check-time" for="16:00">16:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="16:30" value="16:30">
                             <label class="check-time" for="16:30">16:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="17:00" value="17:00">
                             <label class="check-time" for="17:00">17:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="17:30" value="17:30">
                             <label class="check-time" for="17:30">17:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="18:00" value="18:00">
                             <label class="check-time" for="18:00">18:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="18:30" value="18:30">
                             <label class="check-time" for="18:30">18:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="19:00" value="19:00">
                             <label class="check-time" for="19:00">19:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="19:30" value="19:30">
                             <label class="check-time" for="19:30">19:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="20:00" value="20:00">
                             <label class="check-time" for="20:00">20:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="20:30" value="20:30">
                             <label class="check-time" for="20:30">20:30</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="21:00" value="21:00">
                             <label class="check-time" for="21:00">21:00</label>
                         </span>
                         <span class="checkbox-item">
                             <input type="checkbox" id="21:30" value="21:30">
                             <label class="check-time" for="21:30">21:30</label>
                         </span>

                     </div>
                     <input type="submit" name="" value="ĐẶt bàn" class="care-btn">
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- brand -->
 <div class="grid wide">
     <div class="slider">

     </div>
 </div>