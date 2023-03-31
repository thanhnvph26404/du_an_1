<?php
function viewcart($del)
{
    $i = 0;

    if ($del == 1) {
        $xoasp_th = '<th class="text-center">action</th>';
        $xoasp_td = '<td class="cart-td"></td>';
    } else {
        $xoasp_th = '';
        $xoasp_td = '';
    }
    // echo "<pre>";

    // var_dump($_SESSION);die;

    echo '
    <table class="table table-bordered text-center">
    <thead>
    <tr>
    <th class="text-center">Sản phẩm</th>
    <th class="text-center">Giá</th>
    <th class="text-center">Số lượng</th>
    <th class="text-center">Tổng</th>
    ' . $xoasp_th . '
    </tr>
    </thead>
';
    echo '<tbody>';
    $total = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $id = $cart[0];
        $name = $cart[1];
        $price = $cart[3];
        $img = $cart[2];
        $amount = $cart[4];
        $totalPrice = $price * $amount;
        $total += $totalPrice;
        if ($del == 1) {
            $xoasp_td = '<td class="cart-td"><a href="index.php?act=delcart&idcart=' . $i . '"><i class="cart-icon fa-solid fa-trash-can"></i></a></td>';
        } else {
            $xoasp_td = '';
        }

        echo '
    <tr>
    <td class="cart-td"><div class="cart-product">
    <img class="cart-img " src="' . $img . '" alt="">
    <input type="text" name="img" hidden value="' . $img . '">
    <input type="text" name="id" hidden value="' . $id . '">
    <input type="text" name="name" hidden value="' . $name . '">
    <input type="text" name="price" hidden value="' . $price . '">
    <span class="sp-td">' . $name . '</span>
    </div></td>
    <td class="cart-td"><span class="sp-td">' . $price . '</span></td>
    <td class="cart-td"><input class="count" name="amount[' . $id . ']"  type="number" min="1" value = "' . $amount . '"></td>
    <td class="cart-td" ><span class="sp-td" >' . $totalPrice . '</span></td>
    ' . $xoasp_td . '
    
</tr>
';
        $i += 1;
    }

    echo '</tbody>
</table>';

    if ($del == 1) {
        echo '<div class="update-cart">

        <input class="update-input" type="submit" name = "update_cart" value="Cập nhật giỏ hàng">
    </div>
    <div class="cart-totals">
    <h3 class="total-title">Tổng tiền: <span>' . $total . ' vnđ</span></h3>
    <a class="total-link" href="index.php?act=bill">Đặt hàng</a>
    </div>
';
    }else{
    echo '
    <div class="cart-totals">
    <h3 class="total-title">Tổng tiền: <span>' . $total . ' vnđ</span></h3>
    <a class="total-link" href=""><input type="submit" name="dongydathang" value="Đặt hàng"></a>
    </div>';
    }
    

}
function tongdonhang()
{

    $tong = 0;


    foreach ($_SESSION['mycart'] as $cart) {

        $ttien = $cart[3] * $cart[4];

        $tong += $ttien;
    }

    return $tong;
}

function insert_bill($name, $tel,$email, $ship,$city, $township, $note, $date, $time, $total,$status, $iduser)
{
    $sql = "insert into bill(name,tel,email,ship,city,township,note,date,time,total,status,iduser) values('$name','$tel','$email', '$ship', '$city','$township', '$note', '$date', '$time','$total',$status,'$iduser')";
    return pdo_execute_return_LastInsertID($sql);
}
function insert_cart($idUser, $idProduct, $img, $name, $price, $amount, $totalPrice, $idbill)
{
    $sql = "insert into cart(idUser, idProduct, img, name,price,amount,totalPrice,idBill) values('$idUser','$idProduct', '$img', '$name', '$price', '$amount', '$totalPrice','$idbill')";
    pdo_execute($sql);
}
function loadone_bill($idbill)
{
    $sql = "select * from bill where id=" . $idbill;
    $sp = pdo_query_one($sql);
    return $sp;
}

