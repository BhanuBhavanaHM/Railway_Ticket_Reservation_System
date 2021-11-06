<?php
session_start();
	
require('firstimport.php');

mysqli_select_db($conn,"$db_name") or die("cannot select db");
	$name1=$_SESSION['name'];
	$tno=$_GET['Tnumber'];
	$doj=$_GET['doj'];
	$fromstn=$_GET['fromstn'];
	$tostn=$_GET['tostn'];
	$DOB=$_GET['DOB'];
	$sql="DELETE FROM booking WHERE (uname='$name1' and Tnumber='$tno' and doj='$doj' and DOB='$DOB' and fromstn='$fromstn' and tostn='$tostn')";
	$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title> Deccan Express </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
	<script type="text/javascript" src="js/jquery.js"></script>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>

</head>
<body>

	<div class="wrap" style="background-image: linear-gradient(rgba(172,182,229,0.9), rgba(134,253,232,0.9));">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:100px;margin:30px 0px 0px 30px;">
				<img src="images/logo.jpg" style="border-radius: 50%;" />
			</div>		
			<div>
			<div id="heading">
				<a href="index.php"><span style="font-family: 'Audiowide', cursive;margin:30px 0px 0px 30px;">Deccan Express</span></a>
			</div>
			</div>
		</div>
		
<!-- Navigation bar -->

				<a class="brand" href="index.php" title="Home"><img src="images/home.png" style="width:50px;height:30px;margin:0px 40px 10px 20px;"/></a>
				<a class="brand" href="train.php" title="Find train" style="font-size:25px;font-family:  cursive;margin:0px 40px 10px 20px;"> TrainSearch</a>
				<a class="brand" href="reservation.php" title="Reservation"style="font-size:25px;font-family:  cursive;margin:0px 40px 10px 20px;">Reservation</a>
				<a class="brand" href="profile.php" title="Profile" style = "font-size:25px;font-family:  cursive;margin:0px 40px 10px 20px;"/>Profile</a>
				<a class="brand" href="display.php" title="Booking History" style = "font-size:25px;font-family:  cursive;margin:0px 40px 10px 20px;">YourBooking</a>
				<?php
			 if(isset($_SESSION['name']))	
			 {
			 // echo "<span style=\"float:right;font-size:15px;margin:0px 30px 10px 10px;\">"."Welcome,".$_SESSION['name']."</span>&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-warning\" style=\"float:right;font-size:15px;margin:0px 10px 10px 10px;\">Logout</a>";

			 echo "<a href=\"logout.php\" class=\"btn btn-warning\" style=\"float:right;font-size:15px;margin:0px 10px 10px 10px;\">Logout</a><span style=\"float:right;font-size:15px;margin:0px 10px 10px 10px;\">"."Welcome,".$_SESSION['name']."</span>";

			 }
			 else
			 {
			 ?>
				<a href="login1.php" class="btn btn-danger" style="font-family: 'Audiowide', cursive;float:right;font-size:15px;margin:0px 10px 10px 10px;">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="signup.php?value=0" class="btn btn-danger" style="font-family: 'Audiowide', cursive;float:right; font-size:15px;margin:0px auto;">Signup</a>
			<?php } ?>
	
	
		<div class="span12">
			<!-- Photos slider -->
			<div id="myCarousel" class="carousel slide" style="width:1310px; float:left;margin:30px 0px 3px 0px;">		
				<div class="carousel-inner">
				<div class="active item"><img src="images/6.jpg" style="width:1310px;height:420px;"/></div>
				<div class="item"><img src="images/7.jpg" style="width:1310px;height:420px;"/> </div>
				<div class="item"><img src="images/8.jpg" style="width:1310px;height:420px;"/></div>
				<div class="item"><img src="images/9.jpg" style="width:1310px;height:420px;"/></div>
				<div class="item"><img src="images/10.jpg" style="width:1310px;height:420px;"/> </div>
				<div class="item"><img src="images/11.png"style="width:1310px;height:420px;"/></div>
				
				</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
		
	</div>
	
</body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>