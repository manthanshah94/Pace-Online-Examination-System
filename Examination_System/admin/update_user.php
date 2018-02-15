<?php

include 'check_login.php';
$fname = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$new_password = $_POST['password1'];
$gender = $_POST['gender'];

include '../db_config/connection.php';
$sql = "SELECT * FROM user_info where email='$email' and user_id != '$current_user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
		$fullname22 = $row['full_name'];
       header("location:profile.php?msg=Email $email is used by $fullname22");
    }
} else {
    include '../db_config/connection.php';
$sql = "UPDATE user_info SET full_name='$fname', gender='$gender', email='$email', address='$address', password='$new_password' WHERE user_id='$current_user_id'";

if ($conn->query($sql) === TRUE) {
    header("location:logout.php");
} else {
    header("location:./?acuf");
}

$conn->close();
}
$conn->close();




?>