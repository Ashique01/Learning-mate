<?php require('partials/head.php'); ?>

<body>

<?php require('partials/nav_pages.php'); ?>
    <!-- Header Start -->
    <?php require('partials/banner1.php'); ?>
    <!-- Header End -->

    <form method=get action=mentor_result.php style="text-align: center;">

	<table align="center">

        <div><h1 class="text-success">Add New Mentor Record</h1></div>

        <tr><td>Name: </td><td><input type=text name=name></td></tr>

        <tr><td>Password: </td><td><input type=text name=password></td></tr>

        <tr><td>Email: </td><td><input type=text name=email></td></tr>

    </table>

	<br>
    <input class="btn btn-primary btn-lg px-5" type=submit value=insert>
</form>

<?php require('partials/footer.php'); ?>
