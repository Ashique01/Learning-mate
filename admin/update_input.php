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



<?php require('partials/head.php'); ?>

<body>

<?php require('partials/nav.php'); ?>
<h1>Update Record</h1>



<form style="margin-top:150px" method=get action=update_result.php>

	<table class="table table-bordered table-dark w-25 mx-auto">

	<tr><td>Unique ID: </td><td><input type=text name=unique_id value='<?php echo $unique_id; ?>'></td></tr>

	<tr><td>Fname: </td><td><input type=text name=fname value='<?php echo $fname; ?>'></td></tr>

	<tr><td>Lname: </td><td><input type=text name=lname value='<?php echo $lname; ?>'></td></tr>

	<tr><td>Email: </td><td><input type=text name=email value='<?php echo $email; ?>'></td></tr>

	<tr><td>Password: </td><td><input type=text name=password value='<?php echo $password; ?>'></td></tr>

	<tr><td>Image: </td><td><input type="text" name=img value='<?php echo $img; ?>'></td></tr>

	<tr><td>Status: </td><td><input type=text name=status value='<?php echo $status; ?>'></td></tr>
	<tr><td>Update Info</td><td><input class="btn btn-success p-2 mx-auto" type=submit value=Update></td></tr>

	</table>

	

</form>