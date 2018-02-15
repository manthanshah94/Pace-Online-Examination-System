<?php
if(isset($_POST['uplogo'])) {
$image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));
}else{
	header("location:./");
}

include '../db_config/connection.php';

$sql = "UPDATE school_info SET logo='$image'";

if ($conn->query($sql) === TRUE) {
    header("location:./");
} else {
$error = $conn->error;
   header("location:./?err2=$error");
}

$conn->close();
?>