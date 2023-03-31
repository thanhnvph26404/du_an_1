<?php 
require_once "pdo.php";
function insert_contact($name,$email,$tel,$purpose,$description,$id)
{
    $sql ="INSERT INTO contact(name, email, tel, purpose, description, id_user) VALUES ('$name','$email','$tel','$purpose','$description','$id') ";
    pdo_execute($sql);
}


function loadall_contact()
{
    $sql = "SELECT * FROM contact";
    $listcontact= pdo_query($sql);
    return $listcontact;
}

function count_contact()
{
    $sql = "SELECT * FROM contact";
    $listcontact= pdo_query($sql);
    return count($listcontact);
}

function loadpage_contact($start_record = 0 , $record_per_page = 5)
{
    $sql = "SELECT * FROM contact ORDER BY id DESC  LIMIT $start_record , $record_per_page ";
    $contact = pdo_query($sql);
    // hiển thị dữ liệu dưới dạng json
   
  return  $contact ;
}

function delete_contact($id)
{
   $sql = "DELETE FROM contact WHERE id = '$id'";
   pdo_execute($sql);
    
}

?>