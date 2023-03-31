<?php 
    require_once "../../model/pdo.php";
    $id =  $_GET['id'];
    require_once "../../model/taikhoan.php";
    delete_user($id);
    header("location:" . $_SERVER["HTTP_REFERER"]);
?>