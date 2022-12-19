<?php

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



	mysqli_query( $connect, "INSERT INTO users VALUES ( '', '$unique_id', '$fname', '$lname', '$email', '$password', '$img', '$status' )" )

		or die("Can not execute query");

?>