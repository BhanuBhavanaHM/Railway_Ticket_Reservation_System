<?php
session_start();
	
require('firstimport.php');
if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");
		
	}
$tbl_name="booking";

mysqli_select_db($conn,"$db_name") or die("cannot select db");
	$name1=$_SESSION['name'];
	$tno=$_GET['Tnumber'];
	$doj=$_GET['doj'];
	$fromstn=$_GET['fromstn'];
	$tostn=$_GET['tostn'];
	$DOB=$_GET['DOB'];
	$sql="SELECT Tnumber,doj,Name,Age,Sex,Status,DOB,class FROM $tbl_name WHERE (uname='$name1' and Tnumber='$tno' and doj='$doj' and DOB='$DOB' and fromstn='$fromstn' and tostn='$tostn')";
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
			 // echo "<span style=\"float:right;font-size:15px;margin:0px 30px 10px 10px;\">"."Welcome,".$_SESSION['name']."</span>&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-danger\" style=\"float:right;font-size:15px;margin:0px 10px 10px 10px;\">Logout</a>";

			 echo "<a href=\"logout.php\" class=\"btn btn-danger\" style=\"float:right;font-size:15px;margin:0px 10px 10px 10px;\">Logout</a><span style=\"float:right;font-size:15px;margin:0px 10px 10px 10px;\">"."Welcome,".$_SESSION['name']."</span>";

			 }
			 else
			 {
			 ?>
				<a href="login1.php" class="btn btn-danger" style="font-family: 'Audiowide', cursive;float:right;font-size:15px;margin:0px 10px 10px 10px;">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="signup.php?value=0" class="btn btn-danger" style="font-family: 'Audiowide', cursive;float:right; font-size:15px;margin:0px auto;">Signup</a>
			<?php } ?>
	
	
	
		<div class="span12" style="margin-top: 20px;margin-left: 40px;">
			<div align="center" style="border-bottom: 3px solid #ddd;">
				<h2>Booked Ticket History </h2>
			
			</div>
			<br>
		
	<div >
				<table  class="table">
				<col width="90">
					<col width="90">
				<col width="90">
				<col width="110">
				<col width="90">
				<col width="90">
				<col width="90">
				<col width="90">
				<tr>
					<th style="width:10px;border-top:0px;">SNo.</th>
					<th style="width:100px;border-top:0px;">Train Number</th>
					<th style="width:100px;border-top:0px;">Date Of Journey</th>
					<th style="width:100px;border-top:0px;">Name</th>
					<th style="width:100px;border-top:0px;">Age</th>
					<th style="width:100px;border-top:0px;">Sex</th>
					<th style="width:100px;border-top:0px;">Status</th>
					<th style="width:100px;border-top:0px;">DOB</th>
					<th style="width:100px;border-top:0px;">Class</th>
					
				</tr>	
				<?php
				
				$n=1;
				while($row=mysqli_fetch_array($result)){
					if($n%2!=0)
					{
						$GLOBALS['class']=$row['class'];
						
				?>
				<tr class="text-error">
					<th style="width:10px;"> <?php echo $n; ?> </th>
					<th style="width:100px;"> <?php echo $row['Tnumber']; ?> </th>
					<th style="width:100px;"> <?php echo $row['doj']; ?> </th>
					<th style="width:100px;"> <?php echo $row['Name']; ?> </th>
					<th style="width:100px;"> <?php echo $row['Age']; ?> </th>
					<th style="width:100px;"> <?php echo $row['Sex']; ?> </th>
					<th style="width:100px;"> <?php echo $row['Status']; ?> </th>
					<th style="width:100px;"> <?php echo $row['DOB']; ?> </th>
					<th style="width:100px;"> <?php echo $class; ?> </th>
					<button></button>
				</tr>
				<?php 
					}
					else
					{
				?>
				<tr class="text-info">
					<th style="width:10px;"> <?php echo $n; ?> </th>
					<th style="width:100px;"> <?php echo $row['Tnumber']; ?> </th>
					<th style="width:100px;"> <?php echo $row['doj']; ?> </th>
					<th style="width:100px;"> <?php echo $row['Name']; ?> </th>
					<th style="width:100px;"> <?php echo $row['Age']; ?> </th>
					<th style="width:100px;"> <?php echo $row['Sex']; ?> </th>
					<th style="width:100px;"> <?php echo $row['Status']; ?> </th>
					<th style="width:100px;"> <?php echo $row['DOB']; ?> </th>
					<th style="width:100px;"> <?php echo $class; ?> </th>
				</tr>
				<?php
					}
					$n++;
				}
				?>
				<?php 
				$sql2="Select ".$class." from train_list WHERE Number=$tno";
				//echo $sql2;
				$result2=mysqli_query($conn,$sql2);
				while($row=mysqli_fetch_array($result2)){
					$GLOBALS['amt']=$row[$class];
				}
				?>
				</table>
				<table class="table">
				<tr class="text-info">
					<td>Amount Paid :<?php $tot=($n-1)*$amt;echo $tot;?></td>
				</tr>
				</table>
				
								<button class="btn btn-danger" onClick="window.print()">Print </button>
		
	</div>
</body>
</html>	