<?php
/**
* Lists all of the details associated with a customer specified by the user
*/
 include 'connectdb.php';
 echo "<h1> Customer Info: </h1>";
 echo "<br>";
 $cid = $_POST["getCustomer"];
 $query = "select * from customer where cid = '$cid'";
 $result = mysqli_query($connection, $query);
 if (!$result) {
     die("databases query failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
     echo $row["first_name"].
     " ".$row["last_name"].
     " ".$row["sex"].
     " ".$row["email"].
     " ".$row["cid"].
     "<br>";
 }
 mysqli_free_result($result);
?>