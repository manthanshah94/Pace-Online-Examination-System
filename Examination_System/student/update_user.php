<?php

include 'check_login.php';

$new_password = $_POST['password1'];
include '../db_config/connection.php';
$sql = "UPDATE user_info SET password='$new_password' WHERE user_id='$current_user_id'";

if ($conn->query($sql) === TRUE) {
    header("location:./?acup");
} else {
    header("location:./?acuf");
}

$conn->close();

?>