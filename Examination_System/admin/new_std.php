<?php
if(isset($_POST['newstd'])) {
$stdname = $_POST['name'];
$stdem = $_POST['email'];
$stdadd = $_POST['address'];
$gender = $_POST['gender'];
}else{
	header("location:./");
}

include '../db_config/connection.php';

$sql = "SELECT * FROM user_info where email = '$stdem'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
		$student = $row['full_name'];
       header("location:new_student.php?msg=Email $stdem is not available&student=$student");
    }
} else {
  $regdate = date('jS \ F Y h:i:s A');
$stdno = 'STD:'.rand(1000,9999).'/'.rand(10,99).'/'.rand(0,9).'';

include '../db_config/connection.php';

$sql = "INSERT INTO user_info (user_id, full_name, gender, email, address, regdate)
VALUES ('$stdno', '$stdname', '$gender', '$stdem', '$stdadd', '$regdate')";

if ($conn->query($sql) === TRUE) {
    header("location:new_student.php?message=$stdname have been registered with ID $stdno");
} else {
	$error = $conn->error;
     header("location:new_student.php?err=$error");
}

$conn->close();



}
$conn->close();

?>


