<?php
include 'check_login.php';
include '../db_config/connection.php';
 
 $sql = "UPDATE examstate SET state='unlocked'";

if ($conn->query($sql) === TRUE) {
   header("location:examination.php?info2=Exam is now unlocked");
} else {
   header("location:examination.php?err2=Could not unlock exam");
}

$conn->close();

?>