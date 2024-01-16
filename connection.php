<?php
include('db_connection.php');
$name = "";
$city = "";
$email = "";
$password = "";
if (isset($_POST['Register'])) {
    $name = $_POST['name'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    mysqli_query($conn, "INSERT INTO employee_info VALUES('$name','$city','$email','$password')");
    header('location:rejister.html');
}
?>