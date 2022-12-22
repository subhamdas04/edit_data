<?php 
	$fname = $_GET['p'];
	$email = $_GET['q'];
	$contact = $_GET['r'];

	$con = mysqli_connect("localhost", "root", "", "subham");
	$sql = "UPDATE viewdata SET fname='$fname', email='$email', contact='$contact' WHERE email='$email'";

	if(mysqli_query($con, $sql)){
		echo "Updated Successfully";
	}else{
		echo "Failed";
	}


 ?>