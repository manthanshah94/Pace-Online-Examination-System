<?php
$mserver = $_POST['server'];
$musername = $_POST['email'];
$mpassword = $_POST['password'];
$mport = $_POST['port'];

include '../db_config/connection.php';

$sql = "UPDATE school_mail SET servername='$mserver', username='$musername', password='$mpassword', port='$mport'";

if ($conn->query($sql) === TRUE) {
header("location:email_config.php");
} else {
$error = $conn->error;
header("location:email_config.php?err=$error");
}

$conn->close();

?>