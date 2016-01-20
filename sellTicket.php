<?php
/**
* Sells a ticket to a customer for a specified showing at a price indicated by the staff member
*/
   include 'connectdb.php';
   $cid = $_POST["getCustomer"];
   $sid = $_POST["getShowing"];
   $pice = $_POST["price"];
   $query = "insert into watches (sid, price, cid) values 
   ('$sid', '$price', '$cid')";
    if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
    echo "You have sold a ticket!";
    mysqli_close($connection);
?>