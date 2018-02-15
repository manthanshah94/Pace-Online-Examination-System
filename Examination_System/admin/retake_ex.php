<?php
include 'check_login.php';
$stdid = $_GET['ref'];

include '../db_config/connection.php';

$sql = "DELETE FROM results_info where student_no='$stdid'";

if ($conn->query($sql) === TRUE) {
    header("location:results.php?db1");
} else {
    header("location:results.php?db0");
}

$conn->close();

?>