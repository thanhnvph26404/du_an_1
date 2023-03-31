<?php

function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql = "insert into products(name,price,img,mota,iddm)  values ('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id){
    $sql = "delete from products where id=".$id;
    pdo_execute($sql);
}


function loadall_sanpham_home(){
    $sql ="select * from  products where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham($kyw="",$iddm=0){
    $sql ="select * from products where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }

    $sql.=" order by id asc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function load_ten_dm($iddm){
    if($iddm>0){
        $sql ="select * from products where id=".$iddm;
        $dm =pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return  "";
    }
    
}

function loadone_sanpham($id){
    $sql ="select * from products where id=".$id;
    $sp =pdo_query_one($sql);
    return $sp;
}

function load_sanpham_cungloai($id,$iddm){
    $sql ="select * from  products where iddm = ".$iddm." AND id <>".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_cungloai($iddm){
    $sql ="select * from  products where iddm = ".$iddm."  order by id desc limit 0,9" ;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}



function update_sanpham($tensp,$giasp,$mota,$hinh,$id,$iddm){
    if($hinh!="")
        $sql ="update products  set iddm ='".$iddm."',  name ='".$tensp."',price ='".$giasp."',mota ='".$mota."',img ='".$hinh."' where id=".$id;
    else
        $sql ="update products  set iddm ='".$iddm."',  name ='".$tensp."',price ='".$giasp."',mota ='".$mota."' where id=".$id;
    pdo_execute($sql);
}

function sanpham_view($id){
    $sql = "UPDATE products SET view = view + 1 WHERE id = $id";
    pdo_execute($sql);
}


?>