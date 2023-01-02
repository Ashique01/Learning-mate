<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "chatapp";

$connect = mysqli_connect($host, $user, $password, $db);

if(isset($_POST['login'])) {
  $uname = $_POST['login'];
  $pass = $_POST['password'];

  $sql = "SELECT  * from admin where admin_name='" . $uname . " ' AND admin_pass='" . $pass . "' limit 1";

  $result = mysqli_query($connect, $sql);

  if(mysqli_num_rows($result)==1){
    echo "<script> window.location.assign('home.php'); </script>";
  }
  else{
    echo "<script> window.location.assign('wrong.php'); </script>";
  }
}
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="css/style1.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="images/admin.png" id="icon" alt="User Icon" width="20" height="150" />
    </div>

    <!-- Login Form -->
    <form method="post" action="#">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="username">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>