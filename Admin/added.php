<?php
session_start();
require('../firstimport.php');
if(isset($_SESSION['name'])){}
	else{
		header("location:index.php");
		
	}


mysqli_select_db($conn,"$db_name")or die("cannot select DB");
if(isset($_POST['sb'])){

$Tnumber=$_POST['TNumber'];
$Tname=$_POST['TName'];
$Origin=$_POST['Origin'];
$Destination=$_POST['Destination'];
$Arrival=$_POST['Arrival'];
$Departure=$_POST['Departure'];
$st1=$_POST['st1'];
$st2=$_POST['st2'];
$st3=$_POST['st3'];
$st4=$_POST['st4'];
$st5=$_POST['st5'];
$arr1=$_POST['arr1'];
$arr2=$_POST['arr2'];
$arr3=$_POST['arr3'];
$arr4=$_POST['arr4'];
$arr5=$_POST['arr5'];



	$sq1="INSERT INTO `train_list`(`Number`, `Name`, `Origin`, `Destination`, `Arrival`, `Departure`, `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, `Sat`, `Sun`, `1A`, `2A`, `3A`, `SL`, `General`, `Ladies`, `Tatkal`) VALUES ($Tnumber,'$Tname','$Origin','$Destination','$Arrival','$Departure','Y','Y','Y','Y','Y','Y','Y',2500,1000,500,250,2,1,3)";
	$result=mysqli_query($conn,$sq1);

	$sq2="INSERT INTO `seats_availability`(`Train_No`, `Train_Name`, `1A`, `2A`, `3A`, `AC`, `CC`, `SL`) VALUES ($Tnumber,'$Tname',5,5,5,5,5,5)";
	$result=mysqli_query($conn,$sq2);

	$sq3="INSERT INTO `interlist`(`Number`, `st1`, `st1arri`, `st2`, `st2arri`, `st3`, `st3arri`, `st4`, `st4arri`, `st5`, `st5arri`, `Ori`, `Oriarri`, `Dest`, `Desarri`, `Name`, `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, `Sat`, `Sun`) VALUES ($Tnumber,'$st1','$arr1','$st2','$arr2','$st3','$arr3','$st4','$arr4','$st5','$arr5','$Origin','$Arrival','$Destination','$Departure','$Tname','Y','Y','Y','Y','Y','Y','Y')";
	$result=mysqli_query($conn,$sq3);

	header("location:dashboard.php");

}	
?>