<?php require('partials/head.php'); ?>

<body>

<?php require('partials/nav_pages.php'); ?>
    <!-- Header Start -->
    <?php require('partials/banner1.php'); ?>
    <!-- Header End -->


<?php
    require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM mentors" )
		or die("Can not execute query");

		echo "<h1 class='text-center'>Mentor List</h1> \n";
	echo "<table class='table table-striped w-75 mx-auto' > \n";
	echo "<th>Mentor id</th> <th>Name</th> <th>Email</th> <th>Password</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $id </td>";
		echo "<td> $name </td>";
        echo "<td> $email </td>";
        echo "<td> $password </td>";
		echo "<td> <a href = 'delete_mentor.php?id=$id'> Delete </a> </td>";
		echo "<td> <a href = 'mentor_update_input.php?id=$id & name=$name & email=$email & password=$password'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";
?>

<?php require('partials/footer.php'); ?>