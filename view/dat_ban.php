<div class="banner"><img src="view/image/banner-234.jpg" alt="" class="banner-img"></div>
<div class="grid wide z-ind-2">
                <div class="row ">
                    <div class="col l-6 mt-20 z-ind-2">
                        <h1 class="title " style="padding-top: 10px;">Set Table</h1>
                        <p class="text-content">Quý khách vui lòng đặt bàn trước để có trải nghiệm thưởng thức
                            ẩm thực tốt nhất tại Sun Homes BBQ.</p>
                        <p class="text-content f-w" style="color: #333;">Gợi ý đặt bàn:</p>
                        <ul class="suggest ">
                            <li class="suggest-item b"><i class="set-table-icon fa-solid fa-chevron-right"></i>Đi 1
                                người: đặt bàn đơn</li>
                            <li class="suggest-item b"><i class="set-table-icon fa-solid fa-chevron-right"></i>Đi 2
                                người: đặt bàn đôi</li>
                            <li class="suggest-item b"><i class="set-table-icon fa-solid fa-chevron-right"></i>Đi
                                nhóm 4-6 người: đặt bàn 6 người</li>
                            <li class="suggest-item b"><i class="set-table-icon fa-solid fa-chevron-right"></i>Đi
                                nhóm 6-12 người: đặt bàn dài</li>
                            <li class="suggest-item b"><i class="set-table-icon fa-solid fa-chevron-right"></i>Đi
                                nhóm >12 người: gọi trực tiếp Hotline: 0909.009.009</li>
                        </ul>
                    </div>
                    <div class="col l-6 mt-20 z-ind-2">
                        
                        
                        <?php 
                        if (!(empty($errors))) {
                            echo '<span class="error">'.$errors.'</span>';
                        }else{
                            echo '<span class="success">'.$success.'</span>';
                        }
                        ?>
                        <form action="index.php?act=dat_ban" method="POST" enctype="multipart/form-data">
                            <input type="text" class="set-order-text" name="name" placeholder="Tên của bạn..." value="<?=$name_user?>">
                            <input type="text" class="set-order-text" name="tel" placeholder="Số điện thoại..." value="<?=$tel_user?>">
                            <select class="set-order-text" name="id_table" id="">
                                
                                <?php
                                foreach ($tables as $value) {
                                    extract($value);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                                ?>
                            </select>
                            <select class="set-order-text" name="session">
                                <option class="" value="0">Trưa</option>
                                <option class="" value="1">Tối</option>
                            </select>
                            <input type="number" class="set-order-text" name="number_table" placeholder="Số lượng bàn..." min="1">
                            <input type="date" class="set-order-text" name="date" min="<?php echo date("Y-m-d")?>">
                            <p style="margin-bottom: 10px;">check in</p>
                            <div class="list-check-box">
                                
                                <span class="checkbox-item">
                                    <input type="checkbox" name="time" id="09:00" value="09:00">
                                    <label class="check-time black" for="09:00">09:00</label>
                                </span>
                               
                                <span class="checkbox-item">
                                    <input type="checkbox" name="time" id="10:00" value="10:00">
                                    <label class="check-time black" for="10:00">10:00</label>
                                </span>
                                
                                <span class="checkbox-item">
                                    <input type="checkbox" name="time" id="11:00" value="11:00">
                                    <label class="check-time black" for="11:00">11:00</label>
                                </span>
                                
                                <span class="checkbox-item">
                                    <input type="checkbox" name="time" id="12:00" value="12:00">
                                    <label class="check-time black" for="12:00">12:00</label>
                                </span>
                                
                                <span class="checkbox-item">
                                    <input type="checkbox" name="time" id="13:00" value="13:00">
                                    <label class="check-time black" for="13:00">13:00</label>
                                </span>
                                
                                <span class="checkbox-item">
                                    <input type="checkbox" name="time" id="14:00" value="14:00">
                                    <label class="check-time black" for="14:00">14:00</label>
                                </span>
                                
                                <span class="checkbox-item">
                                    <input type="checkbox" name="time" id="15:00" value="15:00">
                                    <label class="check-time black" for="15:00">15:00</label>
                                </span>
                                
                                <span class="checkbox-item">
                                    <input type="checkbox" name="time" id="16:00" value="16:00">
                                    <label class="check-time black" for="16:00">16:00</label>
                                </span>
                                
                                <span class="checkbox-item">
                                    <input type="checkbox" name="time" id="17:00" value="17:00">
                                    <label class="check-time black" for="17:00">17:00</label>
                                </span>
                                
                                <span class="checkbox-item">
                                    <input type="checkbox" name="time" id="18:00" value="18:00">
                                    <label class="check-time black" for="18:00">18:00</label>
                                </span>
                               
                                <span class="checkbox-item">
                                    <input type="checkbox" name="time" id="19:00" value="19:00">
                                    <label class="check-time black" for="19:00">19:00</label>
                                </span>
                                
                                <span class="checkbox-item">
                                    <input type="checkbox" name="time" id="20:00" value="20:00">
                                    <label class="check-time black" for="20:00">20:00</label>
                                </span>
                                
                                <span class="checkbox-item">
                                    <input type="checkbox" name="time" id="21:00" value="21:00">
                                    <label class="check-time black" for="21:00">21:00</label>
                                </span>
                                

                            </div>
                            <input type="submit" name="datban" value="ĐẶt bàn" class="care-btn">
                        </form>
                    </div>
                </div>
            </div>