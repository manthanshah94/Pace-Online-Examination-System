<?php

include 'check_login.php';
			  include '../db_config/connection.php';
			  
			  $sql = "SELECT * FROM user_info where user_id='$myusername' or email='$myusername'";
               $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
        
                while($row = $result->fetch_assoc()) {
                    $current_std_no = $row['user_id'];

                     }
                   } else {
                
                  }
                   $conn->close();

$ans1 = $_GET['q1'];
$ans2 = $_GET['q2'];
$ans3 = $_GET['q3'];
$ans4 = $_GET['q4'];
$ans5 = $_GET['q5'];
$ans6 = $_GET['q6'];
$ans7 = $_GET['q7'];
$ans8 = $_GET['q8'];
$ans9 = $_GET['q9'];
$ans10 = $_GET['q10'];
$ans11 = $_GET['q11'];
$ans12 = $_GET['q12'];
$ans13 = $_GET['q13'];
$ans14 = $_GET['q14'];
$ans15 = $_GET['q15'];
$ans16 = $_GET['q16'];
$ans17 = $_GET['q17'];
$ans18 = $_GET['q18'];
$ans19 = $_GET['q19'];
$ans20 = $_GET['q20'];

$qu1 = $_GET['1'];
$qu2 = $_GET['2'];
$qu3 = $_GET['3'];
$qu4 = $_GET['4'];
$qu5 = $_GET['5'];
$qu6 = $_GET['6'];
$qu7 = $_GET['7'];
$qu8 = $_GET['8'];
$qu9 = $_GET['9'];
$qu10 = $_GET['10'];
$qu11 = $_GET['11'];
$qu12 = $_GET['12'];
$qu13 = $_GET['13'];
$qu14 = $_GET['14'];
$qu15 = $_GET['15'];
$qu16 = $_GET['16'];
$qu17 = $_GET['17'];
$qu18 = $_GET['18'];
$qu19 = $_GET['19'];
$qu20 = $_GET['20'];
include 'fetch_questions.php';
include 'fetch_answers.php';

if ($ans1 == $mark1) {
	$score1 = 1;
	$grade1 = "fa-check-square";
}else {
	$score1 = 0;
	$grade1 = "fa-times-circle";
}

if ($ans2 == $mark2) {
	$score2 = 1;
	$grade2 = "fa-check-square";
}else {
	$score2 = 0;
	$grade2 = "fa-times-circle";
}


if ($ans3 == $mark3) {
	$score3 = 1;
	$grade3 = "fa-check-square";
}else {
	$score3 = 0;
	$grade3 = "fa-times-circle";
}

if ($ans4 == $mark4) {
	$score4 = 1;
	$grade4 = "fa-check-square";
}else {
	$score4 = 0;
	$grade4 = "fa-times-circle";
}

if ($ans5 == $mark5) {
	$score5 = 1;
	$grade5 = "fa-check-square";
}else {
	$score5 = 0;
	$grade5 = "fa-times-circle";
}

if ($ans6 == $mark6) {
	$score6 = 1;
	$grade6 = "fa-check-square";
}else {
	$score6 = 0;
	$grade6 = "fa-times-circle";
}

if ($ans7 == $mark7) {
	$score7 = 1;
	$grade7 = "fa-check-square";
}else {
	$score7 = 0;
	$grade7 = "fa-times-circle";
}

if ($ans8 == $mark8) {
	$score8 = 1;
	$grade8 = "fa-check-square";
}else {
	$score8 = 0;
	$grade8 = "fa-times-circle";
}

if ($ans9 == $mark9) {
	$score9 = 1;
	$grade9 = "fa-check-square";
}else {
	$score9 = 0;
	$grade9 = "fa-times-circle";
}

if ($ans10 == $mark10) {
	$score10 = 1;
	$grade10 = "fa-check-square";
}else {
	$score10 = 0;
	$grade10 = "fa-times-circle";
}

if ($ans11 == $mark11) {
	$score11 = 1;
	$grade11 = "fa-check-square";
}else {
	$score11 = 0;
	$grade11 = "fa-times-circle";
}

