<?php
 session_start();
            $my_username = $_SESSION['username'];

			include '../db_config/connection.php';
			
			$sql = "SELECT * FROM user_info where user_id='$my_username' or email='$my_username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
       $regid = $row['user_id'];
    }
} else {
}
$conn->close();


include '../db_config/connection.php';

$sql = "SELECT * FROM results_info where student_no = '$regid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {
       header("location:begin_assessment.php");
    }
} else {
  include '../db_config/connection.php';
  $sql = "SELECT * FROM examstate";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $examstate = $row['state'];
    }
} else {
 
}
$conn->close();
}

if ($examstate == "locked") {
	 header("location:begin_assessment.php");
}else {
		
}
?>