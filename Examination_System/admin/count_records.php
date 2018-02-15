<?php

include '../db_config/connection.php';
$sql = "SELECT * FROM user_info  where role='Student'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 $registered_student=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$registered_student = 0;
}
$conn->close();


include '../db_config/connection.php';
$sql = "SELECT * FROM results_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$attended_student=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
     
    }
} else {
$attended_student = 0;
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM results_info where status = 'PASS'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$pass_student=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
     
    }
} else {
$pass_student = 0;
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM results_info where status = 'FAIL'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$fail_student=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
     
    }
} else {
$fail_student = 0;
}
$conn->close();
?>