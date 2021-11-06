<?php
	$val=$_GET['value'];
	if($val==1){
	?>
	<h3>User already exists</h3
	<?php
	}
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
				
		
		<!-- registration form -->
		<div align="center">
		<div class="span12">
		<div style="font-size:30px;margin-top: 10px;font-weight: bold;"> Signup</div>
		<br/>
		
		
		<div class="table" style="margin: 0 auto;">
		
		<form name="signup"  method="post" action="register.php" onsubmit="return valid12()">
		<table>
		<tr>
			<td style="border-top:0px;"> First Name (Username) <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="text" name="fname" class="input-block-level" placeholder="Enter the First name" onblur="return name1()"><span id="fn"></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Last Name <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" name="lname" class="input-block-level" placeholder="Enter the Last name" onblur="return name12()"><span id="ln"></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Email ID <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="email" class="input-block-level" name="eid" placeholder="Enter the valid email id"></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Password <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="password" class="input-block-level" name="psd" placeholder="Enter the password" onblur="return check1()"> <span id="ps" ></span></td>
		</tr>
		
		<tr>
			<td style="border-top:0px;"> Confirm Password <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="password" class="input-block-level" name="cpsd" placeholder="Re-type the password" onblur="return confirm1()"> <span id="cps" ></span></td>
		</tr>
		
		<tr>
			<td style="border-top:0px;"> Gender <font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="gnd">
				<option value="male">MALE</option>
				<option value="female">FEMALE</option>
			    </select>
			</td>
		</tr>
		
		<tr>
			<td style="border-top:0px;">Marital Status <font color=red>* </font> </td>
			<td style="border-top:0px;"><select name="mrt">
				<option value="married">Married</option>
				<option value="unmarried">Unmarried</option>
			    </select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Date of Birth <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="date" class="input-block-level input-medium"  name="dob" max="<?php echo date('Y-m-d',time()-60*60*24*365*18);?>" value="<?php echo date('Y-m-d',time()-60*60*24*365*18);?>"> </td>
		</tr>
		
		<tr>
			<td style="border-top:0px;"> Mobile No. <font color=red>*</font> </td>
			<td style="border-top:0px;"> +91 <input type="text" class="input-block-level"  name="mobile" placeholder="" onblur="return mobile1()"> <span id="mn"></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Security Question <font color=red>* </font></td>
			<td style="border-top:0px;">
				<select name="ques">
				<option value="What is your pets name ?">What is your pets name ?</option>				
				<option value="What was the name of your first school?">What was the name of your first school?</option>				
				<option value="What is your favorite hero?">What is your favorite hero?</option>
				<option value="What is your favorite movie?">What is your favorite movie?</option>
				</select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Your Answer <font color=red>* </font></td>
			<td style="border-top:0px;"> <input type="text" name="ans" class="input-block-level" placeholder="Enter the your answer" onblur="return ans1()"><span id="an"></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;"><input class="btn btn-danger"type="submit" value="submit" id="subb" ></td>
			<td style="border-top:0px;"><input class="btn btn-danger"type="reset" value="Reset"></td>
		</tr>
		
		</table>
		</form>
		</div>
		</div>
		</div>

	</div>

</body>
</html>