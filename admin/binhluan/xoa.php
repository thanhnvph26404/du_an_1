<?php 
    require_once "../../model/pdo.php";
    $id =  $_GET['id'];
    require_once "../../model/binhluan.php";
    delete_comment($id);    
    header("location:" . $_SERVER["HTTP_REFERER"]);
?>