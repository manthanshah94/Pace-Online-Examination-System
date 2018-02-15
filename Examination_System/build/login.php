<?php
$my_username = $_POST['username'];
$my_password = $_POST['password'];

include '../db_config/connection.php';

$sql = "SELECT * FROM user_info WHERE password='$my_password' AND (user_id='$my_username' OR email='$my_username')" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
		$user_role = $row['role'];
		$fullname = $row['full_name'];
		if ($user_role == "Admin") {
			setcookie(loggedin, date("F jS - g:i a"), $seconds);
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $my_username;
            $_SESSION['fullname'] = $fullname;
			header("location:../admin/");
		}else{
			setcookie(loggedin, date("F jS - g:i a"), $seconds);
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $my_username;
            $_SESSION['fullname'] = $fullname;
			header("location:../student/");
		}
        
    }
} else {
   header("location:../index.php");
}
$conn->close();
?>