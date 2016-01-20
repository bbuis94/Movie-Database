<?php
/**
* Updates a specified customer with a new first name, last name, sex and email address
*/
   include 'connectdb.php';
   $fname = $_POST["fname"];
   $lname = $_POST["lname"];
   $sex = $_POST["sex"];
   $email = $_POST["email"];
   $cid = $_POST["getCustomer"];
   $query = "update customer set first_name = '$fname', last_name = '$lname',
   sex = '$sex', email = '$email' where cid = '$cid'";
    if (!mysqli_query($connection, $query)) {
        die("Error: update failed" . mysqli_error($connection));
    }
    echo "Your customer was updated!";
    mysqli_close($connection);
?>