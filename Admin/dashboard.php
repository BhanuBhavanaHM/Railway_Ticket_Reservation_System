<?php
session_start();
require('../firstimport.php');

mysqli_select_db($conn,"$db_name") or die("cannot select db");
$k=0;

  $tbl_name="train_list";
  $sql="SELECT * FROM $tbl_name";
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
  <link href="../css/bootstrap.min.css" rel="stylesheet" ></link>
  <link href="../css/bootstrap.css" rel="stylesheet" ></link>
  <link href="../css/Default.css" rel="stylesheet" > </link>
  <script type="text/javascript" src="../js/jquery.js"></script>

  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/man.js"></script>

</head>
<body>

  <div class="wrap" style="background-image: linear-gradient(rgba(172,182,229,0.9), rgba(134,253,232,0.9));">
    <!-- Header -->
    <div class="header">
      <div style="float:left;width:100px;margin:30px 0px 0px 30px;">
        <img src="../images/logo.jpg" style="border-radius: 50%;" />
      </div>    
      <div>
      <div id="heading">
        <a href="dashboard.php"><span style="font-family: 'Audiowide', cursive;margin:30px 0px 0px 30px;">Deccan Express</span></a>
      </div>
      </div>
    </div>
    
<!-- Navigation bar -->

        <a class="brand" href="dashboard.php" title="Home"><img src="../images/home.png" style="width:50px;height:30px;margin:0px 40px 10px 20px;"/></a>
        <a class="brand" href="addTrain.php" title="Find train" style="font-size:25px;font-family:  cursive;margin:0px 40px 10px 20px;"> ADD Train</a>
        <a class="brand" href="delTrain.php" title="Find train" style="font-size:25px;font-family:  cursive;margin:0px 40px 10px 20px;"> Delete Train</a>
        <?php
       if(isset($_SESSION['name'])) 
       {
       echo "<a href=\"logout.php\" class=\"btn btn-warning\" style=\"float:right;font-size:15px;margin:0px 10px 10px 10px;\">Logout</a><span style=\"float:right;font-size:15px;margin:0px 10px 10px 10px;\">"."Welcome,".$_SESSION['name']."</span>";

       }
       else
       {
        session_destroy();
        echo "<a href=\"logout.php\" class=\"btn btn-warning\" style=\"float:right;font-size:15px;margin:0px 10px 10px 10px;\">Logout</a><span style=\"float:right;font-size:15px;margin:0px 10px 10px 10px;\"></span>";

  ?>      

      <?php } ?>
    <div class="span12">
      <div class="display" style="height:30px;">
        <span style="font-size:25px;font-family:  cursive;margin:0px 40px 10px 20px;margin:0 auto;">Train list</span>
        <table class="table" border="5px">
        <?php
            if ($result->num_rows > 0) {?>
                <table class="table">
                    <tr>
                        <th>Number</th>
                        <th>Name</th>
                        <th>Origin</th>
                        <th>Destination</th>
                        <th>Arrival</th>
                        <th>Departure</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                        <th>Sun</th>
                    </tr>
        <?php
            // output data of each row
            while($row = $result->fetch_assoc()) {?>
                    <tr>
                        </td>
                        <td><?php echo $row["Number"]; ?></td>
                        <td><?php echo $row["Name"]; ?></td>
                        <td><?php echo $row["Origin"]; ?></td>
                        <td><?php echo $row["Destination"]; ?></td>
                        <td><?php echo $row["Arrival"]; ?></td>
                        <td><?php echo $row["Departure"]; ?></td>
                        <td><?php echo $row["Mon"]; ?></td>
                        <td><?php echo $row["Tue"]; ?></td>
                        <td><?php echo $row["Wed"]; ?></td>
                        <td><?php echo $row["Thu"]; ?></td>
                        <td><?php echo $row["Fri"]; ?></td>
                        <td><?php echo $row["Sat"]; ?></td>
                        <td><?php echo $row["Sun"]; ?></td>
                    </tr>
            <?php } ?>
            </table>
            <?php
            } else {  ?>
                <p id="none"> No results found :(</p>
            <?php }
            $conn->close(); ?>
      </div>
    </div>


  
  