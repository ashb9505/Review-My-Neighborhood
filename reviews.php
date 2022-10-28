


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro-all.min.css">
	<link rel="stylesheet" href="css/master.css">
	<title></title>
</head>

<?php
if($_SERVER["REQUEST_METHOD"] == "GET") {

if(isset($_GET["zipcode"])){

	$_SESSION["zipcode"] = $_GET["zipcode"];


// $zipcode = $_SESSION['zipcode']; 

} else{
	$_SESSION['zipcode'] = 14420; 
}



}
?>




   <div class="mapouter">
    <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
            src="https://maps.google.com/maps?q=<?php echo ($_SESSION['zipcode']);?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
            scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
        <style>
            .mapouter {
                position: relative;
                text-align: right;
                height: 500px;
                width: 600px;
            }
        </style><a href="https://www.embedgooglemap.net">embed a google map</a>
        <style>
            .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 500px;
                width: 600px;
            }
        </style>

</div>
</div>

<div style=" position: absolute;
top: 70px;
right: 750px; font-size: medium;" >  

   <form method="GET" action="">
    <div class="form-group">

		<h2></h>How Do You Rate <?php echo ($_SESSION['zipcode']);?> </h2>

        <label>Livability:</label> <br>


	<input data-role="rating" data-value="3" data-values="1, 2, 3, 4, 5" data-star-color="green" data-stared-color="red" name="Livability">
<br>         <label>Amenities:</label> <br>

	<input data-role="rating" data-value="3" data-values="1, 2, 3, 4, 5" data-star-color="green" data-stared-color="red" name="Amenities">
<br>        <label>Cost of Living:</label> <br>

<input data-role="rating" data-value="3" data-values="1, 2, 3, 4, 5" data-star-color="green" data-stared-color="red" name="Cost_of_Living">
<br>        <label>Crime:</label> <br>	

<input data-role="rating" data-value="3" data-values="1, 2, 3, 4, 5" data-star-color="green" data-stared-color="red" name="Crime">
<br>        <label>Employment:</label> <br>

<input data-role="rating" data-value="3" data-values="1, 2, 3, 4, 5" data-star-color="green" data-stared-color="red" name="Employment">
<br>        <label>Housing:</label> <br>

<input data-role="rating" data-value="3" data-values="1, 2, 3, 4, 5" data-star-color="green" data-stared-color="red" name="Housing">
<br>        <label>Schools</label> <br>

<input data-role="rating" data-value="3" data-values="1, 2, 3, 4, 5" data-star-color="green" data-stared-color="red" name="Schools"> <br>
<label class="form-label" for="textAreaExample">Comments</label>

<div class="form-outline">
	
  <textarea class="form-control" id="textAreaExample1" rows="4"></textarea>
</div>

<br><br>
<input class="button primary" type="submit" value="Submit Review" name="submit">
</div>


	</form>
</div>






<br>

<br>






<h1>Overview of <?php echo ($_SESSION['zipcode']);?> Rating</h1>
<nav  class="category-menu-new" style="background-color:white;display: flex;
justify-content:flex-start;">
	<a style="pointer-events: none;" href="/mount+morris-ny/livability/"><em>Livability</em><i class="ndx5__">59</i> </a>
		<a style="pointer-events: none;" href="/mount+morris-ny/livability/#amenities-jmp"><em>Amenities</em><i class="ndx5_3">B-</i> </a>
		<a style="pointer-events: none;" href="/mount+morris-ny/cost-of-living/"><em>Cost of Living</em><i class="ndx5_3">B+</i> </a>
		<a style="pointer-events: none;" href="/mount+morris-ny/crime/"><em>Crime</em><i class="ndx5_4">A-</i> </a>
		<a style="pointer-events: none;" href="/mount+morris-ny/employment/"><em>Employment</em><i class="ndx5_1">D-</i> </a>
		<a style="pointer-events: none;" href="/mount+morris-ny/real-estate/"><em>Housing</em><i class="ndx5_0">F</i> </a>
		<a style="pointer-events: none;" href="/mount+morris-ny/schools/"><em>Schools</em><i class="ndx5_0">F</i> </a> 
	  </nav>





	<script src="https://cdn.korzh.com/metroui/v4/js/metro.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/main.js"></script>

	<!-- <div class="hero" style="background-image: url('images/hero_1.jpg');"></div> -->

</body>

</html>