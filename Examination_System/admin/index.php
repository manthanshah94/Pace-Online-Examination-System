<?php
include 'check_login.php';
include 'count_records.php';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>POES | Admin Dashboard</title>
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
                  <small><?php echo"$regid"; ?> , Admin</small>
                </p>
              </li>
          
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
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
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Students</span>
   
          </a>
          <ul class="treeview-menu">
            <li><a href="new_student.php"><i class="fa fa-circle-o"></i> Register New Student</a></li>
            <li><a href="students.php"><i class="fa fa-circle-o"></i> Customize Students</a></li>
          </ul>
        </li>
        <li>
     	  <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i>
            <span>Examination</span>
   
          </a>
          <ul class="treeview-menu">
            <li><a href="results.php"><i class="fa fa-circle-o"></i> Results</a></li>
           <li><a href="examination.php"><i class="fa fa-circle-o"></i> Customize Questions</a></li>
		   <li><a href="lock_exam.php"><i class="fa fa-circle-o"></i> Lock Exam</a></li>
		   <li><a href="unlock_exam.php"><i class="fa fa-circle-o"></i> Unlock Exam</a></li>
          </ul>
        </li>
		


        <li class="header">SYSTEM</li>
     	  <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i>
            <span>Database</span>
   
          </a>
          <ul class="treeview-menu">
            <li><a <a onclick="return confirm('Are you sure you want to delete all students ?');" href="delete_students.php"><i class="fa fa-circle-o"></i> Delete all students</a></li>
           <li><a <a onclick="return confirm('Are you sure you want to delete all results ?');" href="delete_results.php"><i class="fa fa-circle-o"></i> Delete all results</a></li>
          </ul>
        </li>
      </ul>
    </section>
 
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo number_format($registered_student); ?></h3>

              <p>Registered Students</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="students.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?php echo number_format($attended_student); ?><sup style="font-size: 20px"></sup></h3>

              <p>Students Attended</p>
            </div>
            <div class="icon">
              <i class="fa fa-check"></i>
            </div>
            <a href="results.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo number_format($pass_student); ?></h3>

              <p>Pass Students</p>
            </div>
            <div class="icon">
              <i class="fa fa-thumbs-o-up"></i>
            </div>
            <a href="results.php?ref=PASS" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo number_format($fail_student); ?></h3>

              <p>Fail Students</p>
            </div>
            <div class="icon">
              <i class="fa fa-thumbs-o-down"></i>
            </div>
            <a href="results.php?ref=FAIL" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <section class="col-lg-7">

          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-graduation-cap"></i>

              <h3 class="box-title">School Information</h3>
			  <?php
			  include '../db_config/connection.php';
			  
			 $sql = "SELECT * FROM school_info";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
              
               while($row = $result->fetch_assoc()) {
                 $school_name = $row['name'];
				 $school_email = $row['email'];
				 $school_address = $row['address'];
				 $school_phone = $row['phone'];
				 $shool_slogan = $row['slogan'];
				
                 }
              } else {
               
                    }
                       $conn->close();
			  ?>

            </div>
            <div class="box-body">
			<?php
			
			  
			  if(isset($_GET['db'])) {
		
				 ?>
				 <script>
				 alert("All results were deleted from database");
				 </script>
				 <?php
			  }
			    if(isset($_GET['db0'])) {
			
				 ?>
				 <script>
				 alert("Could not delete results");
				 </script>
				 <?php
			  }
			  	  if(isset($_GET['db2'])) {
		
				 ?>
				 <script>
				 alert("All students were deleted from database");
				 </script>
				 <?php
			  }
			    if(isset($_GET['db3'])) {
			
				 ?>
				 <script>
				 alert("Could not delete students");
				 </script>
				 <?php
			  }
			  
if(isset($_GET['error'])) {
	$error = $_GET['error'];
print '<div class="callout callout-danger">
        <h4>Could not update school information!</h4>
        '.$error.'
      </div>';
}
?>
              <form action="update_school.php" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" value="<?php echo"$school_name"; ?>" placeholder="School Name" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" value="<?php echo"$school_email"; ?>" placeholder="School Email" required>
                </div>
				 <div class="form-group">
                  <input type="text" class="form-control" name="address" value="<?php echo"$school_address"; ?>" placeholder="School Address" required>
                </div>
				<div class="form-group">
                  <input type="text" class="form-control" name="phone" value="<?php echo"$school_phone"; ?>" placeholder="School Phone" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="slogan" value="<?php echo"$shool_slogan"; ?>" placeholder="School Slogan" required>
                </div>
              
              
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" name="upschool" id="sendEmail">Update School Information
                <i class="fa fa-arrow-circle-up"></i></button>
            </div>
			</form>
          </div>

		  <div class="box box-primary">
            <div class="box-header" style="cursor: move;">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Recent Registred Students</h3>
            </div>
            <div class="box-body">
              <ul class="todo-list">
			  <?php 
			  include '../db_config/connection.php';
			  $sql = "SELECT * FROM user_info  where role = 'Student' ORDER BY user_index DESC limit 5";
               $result = $conn->query($sql);

              if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
          print '<li>

                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>

                 
  
                  <span class="text">'.$row['full_name'].'</span>
         
                  <small class="label label-danger"><i class="fa fa-calendar"></i> '.$row['regdate'].'</small>
    
                </li>';
             }
               } else {
                print '<div class="callout callout-info">
        <h4>You have not registered any student</h4>
        Recent registered student will be shown here
      </div>';
                   }
                    $conn->close();
			  
			  ?>
              </ul>
            </div
           
          </div>
        </section>

        <section class="col-lg-5">
		<div class="box box-info">
            <div class="box-header">
              <i class="fa fa-image"></i>

              <h3 class="box-title">
                School Logo
              </h3>
			  
			 <hr>
            </div>
            <div class="box-body">
						<?php
if(isset($_GET['err2'])) {
	$error = $_GET['err2'];
print '<div class="callout callout-danger">
        <h4>Could not update school logo!</h4>
        '.$error.'
      </div>';
}
?>
             <?php
			 					
			  include '../db_config/connection.php';
			  
			  $sql = "SELECT * FROM school_info";
               $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
        
                while($row = $result->fetch_assoc()) {
                 echo '<center><img src="data:image/jpeg;base64,'.base64_encode($row['logo'] ).'" width="170" alt="'.$school_name.'" title="'.$school_name.'"/></center>';

                     }
                   } else {
                 
                  }
                   $conn->close();
			 ?>
            </div>
        
            <div class="box-footer no-border">
            <form action="update_school_logo.php" method="POST" enctype="multipart/form-data">
			Update School Logo <input type="file" name="f1" accept="image/*" required><br>
			
			     <button type="submit" class="btn btn-default" name="uplogo" id="sendEmail">Update School Logo
                <i class="fa fa-arrow-circle-up"></i></button>
			</form>
            </div>
          </div>
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>

            </div>
            <div class="box-body no-padding">
              <div id="calendar" style="width: 100%"></div>
            </div>

          </div>

        </section>
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


      
      </div>
    </div>
  </aside>

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
