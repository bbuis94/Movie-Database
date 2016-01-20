<?php
/**
* Displays a list of customers and allows the user to select a particular one to perform operations with
*/
 $query = "select * from customer";
 $result = mysqli_query($connection, $query);
 if (!$result) {
     die("databases query failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
     echo '<input type="radio" name="getCustomer" value="';
     echo $row["cid"];
     echo '">'.$row["first_name"].
     " ".$row["last_name"].
     "<br>";
 }

 mysqli_free_result($result);
?>