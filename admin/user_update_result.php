<?php

	$user_id = $_GET["user_id"];
	$unique_id = $_GET["unique_id"];
	$fname = $_GET["fname"];
	$lname = $_GET["lname"];
	$email = $_GET["email"];
	$password = $_GET["password"];
	$img = $_GET["img"];
	$status = $_GET["status"];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	$query 	= "UPDATE users SET unique_id='$unique_id', fname='$fname', lname='$lname', email='$email', password='$password', img='$img', status='$status' WHERE user_id = $user_id";

	echo "<script> window.location.assign('user_read.php'); </script>";



	mysqli_query( $connect, $query )

		or die("Can not execute query");	

?>