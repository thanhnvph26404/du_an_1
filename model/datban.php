<?php
function insert_datban($name, $tel,$table_name,$book_date,$session, $number_table, $date, $time){
    $sql = "insert into booking(name,tel,id_table,book_date,date,time,session,quantity) values ('$name','$tel','$table_name','$book_date','$date','$time','$session','$number_table')";
    pdo_execute($sql);
}

function load_all_booking(){
    $sql = "select * from booking";
    $booking = pdo_query($sql);
    return $booking;
}

function load_all_tables(){
    $sql = "select * from tables";
    $tables = pdo_query($sql);
    return $tables;
}

function max_table($id_table)
{
   $sql = "SELECT amount FROM tables WHERE id = $id_table";
   $max_Table= pdo_query_one($sql);
   return $max_Table['amount'];
}


function booked_table($id_table,$date,$session)
{
   $sql = "SELECT SUM(quantity) as quantity FROM booking  WHERE date like '%$date%' AND id_table = '$id_table' AND session = '$session'   GROUP BY date";
   $booked_table= pdo_query_one($sql);
   if ($booked_table==[]) {
        return 0 ;
   }
   return $booked_table['quantity'];
}









?>