if ($ans12 == $mark12) {
	$score12 = 1;
	$grade12 = "fa-check-square";
}else {
	$score12 = 0;
	$grade12 = "fa-times-circle";
}

if ($ans13 == $mark13) {
	$score13 = 1;
	$grade13 = "fa-check-square";
}else {
	$score13 = 0;
	$grade13 = "fa-times-circle";
}

if ($ans14 == $mark14) {
	$score14 = 1;
	$grade14 = "fa-check-square";
}else {
	$score14 = 0;
	$grade14 = "fa-times-circle";
}

if ($ans15 == $mark15) {
	$score15 = 1;
	$grade15 = "fa-check-square";
}else {
	$score15 = 0;
	$grade15 = "fa-times-circle";
}

if ($ans16 == $mark16) {
	$score16 = 1;
	$grade16 = "fa-check-square";
}else {
	$score16 = 0;
	$grade16 = "fa-times-circle";
}

if ($ans17 == $mark17) {
	$score17 = 1;
	$grade17 = "fa-check-square";
}else {
	$score17 = 0;
	$grade17 = "fa-times-circle";
}

if ($ans18 == $mark18) {
	$score18 = 1;
	$grade18 = "fa-check-square";
}else {
	$score18 = 0;
	$grade18 = "fa-times-circle";
}

if ($ans19 == $mark19) {
	$score19 = 1;
	$grade19 = "fa-check-square";
}else {
	$score19 = 0;
	$grade19 = "fa-times-circle";
}

if ($ans20 == $mark20) {
	$score20 = 1;
	$grade20 = "fa-check-square";
}else {
	$score20 = 0;
	$grade20 = "fa-times-circle";
}




$totral_score = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10 + $score11 + $score12 + $score13 + $score14 + $score15 + $score16 + $score17 + $score18 + $score19 + $score20;
$av_score = $totral_score * 5;

if ($av_score >= 50) {
	$pass_status = "PASS";
} else {
	$pass_status = "FAIL";
}
?>

