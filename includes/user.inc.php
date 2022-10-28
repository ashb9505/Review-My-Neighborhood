<?php
//Connect to the database
if($_SERVER["REQUEST_METHOD"] == "POST") {
require('mysqli_connect.php');
if ($_POST['username'] == "" || ($_POST['password'] == "") || ($_POST['firstName'] == "" || ($_POST['LastName'] ==""))) {
        // echo '<script>alert("you must complate the form")</script>';

        ?>
        <script type="text/javascript">
        alert("you must complate the form");
        window.location.href = "../register.php";
        </script>
        <?php

        
        // header("Location: Register.php"); /* Redirect browser */

        /* Make sure that code below does not get executed when we redirect. */
        //exit;


}

else {

  $userName =mysqli_real_escape_string($dbc,  $_POST['username']);
  $password =mysqli_real_escape_string ($dbc, $_POST['password']);
  $firstName =mysqli_real_escape_string($dbc, $_POST['firstName']);
  $LastName =mysqli_real_escape_string($dbc, $_POST['LastName']);

  $query = "INSERT INTO userTable (userName,password,firstName,lastName) VALUES ('$userName',sha1('$password'),'$firstName','$LastName')";


$result = @mysqli_query($dbc, $query)or die(mysqli_error($dbc));

}

if ($result) {
//echo "YOUR REGISTRATION IS COMPLETED...";
// echo '<script>alert("YOUR REGISTRATION IS COMPLETED... Please Login")</script>';


?>
<script type="text/javascript">
alert("YOUR REGISTRATION IS COMPLETED... Please Login");
window.location.href = "../login.php";
</script>
<?php

// sleep(10);
        // header("Location: ../login.php"); /* Redirect browser */


}

else {

	// echo "Unknown Error!";
  echo '<script>alert("Unknown Error!")</script>';

  
}


}
else{
  
  header("Location: ../register.php");
}
 ?>

