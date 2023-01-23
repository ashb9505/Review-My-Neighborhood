 
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
 <?php
$servername = "localhost";
$username = "iabak1";
$password = "_fal22_0";
$dbname = "fal22_cis442_iabak1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Comments, Livability, Amenities, CostOfLiving, Crime, Employment, housng, Schools, Comments, ReivewDate, zipcode, reviewID, userID FROM reviews";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["comments"]."</td><td>".$row["userID"]." ".$row["zipcode"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>