<?php
require_once '../database/db_connection.php';

$sql = "DELETE FROM users WHERE id = '1'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfuly.";
}else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);