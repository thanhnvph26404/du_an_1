<?php
function insert_binhluan($id_user,$id_pro,$content,$time)
{
    $sql="INSERT INTO comment( id_user, id_pro, content, time) VALUES ('$id_user','$id_pro','$content','$time')";
    pdo_execute($sql);
}

function loadall_binhluan($idpro)
{
    $sql = "select * from comment where 1";
    if($idpro>0){
        $sql.=" AND productId='".$idpro."'";
    }else{
        $sql.=" order by id desc";
        
    }
     
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}


function delete_binhluan($id){
    $sql = "delete from comment where id =" .$_GET['id'];
    pdo_execute($sql);
}

function loadpage_comment_all($start_record,$record_per_page)
{
    $sql = "SELECT comment.id as id_comment , products.name as name_pro , products.id as id_pro  , comment.content as content , comment.time as time , products.img as img , users.name as name_user  FROM comment INNER JOIN users ON comment.id_user = users.id  INNER JOIN products ON products.id = comment.id_pro
    ORDER BY comment.id DESC limit $start_record,$record_per_page";
    return pdo_query($sql);
}


function select_comment_by_product($id){
    $sql = "SELECT comment.id as id_comment , users.name as name , comment.content as content , comment.time as time  FROM comment INNER JOIN users ON comment.id_user = users.id INNER JOIN products ON products.id = comment.id_pro
    WHERE products.id = $id ORDER BY comment.id DESC LIMIT 0,5 "; 
    return pdo_query($sql);
}


function select_comment_by_user($id,$start_record = 0 , $record_per_page = 5)
{
    $sql = "SELECT comment.id as id_comment , products.name as name , products.id as id  , comment.content as content , comment.time as time , products.img as img  FROM comment INNER JOIN users ON comment.id_user = users.id  INNER JOIN products ON products.id = comment.id_pro
    WHERE users.id = $id ORDER BY comment.id DESC LIMIT $start_record,$record_per_page";
    return pdo_query($sql);
}

function count_comment(){
    $sql = "SELECT * FROM comment";
    $listcomment= pdo_query($sql);
    return count($listcomment);
}

function delete_comment($id){
    $sql = "DELETE FROM comment WHERE id = '$id' ";
    pdo_execute($sql);
}
