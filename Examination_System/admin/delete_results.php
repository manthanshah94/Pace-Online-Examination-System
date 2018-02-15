<?php
include 'check_login.php';

include '../db_config/connection.php';

$sql = "DELETE FROM results_info";

if ($conn->query($sql) === TRUE) {
    header("location:./?db=1");
} else {
    header("location:./?db0");
}

$conn->close();

?>