<?php
include 'check_login.php';

include '../db_config/connection.php';

$sql = "DELETE FROM user_info WHERE role='Student'";

if ($conn->query($sql) === TRUE) {
    header("location:./?db2");
} else {
       header("location:./?db3");
}

$conn->close();

?>