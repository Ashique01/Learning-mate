<?php

	$name = $_GET["name"];
	$password = $_GET["password"];
	$email = $_GET["email"];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO mentors VALUES ( '', '$name', '$password', '$email' )" )

		or die("Can not execute query");

	
		echo "<script> window.location.assign('mentor_input.php'); </script>";
?>