<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }

?>

<?php include_once "head.php"; ?>

<body>
  <?php require ("nav.php"); ?>
  <?php require("form.php"); ?>
