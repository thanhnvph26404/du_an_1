<?php 
    $id =  $_GET['id'];
    require_once "../../model/lienhe.php";
    delete_contact($id);    
    header("location:" . $_SERVER["HTTP_REFERER"]);
?>