<?php
include 'check_login.php';
include '../db_config/connection.php';
 
 $sql = "UPDATE examstate SET state='locked'";

if ($conn->query($sql) === TRUE) {
   header("location:examination.php?info=Exam is now locked");
} else {
   header("location:examination.php?info=Could not lock exam");
}

$conn->close();

?>