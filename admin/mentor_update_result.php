<?php

	$id = $_GET["id"];
	$name = $_GET["name"];
	$email = $_GET["email"];
	$password = $_GET["password"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	$query 	= "UPDATE mentors SET name='$name', email='$email', password='$password' WHERE id = $id";

	echo "<script> window.location.assign('mentor_read.php'); </script>";



	mysqli_query( $connect, $query )

		or die("Can not execute query");

?>