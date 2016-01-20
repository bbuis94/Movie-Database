<?php
/**
* Deletes a customer specified by the user from the customer table
*/
include 'connectdb.php';
$cid = $_POST['getCustomer'];
$query = "delete from customer where cid = $cid";
if (!mysqli_query($connection, $query)) {
    die("Error: deletion failed".mysqli_error($connection));
}

echo "Your customer has been deleted!";
mysqli_close($connection);
?>