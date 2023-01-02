<?php require('partials/head.php'); ?>

<body>

<?php require('partials/nav_pages.php'); ?>
    <!-- Header Start -->
    <?php require('partials/banner1.php'); ?>
    <!-- Header End -->


<?php

$id = $_GET["id"];
$name = $_GET["name"];
$email = $_GET["email"];
$password = $_GET["password"];

?>

<form method=get action=mentor_update_result.php style="text-align: center;">

	<table align="center">
	
	<div><h1 class="text-success">Update User Record</h1></div>

	<tr><td></td><td><input type=hidden name=id value='<?php echo $id; ?>'></td></tr>

	<tr><td>Name: </td><td><input type=text name=name value='<?php echo $name; ?>'></td></tr>

	<tr><td>Email: </td><td><input type=text name=email value='<?php echo $email; ?>'></td></tr>

	<tr><td>Password: </td><td><input type=text name=password value='<?php echo $password; ?>'></td></tr>

	</table>

	<br>
	<input class="btn btn-primary btn-lg px-5" type=submit value=Update>

</form>

<?php require('partials/footer.php'); ?>