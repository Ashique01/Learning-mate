<?php require('partials/head.php'); ?>

<body>

<?php require('partials/nav.php'); ?>
    <!-- Header Start -->
    <?php require('banner1.php'); ?>
    <!-- Header End -->

    <form method=get action=user_result.php style="text-align: center;">

	<table align="center">

        <div><h1 class="text-success">Add New Mentor Record</h1></div>

        <tr><td>Unique ID: </td><td><input type=text name=unique_id></td></tr>

        <tr><td>Fname: </td><td><input type=text name=fname></td></tr>

        <tr><td>Lname: </td><td><input type=text name=lname></td></tr>

        <tr><td>Email: </td><td><input type=text name=email></td></tr>

        <tr><td>Password: </td><td><input type=text name=password></td></tr>

        <tr><td>Image: </td><td><input type="text" name=img></td></tr>

        <tr><td>Status: </td><td><input type=text name=status></td></tr>

    </table>

	<br>
    <input class="btn btn-primary btn-lg px-5" type=submit value=insert>
</form>

<?php require('partials/footer.php'); ?>
