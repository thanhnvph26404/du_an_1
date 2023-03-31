<?php

function insert_anhbia($hinh,$status){
    $sql = "insert into anhbia(img,status) values('$hinh','$status')";
    pdo_execute($sql);
}

function loadall_anhbia(){
    $sql ="select * from anhbia order by id asc";
    $listanhbia=pdo_query($sql);
    return $listanhbia;
}

function delete_anhbia($id){
    $sql = "delete from anhbia where id=".$id;
    pdo_execute($sql);
}

function load_anhbia_status(){
    $sql = "select * from anhbia where status = 1";
    $list = pdo_query($sql);
    return $list;
}
function loadone_anhbia($id){
    $sql ="select * from anhbia where id=".$id;
    $ab =pdo_query_one($sql);
    return $ab;
}

function update_anhbia($id,$hinh,$status){
    if($hinh != ""){
    $sql ="update anhbia set img ='".$hinh."', status='".$status."' where id=".$id;

    }else{
        $sql ="update anhbia set status='".$status."' where id=".$id;
    }
     pdo_execute($sql);
}

?>