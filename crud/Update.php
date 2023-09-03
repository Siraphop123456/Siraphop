<?php

require_once '../database/db_connection.php';

$sql ="UPDATE
            users
        SET
            username = '123',
            password = '456'
        WHERE
            id = '1'
        ";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfuly.";
}else {
    echo "Error updaing record: " . mysqli_error($conn);
}
mysqli_close($conn);