<?php
/**
 * Adds a customer to the customer database
 */
include 'connectdb.php';
$cid = $_POST["cid"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$sex = $_POST["sex"];
$email = $_POST["email"];
$query = "insert into customer (cid, first_name, last_name,sex, email) values  ('$cid', '$fname', '$lname', '$sex', '$email')
";
if (!mysqli_query($connection, $query)) {
    die("Error: insert failed".mysqli_error($connection));
}
echo "The customer has been added!";
mysqli_close($connection);
?>