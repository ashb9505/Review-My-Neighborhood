<?php
require('includes/mysqli_connect.php');
session_start();
$result = "";
$r = "";
// if (isset($_SESSION['user_id'])) {
//          header("location: /");
// //
// exit();
// }

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $myusername = mysqli_real_escape_string($dbc,$_POST['username']);
      $mypassword = mysqli_real_escape_string($dbc,$_POST['password']);


$sql = "SELECT userName, firstName, DAYNAME(lastLogin) as dayName, MONTHNAME(lastLogin) as month, DAY(lastLogin) as day, YEAR(lastLogin) as year FROM userTable WHERE userName='$myusername' AND password=SHA1('$mypassword')";

      $result = mysqli_query($dbc,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);
      if($count == 1) {
        $first_Name = $row['firstName'];

        $_SESSION['user_id'] = $myusername;

        $_SESSION['first'] = $first_Name;


         $logintime = "UPDATE userTable SET lastLogin = now() where userName = '$myusername'";
          mysqli_query($dbc, $logintime);

         header("location: ./reviews.php");


      }   else {

        echo '<script>alert("Your Login Name or Password is invalid")</script>';


        //  $error = "Your Login Name or Password is invalid";

       }
   }




  ?>
<html>
<head>
    <title> CSC-231 Final Project </title>

    <link rel="stylesheet" type="text/css" href="asset/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
    <body>



<h1>Welcome Home </h1>
  <hr>


    <div class="login-box">
    <img src="asset/avatar.png" class="avatar">



            <form  name="index.php" action="" method="POST" >

            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required="" autofocus="">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required="">

            <input type="submit" name="submit" value="Login">
            <p> New? <a href="register.php">          Signup now</a></p><br>


            <a href="#">Forget Password</a>


            </form>


        </div>





    </body>
</html>
