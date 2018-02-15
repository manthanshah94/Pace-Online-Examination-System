<?php
error_reporting(0);
include 'verfy_std.php';
   session_start();
            $my_username = $_SESSION['username'];

			include '../db_config/connection.php';
			
			$sql = "SELECT * FROM user_info where user_id='$my_username' or email='$my_username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
       $stdno = $row['user_id'];
	   $stdname = $row['full_name'];
    }
} else {
}
$conn->close();
			
$result_id = 'RST:'.rand(10000000,99999999).'';
$today_date = date('jS \ F Y h:i:s A');


include '../db_config/connection.php';
$sql = "SELECT * FROM results_info where student_no='$stdno'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       header("location:begin_assessment.php");
    }
} else {
  include '../db_config/connection.php';

$sql = "INSERT INTO results_info (result_id, student_no, student_name, date)
VALUES ('$result_id', '$stdno', '$stdname', '$today_date')";

if ($conn->query($sql) === TRUE) {
session_start();
$_SESSION['examstarted'] = true;
    
} else {

}

$conn->close();
}




?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>POES | Examination</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
</head>
<style>
#myhead{
width:1100px; margin:0 auto;
background-color:#4B77BE;
height:230px;
}

#myhead2{
width:1100px;  height:100%; margin:0 auto;
background-color:white;

}
</style>
<body class="hold-transition skin-blue layout-boxed fixed sidebar-mini">

<div  id="myhead">
<?php
include '../db_config/connection.php';
$sql = "SELECT * FROM school_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       $name = $row['name'];
	   $email = $row['email'];
	   $address = $row['address'];
	   $phone = $row['phone'];
	   $slogan = $row['slogan'];
    }
} else {
  
}
$conn->close();
?>
<center>
</center>


<center>
<h3 style="color:white; font-weight: bold;">
<?php 
$str = $name;
$str = strtoupper($name);
echo"$str"; ?>
</h3>
<p style="color:white; line-height: 35%; font-size: 14px;"><?php echo"$email"; ?></p>
<p style="color:white; line-height: 35%;font-size: 14px;"><?php echo"$address"; ?></p>
<p style="color:white; line-height: 35%; font-size: 14px;"><?php echo"$phone"; ?></p>
<i><p style="color:white; line-height: 35%; font-size: 14px;"><?php echo"$slogan"; ?></p></i>


<?php
include '../db_config/connection.php';
$sql = "SELECT * FROM school_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
echo '<img style="width:120px;" src="data:image/jpeg;base64,'.base64_encode($row['logo'] ).'" class="img-circle" alt="'.$name.'" title="'.$name.'"/>';
    }
} else {
  
}
$conn->close();
?>
</center>

</div>
<div id="myhead2" style="padding-left:20px; padding-right:20px;">
<form action="submit_exam.php" method="GET">
<table style="font-size:15px;">
<?php
include '../db_config/connection.php';

$sql = "SELECT * FROM exam ORDER BY RAND() limit 20";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
		$quesno = 1;
		while($quesno <= 20) {
	while($row = $result->fetch_assoc()) {
		
		
    echo "<tr><td>" . $row["question"]. "</td>";
	print '<tr><td><input type="radio" name="q'.$quesno.'" value="'.$row["option1"].'" required="true"> '.$row["option1"].'<br> </td></tr>';
	print '<tr><td><input type="radio" name="q'.$quesno.'" value="'.$row["option2"].'" required="true""> '.$row["option2"].'<br></td></tr>';
	print '<tr><td><input type="radio" name="q'.$quesno.'" value="'.$row["option3"].'" required="true"> '.$row["option3"].'<br></td></tr>';
	print '<tr><td><input type="radio" name="q'.$quesno.'" value="'.$row["option4"].'" required="true"> '.$row["option4"].'<br></td></tr>';
	print '<tr><td colspan="10"><hr></td></tr>';
	print '<tr><td><input type="hidden" name="'.$quesno.'" value="'.$row["question_id"].'"</td></tr>';
    $quesno++;}
}
		 
} else {
    
}
$conn->close();


?>
</table>
<button type="submit" onclick="return confirm('Are you sure you want to submit your assessment ?')"  class="btn btn-primary">Submit Assessment</button><br><br>
</form>

<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../../plugins/fastclick/fastclick.js"></script>
<script src="../../dist/js/app.min.js"></script>
<script src="../../dist/js/demo.js"></script>
</body>
</html>
