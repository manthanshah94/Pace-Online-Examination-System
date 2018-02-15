<?php
include 'check_login.php';
if(isset($_POST['uplogo'])) {
$image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));
}else{
	header("location:./");
}

include '../db_config/connection.php';

$sql = "UPDATE user_info SET avatar='$image' where user_id ='$current_user_id'";

if ($conn->query($sql) === TRUE) {
    header("location:./");
} else {
$error = $conn->error;
   header("location:./?err2=$error");
}

$conn->close();
?>