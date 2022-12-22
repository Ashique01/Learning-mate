<?php require('partials/head.php'); ?>

<body>

<?php require('partials/nav.php'); ?>
    <!-- Header Start -->
    <?php require('banner1.php'); ?>
    <!-- Header End -->


<?php
    require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM users" )
		or die("Can not execute query");

		echo "<h1 class='text-center'>User List</h1> \n";
	echo "<table class='table table-striped w-75 mx-auto' > \n";
	echo "<th>User id</th> <th>Unique id</th> <th>Fname</th> <th>Lname</th> <th>Email</th> <th>Password</th> <th>Image</th> <th>Status</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $user_id </td>";
		echo "<td> $unique_id </td>";
		echo "<td> $fname </td>";
        echo "<td> $lname </td>";
        echo "<td> $email </td>";
        echo "<td> $password </td>";
        echo "<td> $img </td>";
        echo "<td> $status </td>";
		echo "<td> <a href = 'delete.php?user_id=$user_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?user_id=$user_id & unique_id=$unique_id & fname=$fname & lname=$lname & email=$email & password=$password & img=$img & status=$status'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";
?>

<?php require('partials/footer.php'); ?>