function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $sp = pdo_query($sql);
    return $sp;
}

function loadall_cart_count($idbill)
{
    $sql = "SELECT SUM(cart.amount) as sl FROM cart WHERE idBill = $idbill";
    $sp = pdo_query_one($sql);
    return $sp['sl'];
}

function status_bill($status)
{
    switch ($status) {
        case '0':
            $text = "Đang xử lý ";
            break;
        case '1':
            $text = "Đang Giao ";
            break;
        case '2':
            $text = "Giao hàng thành công";
            break;
        default:
            $text = "Đang xử lý ";
            break;
    }
    return $text;
}

function loadall_bill($kyw="",$iduser=0)
{
    $sql = "select * from bill where 1";
    if ($iduser>0) $sql.=" AND iduser=".$iduser;
    if($kyw!="") $sql.=" AND id like '%".$kyw."%'";
    $sql.=" order by id desc ";
    $sp = pdo_query($sql);
    return $sp;
}

function loadpage_bill($kyw="",$iduser=0,$start_record = 0 , $record_per_page = 5)
{
    $sql = "select * from bill where 1";
    if ($iduser>0) $sql.=" AND iduser=".$iduser;
    if($kyw!="") $sql.=" AND id like '%".$kyw."%'";
    $sql.=" order by id desc LIMIT $start_record , $record_per_page";
    $sp = pdo_query($sql);
    return $sp;
}

function count_bill(){
    $sql = "SELECT * FROM bill";
    $listcomment= pdo_query($sql);
    return count($listcomment);
}

function bill_chi_tiet($listbill)
{
    $i = 0;
    $tong = 0;

    echo '<tr>
    <th>Hình</th>
    <th>Sản phẩm</th>
    <th>Đơn giá</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
    
    
</tr>';

    foreach ($listbill as $cart) {
        $hinh = $cart['img'];
        $tong += $cart['totalPrice'];

        echo '<tr>
                        <td><img src="' . $hinh . '"  alt="" class="h-[180px] w-[250px]" height="80px"></td>
                        <td>' . $cart['name'] . '</td>
                        <td>' . $cart['price'] . '</td>
                        <td>' . $cart['amount'] . '</td>
                        <td>' . $cart['totalPrice'] . '</td>
                        
                    </tr>';
        $i += 1;
    }

    echo '<tr>
                    <td colspan="4">Tổng tiền</td>
                    
                    <td colspan="2" style="">' . $tong . '</td>
                   
                </tr>';
}

function bill_chi_tiet_admin($listbill)
{
    $i = 0;
    $tong = 0;

    echo '<tr>
    <th>Hình</th>
    <th>Sản phẩm</th>
    <th>Đơn giá</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
    
    
</tr>';

    foreach ($listbill as $cart) {
        $hinh = $cart['img'];
        $tong += $cart['totalPrice'];

        echo '<tr>
                        <td><img src="../' . $hinh . '"  alt="" class="h-[180px] w-[250px]" height="80px"></td>
                        <td>' . $cart['name'] . '</td>
                        <td>' . $cart['price'] . '</td>
                        <td>' . $cart['amount'] . '</td>
                        <td>' . $cart['totalPrice'] . '</td>
                        
                    </tr>';
        $i += 1;
    }

    echo '<tr>
                    <td colspan="4">Tổng tiền</td>
                    
                    <td colspan="2" style="">' . $tong . '</td>
                   
                </tr>';
}



function delete_bill($id){
    $sql = "delete from bill where id =".$id;
    pdo_execute($sql);
    $sql = "DELETE FROM cart WHERE idBill = $id";
    pdo_execute($sql);
}



function update_status_bill($id,$status){
$sql = "UPDATE bill SET status = '".$status."' where id = ".$id;
pdo_execute($sql);
}
