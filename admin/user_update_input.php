<?php require('partials/head.php'); ?>

<body>

<?php require('partials/nav_pages.php'); ?>
    <!-- Header Start -->
    <?php require('partials/banner1.php'); ?>
    <!-- Header End -->

<?php

$user_id = $_GET["user_id"];
$unique_id = $_GET["unique_id"];
$fname = $_GET["fname"];
$lname = $_GET["lname"];
$email = $_GET["email"];
$password = $_GET["password"];
$img = $_GET["img"];
$status = $_GET["status"];

?>

<form method=get action=user_update_result.php style="text-align: center;">

	<table align="center">
	
	<div><h1 class="text-success">Update User Record</h1></div>

	<tr><td></td><td><input type=hidden name=user_id value='<?php echo $user_id; ?>'></td></tr>

	<tr><td>Unique ID: </td><td><input type=text name=unique_id value='<?php echo $unique_id; ?>'></td></tr>

	<tr><td>Fname: </td><td><input type=text name=fname value='<?php echo $fname; ?>'></td></tr>

	<tr><td>Lname: </td><td><input type=text name=lname value='<?php echo $lname; ?>'></td></tr>

	<tr><td>Email: </td><td><input type=text name=email value='<?php echo $email; ?>'></td></tr>

	<tr><td>Password: </td><td><input type=text name=password value='<?php echo $password; ?>'></td></tr>

	<tr><td>Image: </td><td><input type="file" name=img value='<?php echo $img; ?>'></td></tr>

	<tr><td>Status: </td><td><input type=text name=status value='<?php echo $status; ?>'></td></tr>

	</table>

	<br>
	<input class="btn btn-primary btn-lg px-5" type=submit value=Update>

</form>

<?php require('partials/footer.php'); ?>