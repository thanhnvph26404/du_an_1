<?php 


function insert_table($name,$amount)
{
    $sql = "INSERT INTO tables( name, amount) VALUES ('$name','$amount')";
    pdo_execute($sql);
}

function loadpage_table($start_record = 0 , $record_per_page = 5)
{
    $sql = "SELECT * FROM tables ORDER BY amount ASC  LIMIT $start_record , $record_per_page ";
    $table = pdo_query($sql);
    return  $table ;
}

function loadall_table()
{
    $sql = "SELECT * FROM tables";
    $listtable= pdo_query($sql);
    return $listtable;
}


function count_table()
{
    $sql = "SELECT * FROM tables";
    $listtable= pdo_query($sql);
    return count($listtable);
}

function delete_table($id)
{
    $sql = "DELETE FROM tables WHERE id = '$id'";
    pdo_execute($sql);
}

function loadone_table($id)
{
    $sql = "SELECT * FROM tables where id = $id";
    $table= pdo_query_one($sql);
    return $table;
}

function update_table($id_table,$name,$amount)
{   
    $sql = "UPDATE tables SET name='$name',amount='$amount' WHERE id = $id_table";
    pdo_execute($sql);
}

?>