<?php
error_reporting(0);
session_start();
if (isset($_SESSION['examstarted']) && $_SESSION['examstarted'] == true) {
	  include '../db_config/connection.php';
	
	$sql = "UPDATE results_info SET score='$av_score', status='$pass_status' WHERE student_no='$current_std_no'";

if ($conn->query($sql) === TRUE) {
  $_SESSION['examstarted'] = false;
} else {
    
}

$conn->close();
	
}else{
	
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>POES | Assessment Results</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="../plugins/morris/morris.css">
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="icon" href="../dist/img/icon.png">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="#" class="logo">
      <span class="logo-mini"><b>PO</b>ES</span>
      <span class="logo-lg"><b>Examination</b> System</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								  <?php
			  include '../db_config/connection.php';
			  
			  $sql = "SELECT * FROM user_info where user_id='$myusername' or email='$myusername'";
               $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
        
                while($row = $result->fetch_assoc()) {
                 $avatar = $row['avatar'];
				 $gender = $row['gender'];
				 $regid = $row['user_id'];
				 if ($avatar == null) {
					 if ($gender == "Male") {
						 print '<img src="../dist/img/avatar.png" class="user-image" alt="'.$current_user.'" title="'.$current_user.'">';
					 }else {
						 print '<img src="../dist/img/avatar3.png" class="user-image" alt="'.$current_user.'" title="'.$current_user.'">';
					 }
					 
				 }else{
					   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['avatar'] ).'" class="user-image" alt="'.$current_user.'" title="'.$current_user.'"/>';
				 }
                     }
                   } else {
                
                  }
                   $conn->close();
			  
			  ?>
          
              <span class="hidden-xs"><?php echo"$current_user"; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
			  <?php
			  include '../db_config/connection.php';
			  
			  $sql = "SELECT * FROM user_info where user_id='$myusername' or email='$myusername'";
               $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
        
                while($row = $result->fetch_assoc()) {
                 $avatar = $row['avatar'];
				 $gender = $row['gender'];
				 $regid = $row['user_id'];
				 if ($avatar == null) {
					 if ($gender == "Male") {
						 print '<img src="../dist/img/avatar.png" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'">';
					 }else {
						 print '<img src="../dist/img/avatar3.png" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'">';
					 }
					 
				 }else{
					  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['avatar'] ).'" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'"/>';
				 }
                     }
                   } else {
                 
                  }
                   $conn->close();
			  
			  ?>
                

                <p>
                  <?php echo"$current_user"; ?>
                  <small><?php echo"$regid"; ?> , Student</small>
                </p>
              </li>
          
              <li class="user-footer">
                <div class="pull-left">
                  <a href="./" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
   
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
					  <?php
			  include '../db_config/connection.php';
			  
			  $sql = "SELECT * FROM user_info where user_id='$myusername' or email='$myusername'";
               $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
        
                while($row = $result->fetch_assoc()) {
                 $avatar = $row['avatar'];
				 $gender = $row['gender'];
				 $regid = $row['user_id'];
				 if ($avatar == null) {
					 if ($gender == "Male") {
						 print '<img src="../dist/img/avatar.png" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'">';
					 }else {
						 print '<img src="../dist/img/avatar3.png" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'">';
					 }
					 
				 }else {
					  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['avatar'] ).'" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'"/>';
				 }
                     }
                   } else {
                 
                  }
                   $conn->close();
			  
			  ?>
      
        </div>
        <div class="pull-left info">
          <p><?php echo"$current_user"; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

        <li>
     	  <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i>
            <span>Examination</span>
   
          </a>
     <ul class="treeview-menu">
            <li><a href="instruction.php"><i class="fa fa-circle-o"></i> Instructions</a></li>
           <li><a href="begin_assessment.php"><i class="fa fa-circle-o"></i> Begin assessment</a></li>
          </ul>
        </li>
			  <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Students</span>
   
          </a>
     <ul class="treeview-menu">
            <li class="active"><a href="students.php"><i class="fa fa-circle-o"></i> View students</a></li>
          </ul>
        </li>


        

      </ul>
    </section>
 
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Examination Results
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="./"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Examination Results</li>
      </ol>
    </section>

    <section class="content">
	
	<div class="box">
  
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>#</th>
                  <th>Question</th>
                  <th>Your answer</th>
                  <th>Correct answer</th>
                  <th>Mark</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td><?php echo"$quno1"; ?></td>
                  <td><?php echo"$ans1"; ?></td>
                  <td><?php echo"$mark1"; ?></td>
                  <td><i class="fa <?php echo"$grade1"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>2</td>
                  <td><?php echo"$quno2"; ?></td>
                  <td><?php echo"$ans2"; ?></td>
                  <td><?php echo"$mark2"; ?></td>
                  <td><i class="fa <?php echo"$grade2"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>3</td>
                  <td><?php echo"$quno3"; ?></td>
                  <td><?php echo"$ans3"; ?></td>
                  <td><?php echo"$mark3"; ?></td>
                  <td><i class="fa <?php echo"$grade3"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>4</td>
                  <td><?php echo"$quno4"; ?></td>
                  <td><?php echo"$ans4"; ?></td>
                  <td><?php echo"$mark4"; ?></td>
                  <td><i class="fa <?php echo"$grade4"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>5</td>
                  <td><?php echo"$quno5"; ?></td>
                  <td><?php echo"$ans5"; ?></td>
                  <td><?php echo"$mark5"; ?></td>
                  <td><i class="fa <?php echo"$grade5"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>6</td>
                  <td><?php echo"$quno6"; ?></td>
                  <td><?php echo"$ans6"; ?></td>
                  <td><?php echo"$mark6"; ?></td>
                  <td><i class="fa <?php echo"$grade6"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>7</td>
                  <td><?php echo"$quno7"; ?></td>
                  <td><?php echo"$ans7"; ?></td>
                  <td><?php echo"$mark7"; ?></td>
                  <td><i class="fa <?php echo"$grade7"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>8</td>
                  <td><?php echo"$quno8"; ?></td>
                  <td><?php echo"$ans8"; ?></td>
                  <td><?php echo"$mark8"; ?></td>
                  <td><i class="fa <?php echo"$grade8"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>9</td>
                  <td><?php echo"$quno9"; ?></td>
                  <td><?php echo"$ans9"; ?></td>
                  <td><?php echo"$mark9"; ?></td>
                  <td><i class="fa <?php echo"$grade9"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>10</td>
                  <td><?php echo"$quno10"; ?></td>
                  <td><?php echo"$ans10"; ?></td>
                  <td><?php echo"$mark10"; ?></td>
                  <td><i class="fa <?php echo"$grade10"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>11</td>
                  <td><?php echo"$quno11"; ?></td>
                  <td><?php echo"$ans11"; ?></td>
                  <td><?php echo"$mark11"; ?></td>
                  <td><i class="fa <?php echo"$grade11"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>12</td>
                  <td><?php echo"$quno12"; ?></td>
                  <td><?php echo"$ans12"; ?></td>
                  <td><?php echo"$mark12"; ?></td>
                  <td><i class="fa <?php echo"$grade12"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>13</td>
                  <td><?php echo"$quno13"; ?></td>
                  <td><?php echo"$ans13"; ?></td>
                  <td><?php echo"$mark13"; ?></td>
                  <td><i class="fa <?php echo"$grade13"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>14</td>
                  <td><?php echo"$quno14"; ?></td>
                  <td><?php echo"$ans14"; ?></td>
                  <td><?php echo"$mark14"; ?></td>
                  <td><i class="fa <?php echo"$grade14"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>15</td>
                  <td><?php echo"$quno15"; ?></td>
                  <td><?php echo"$ans15"; ?></td>
                  <td><?php echo"$mark15"; ?></td>
                  <td><i class="fa <?php echo"$grade15"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>16</td>
                  <td><?php echo"$quno16"; ?></td>
                  <td><?php echo"$ans16"; ?></td>
                  <td><?php echo"$mark16"; ?></td>
                  <td><i class="fa <?php echo"$grade16"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>17</td>
                  <td><?php echo"$quno17"; ?></td>
                  <td><?php echo"$ans17"; ?></td>
                  <td><?php echo"$mark17"; ?></td>
                  <td><i class="fa <?php echo"$grade17"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>18</td>
                  <td><?php echo"$quno18"; ?></td>
                  <td><?php echo"$ans18"; ?></td>
                  <td><?php echo"$mark18"; ?></td>
                  <td><i class="fa <?php echo"$grade18"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>19</td>
                  <td><?php echo"$quno19"; ?></td>
                  <td><?php echo"$ans19"; ?></td>
                  <td><?php echo"$mark19"; ?></td>
                  <td><i class="fa <?php echo"$grade19"; ?>"</i></td>
                </tr>
				   <tr>
                  <td>20</td>
                  <td><?php echo"$quno20"; ?></td>
                  <td><?php echo"$ans20"; ?></td>
                  <td><?php echo"$mark20"; ?></td>
                  <td><i class="fa <?php echo"$grade20"; ?>"</i></td>
                </tr>
               
              </tbody></table>
            </div>
   
          </div>
    <?php
	if ($av_score >= 50) {
		print '
		<div class="callout callout-info">
        <h4>You have pass the exam with a score of '.$av_score.'%</h4>
        Your record have been saved in database
      </div>
	  
	  
	  
	  
	  
	  ';
	  
	}else{
				print '
		<div class="callout callout-danger">
        <h4>You have failed the exam with a score of '.$av_score.'%, Instructor must re-activate for you to repeat the exam</h4>
        Your record have been saved in database
      </div>';
	}
	
	?>
<div class="row">



      </div>

    </section>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; <?php echo date('Y'); ?> Developed By Students of Pace University.</strong> All rights
    reserved.
  </footer>


  <div class="control-sidebar-bg"></div>
</div>

<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../plugins/morris/morris.min.js"></script>
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="../plugins/knob/jquery.knob.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../plugins/fastclick/fastclick.js"></script>
<script src="../dist/js/app.min.js"></script>
<script src="../dist/js/pages/dashboard.js"></script>
<script src="../dist/js/demo.js"></script>
</body>
</html>


