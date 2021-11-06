<?php
require('../firstimport.php');
mysqli_select_db($conn,"$db_name")or die("cannot select DB");

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
  <link href="css/Default.css" rel="stylesheet" > </link>
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
      <h5>(PLEASE Enter 6 digit Train Number)</h5>
    <form name="signup"  method="post" action="" onsubmit="return valid12()">
    <table>
    <tr>
      <td style="border-top:0px;"> Train Number <font color=red>* </font></td>
      <td style="border-top:0px;"><input type="text" name="TNumber" class="input-block-level" placeholder="Enter the Train Number" onblur="return name1()"><span id="fn"></span></td>
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
<?php

if(isset($_POST['sb']))
{
  $Tno = $_POST['TNumber'];

  $sq4 = "DELETE FROM `train_list` WHERE Number = $Tno";
  $res4 = mysqli_query($conn,$sq4);

  $sq2 = "DELETE FROM `interlist` WHERE Number = $Tno";
  $res2 = mysqli_query($conn,$sq2);

  $sq3 = "DELETE FROM `seats_availability` WHERE Train_No = $Tno";
  $res3 = mysqli_query($conn,$sq3);
}
?>