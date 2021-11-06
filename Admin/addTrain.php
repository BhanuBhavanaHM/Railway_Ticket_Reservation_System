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
<body style="background-image: linear-gradient(rgba(172,182,229,0.9), rgba(134,253,232,0.9));">

  <div class="wrap">
    <!-- Header -->
    <div class="header">
      <div style="float:left;width:100px;margin:30px 0px 0px 30px;">
      
				<a class="brand" href="dashboard.php" ><img src="../images/back.png" style="width:70px;height:60px;"></a>
      </div>    
      <div>
       </div>
    </div>
    
<!-- Navigation bar -->

        <?php
       if(isset($_SESSION['uname'])) 
       {
       echo "<a href=\"logout.php\" class=\"btn btn-warning\" style=\"float:right;font-size:15px;margin:0px 10px 10px 10px;\">Logout</a><span style=\"float:right;font-size:15px;margin:0px 10px 10px 10px;\">"."Welcome,".$_SESSION['uname']."</span>";

       }
       else
       {
        
        session_start();
  session_destroy();
 }?>
		
		
		<div class="table" style="margin: 0 auto;">
			<h1>Add Train information</h1>
			<h5>(PLEASE ON CAPS LOCK)</h5>
		<form name="signup"  method="post" action="added.php" onsubmit="return valid12()">
		<table>
		<tr>
			<td style="border-top:0px;"> Train Number <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="text" name="TNumber" class="input-block-level" placeholder="Enter the Train Number" onblur="return name1()"><span id="fn"></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Train Name <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" name="TName" class="input-block-level" placeholder="Enter the Train name" onblur="return name12()"><span id="ln"></span></td>
		</tr>
				<tr>
			<td style="border-top:0px;"> Origin <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="text" name="Origin" class="input-block-level" placeholder="Enter the Origin" onblur="return name1()"><span id="fn"></span></td>
			<td style="border-top:0px;"> Destination <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" name="Destination" class="input-block-level" placeholder="Enter the Destination" onblur="return name12()"><span id="ln"></span></td>
		</tr>
				<tr>
			<td style="border-top:0px;"> Arrival <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="text" name="Arrival" class="input-block-level" placeholder="Enter the Arrival" onblur="return name1()"><span id="fn"></span></td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Departure <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" name="Departure" class="input-block-level" placeholder="Enter the Departure" onblur="return name12()"><span id="ln"></span></td>
		</tr>

				<tr>
			<td style="border-top:0px;"> Station1 <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="text" name="st1" class="input-block-level" placeholder="Enter the Station1" onblur="return name1()"><span id="fn"></span></td>
			<td style="border-top:0px;"> Arrival <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" name="arr1" class="input-block-level" placeholder="Enter the Arrival" onblur="return name12()"><span id="ln"></span></td>
		</tr>
				<tr>
			<td style="border-top:0px;"> Station2 <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="text" name="st2" class="input-block-level" placeholder="Enter the Station2" onblur="return name1()"><span id="fn"></span></td>
			<td style="border-top:0px;"> Arrival <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" name="arr2" class="input-block-level" placeholder="Enter the Arrival" onblur="return name12()"><span id="ln"></span></td>
		</tr>
				<tr>
			<td style="border-top:0px;"> Station3 <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="text" name="st3" class="input-block-level" placeholder="Enter the Station3" onblur="return name1()"><span id="fn"></span></td>
			<td style="border-top:0px;"> Arrival <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" name="arr3" class="input-block-level" placeholder="Enter the Arrival" onblur="return name12()"><span id="ln"></span></td>
		</tr>
				<tr>
			<td style="border-top:0px;"> Station4 <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="text" name="st4" class="input-block-level" placeholder="Enter the Station4" onblur="return name1()"><span id="fn"></span></td>
			<td style="border-top:0px;"> Arrival <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" name="arr4" class="input-block-level" placeholder="Enter the Arrival" onblur="return name12()"><span id="ln"></span></td>
		</tr>
				<tr>
			<td style="border-top:0px;"> Station5 <font color=red>* </font></td>
			<td style="border-top:0px;"><input type="text" name="st5" class="input-block-level" placeholder="Enter the Station5" onblur="return name1()"><span id="fn"></span></td>
				<td style="border-top:0px;"> Arrival <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="text" name="arr5" class="input-block-level" placeholder="Enter the Arrival" onblur="return name12()"><span id="ln"></span></td>
		</tr>

		
		<tr>
			<td style="border-top:0px;"><input class="btn btn-danger"type="submit" value="submit" id="subb" name="sb"></td>
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