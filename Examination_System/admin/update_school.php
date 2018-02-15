<?php
if(isset($_POST['upschool'])) {
$name = $_POST['name'];
$myemail = $_POST['email'];
$myadd = $_POST['address'];
$myphone = $_POST['phone'];
$myslogan = $_POST['slogan'];
}else{
	header("location:./");
}

include '../db_config/connection.php';
$sql = "UPDATE school_info SET name='$name', email='$myemail', address='$myadd', phone='$myphone', slogan='$myslogan'";

if ($conn->query($sql) === TRUE) {
    header("location:./");
} else {
	$error = $conn->error;
   header("location:./?error=$error");
}

$conn->close();
?>