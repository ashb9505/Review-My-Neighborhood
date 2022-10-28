<html>
<head>
    <title> Registration page </title>
<meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="asset/singup.css">
</head>
    <body>



<h1>Welcome Home </h1>
  <hr>


    <div class="login-box">
    <img src="asset/avatar.png" class="avatar">


            <form method="POST" action="includes/user.inc.php">

            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" autofocus="" required="">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required="">
<p>First name:</p>
<input type="text" name="firstName" placeholder="first Name" required="">
            <p>Last Name:</p>

<input type="text" name="LastName" placeholder="Last Name" required="">
            
<input type="submit" name="submit" value="Register">
            <p> existing user?<a href="login.php">  Login Here</a></p><br>




            </form>


        </div>

    </body>
</html>
