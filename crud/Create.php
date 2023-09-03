<?php
require_once '../database/db_connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO
        users
            (username,password,email,phone)
        VALUES
            ('$username','$password', '$email', '$phone')
        ";

if (mysqli_query($conn, $sql)) {
    header("Location: ../admin/userShow.php");
    //echo "New record created successfully.";
} else {
    echo "Error:" . $sql . '<br>' . mysqli_error($conn);
}
mysqli_close($conn);