<?php
function loadall_thongke(){
    $sql ="select categories.id as madm, categories.name as tendm, count(products.id) as countsp, min(products.price) as minprice, max(products.price) as maxprice, avg(products.price) as avgprice";
    $sql.=" from products left join categories on categories.id=products.iddm ";
    $sql.=" group by categories.id order by categories.id desc";
    $listtk =pdo_query($sql);
    return $listtk ;
}

function loadall_thongke2($loc = "tongtien"){

    $sql ="SELECT cart.name, sum(cart.totalPrice) as tongtien, products.view, SUM(cart.amount) as soluong FROM cart inner join products on cart.idProduct = products.id GROUP BY cart.name order BY $loc DESC;";
    $listtk =pdo_query($sql);
    return $listtk ;

}



?>