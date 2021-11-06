<?php
session_start();
if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");
		
	}
$tbl_name="users"; // Table name
$name=$_SESSION['name'];

require('firstimport.php');

mysqli_select_db($conn,"$db_name") or die("cannot select db");

$result=mysqli_query($conn,"SELECT * FROM $tbl_name WHERE f_name='$name'");
$row=mysqli_fetch_array($result);


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
		
		<div class="span12 well pass1" style="margin-top: 5px;">
			<table style="width:100%;">
			<tr>
				<td><span style="font-weight:bold;font-size:25px;">Profile</span>
				<a id="editp1" style="float:right;margin-right:5%;"class="btn btn-danger"> Edit Profile</a></td>
			<tr/>
			
			<tr>
				<td>
					<div class="span8" style="float:left;width:80%;">
					<table class="table">
					<tr><td >First Name : </td> <td style="text-transform:capitalize;"><?php echo $row['f_name']; ?></td></tr>
					<tr><td >Last Name : </td> <td style="text-transform:capitalize;"><?php echo $row['l_name']; ?></td></tr>
					<tr><td>E-Mail : </td> <td><?php echo $row['email'];?></td></tr>
					<tr><td>Dob : </td> <td><?php echo $row['dob']; ?></td></tr>
					<tr><td> Gender :</td> <td><?php echo $row['gender'];?></td></tr>
					<tr><td>Marital Status : </td> <td><?php echo $row['marital']; ?></td></tr>
					<tr><td>Mobile No : </td> <td><?php echo $row['mobile'];?></td></tr>
					<tr><td>Security Question : </td> <td><?php echo $row['ques']; ?></td></tr>
					<tr><td>Answer : </td> <td><?php echo $row['ans']; ?></td></tr>
					<tr><td></td> <td></td></tr>
					</table>
					</div>
				</td>
			</tr>
			
			<tr>
				<td>
				<div class="btn btn-warning"><span style="width:35%;"><a id="cpass">Change Password</a></span></div>
				<span class="label label-success" id="chang" style="float:right;display:none;">Password Successfully Changed &nbsp;&nbsp;&nbsp;<span>  <!-- display:none; color:#0000ff;-->
				</td>
			</tr>
		</table>
		</div>

		<div class="span12 pass2 " style="display:none;">
		<div class="span4 well">	
		<h2>Change Password</h2>	
		<br/>
		<br/>
				<form action="changepass.php" method="get" onsubmit="return fgth()">
				<label>New Password</label><input id="p1" name ="new1" type="password" class="input-large" onkeyup="return check123()"><span id="ps" ></span></td><br><br>  <!-- onkeyup=="check()" -->
				<label>Repeat Password</label><input id="p2" name="pass" class="input-large" type="password" onkeyup="checkk()">
				<br /><span id="match" style="color:#ff0000;visibility:hidden;">&nbsp;&nbsp;Password Don't Match</span><br><br> 
				<input id="sub" type="submit" disabled="disabled" class="btn btn-danger" value="Change Password">
				</form>
		</div>
		</div>
		
		
		
		<div class="span12 pass3 " style="display:none;">
		<div class="span8 well">
			<table style="width:100%;">
			<tr>
				<td><span style="font-weight:bold;font-size:25px;">Profile</span>

			<tr/>
			
			<tr>
				<td>
					<form action="editprofile.php" method="post" enctype="multipart/form-data">
					<div class="span6" style="float:left;width:80%;">
					<table class="table">
					
					<tr><td >First Name  </td> <td style="text-transform:capitalize; onblur="return name1()"><?php echo $name;?></td></tr>
					<tr><td> Last name </td> <td><input name="ln" type="text" value="<?php echo $row['l_name'];?>"></td></tr>
					<tr><td>E-Mail  </td> <td><input name="mail1" type="mail" value="<?php echo $row['email'];?>"></td></tr>
					<tr><td>Dob  </td> <td><input name="dob1" type="text" value="<?php echo $row['dob'];?>"></td></tr>
					<tr><td>Gender  </td>  <td><input name="gnd1" type="text" value="<?php echo $row['gender'];?>"></td></tr>
					<tr><td>Marital Status </td>  <td><input name="mrt1" type="text" value="<?php echo $row['marital'];?>"></td></tr>
					<tr><td>Mobile No.  </td>  <td><input name="mon1" type="text" value="<?php echo $row['mobile'];?>"></td></tr>
					<tr><td>Security Question  </td>  <td><input name="que1" type="text" value="<?php echo $row['ques'];?>"></td></tr>
					<tr><td>Answer  </td>  <td><input name="ans1" type="text" value="<?php echo $row['ans'];?>"></td></tr>
					<tr><td></td> <td><input type="submit" value="Save Profile" class="btn btn-danger"></td></tr>
				
					</table>
					</div>
					</form>
				</td>
			</tr>
			</table>
		</div>
		</div>	
	</div>

  
<?php mysqli_close($conn); ?>
 
 
 
 <script type="text/javascript">
$(document).ready(function(){
  $("#cpass").click(function(){
    $(".pass1").fadeOut(1000,"linear",function(){$(".pass2").fadeIn(1000);});
	
  });
});

$(document).ready(function(){
  $("#editp1").click(function(){
    $(".pass1").fadeOut(1000,"linear",function(){$(".pass3").fadeIn(1000);});
	
  });
});

$(document).ready(function(){
  $("#editp2").click(function(){
    $(".pass3").fadeOut(1000,"linear",function(){$(".pass1").fadeIn(1000);});
  });
});


function checkk(){

var p1=document.getElementById("p1").value;
var p2=document.getElementById("p2").value;
//alert(" p1 : "+p1+"  p2 : "+p2);

	if(p1 == p2)
	{document.getElementById("match").style.visibility="hidden";
		document.getElementById("sub").disabled=false;
	}else
	{
		document.getElementById("match").style.visibility="";
		document.getElementById("sub").disabled=true;
	}
}

function check123()
	{
		var c=document.getElementById("p1").value;
		//alert(c.length);
		if(c.length < 8 )
		{
			document.getElementById("ps").innerHTML="<br/><font color=red>password must be atleast 8 - 32 char long</font>";
			return false;
		}
		else
		{
			document.getElementById("ps").innerHTML="";
			return true;
		}
	}
</script>
<?php

if(isset($_SESSION['error']))
{
if($_SESSION['error']==6)
{echo "<script>document.getElementById(\"chang\").style.display=\"\";</script>";
 }
//unset($_SESSION['error']);
}
?>

</body>
  
  
</html>