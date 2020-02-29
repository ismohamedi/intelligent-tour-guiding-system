<!--
author: CodeTechDevelopers
author URL: http://codetechdevelopers.com
-->
<?php
session_start();
//if (!$_SESSION['uname']) {
// 	echo'
// 	<script>
// 	window.location.assign("../login.php");
// 	</script>
// 	';
// }
// $name = $_SESSION['uname'];
// $time_out = $_SESSION['expire'];
// $rememberme = $_SESSION['remember'];
// $now = time();
// if($rememberme == ""){
// if($now > $time_out){
// 	echo'
// 	<script>
// 	window.location.assign("../login.php");
// 	</script>
// 	';
// }
// }
include '../tourtzdb.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Intelligent tourist Guiding system</title>
<link rel="icon"  href="../images/songea3.jpg">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Intellegent tourist Guiding system,  Flat Web system, Android Compatible web system,
Smartphone Compatible web system" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- css files -->
    <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="../css/attraction.css" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="../css/css_slider.css" type="text/css" rel="stylesheet" media="all">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../fonts/">
    <!-- fontawesome css -->
	<!-- //css files -->

	<!-- google fonts -->
	<!-- <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet"> -->
	<!-- //google fonts -->

</head>
<body>
	<header>
	<div class="top-head container">
		<div class="ml-auto text-right right-p">
			<!-- <ul>
				<li class="mr-3">
					<span class="fa fa-clock-o"></span>we are online 24 hours</li>
				<li>
					<span class="fa fa-envelope-open"></span> <a href="mailto:ismailimohamedi1995@gmail.com">codetechdevelopers@gmail.com</a> </li>
			</ul> -->
		</div>
	</div>
	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex">
			<div id="logo" style="margin-left: 0%">
				<h1> <a href="../index.php"><img src="../images/songea3.jpg" alt="">Tour Guiding system</a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1" style="margin-right: -20%">

<!--================= html code for menu lists================= -->

				<li class="active"><a href="../index.php">Home</a></li>
				<li class=""><a href="../index.php?#about">About US</a></li>
				<li class=""><a href="../index.php?#services">Services</a></li>
				<li class=""><a href="attractions.php">Attractions</a></li>
				<li class=""><a href="../accommodation/accommodations.php?id=<?php $id= 0; echo$id;?>">Accomodation</a></li>
				<li class=""><a href="../index.php?#subscribe">Contact us</a></li>
			<!-- 	<li class=""><a href="../logout.php" style="color: red;background: white" >logout</a></li>
				<li class=""><a href="../register.php">Sign Up</a></li> -->
				
			<!-- ==================	the end of menu list================= -->
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- banner -->
<div class="layer1" id="layer1">
			<div class="row" id="row">
				<div class="col-lg-5" id="searching">
					<div class="form">
     <input type="text" id="search" class="form-control" placeholder="Search here..."/>
    </div>
    <div class="suggested">
    	<h3 align="center">Click on the buttons bellow to select your preferences to visit</h3>

   <!--  	============bellow is the form for sellecting categories of attractions======= -->

    	<form method="post"> 
<label><input type="checkbox" name="attractions_category[]" value="national park"><b>National Parks</b></label> 
<label><input type="checkbox" name="attractions_category[]" value="crater"><b>Crater</b></label>
<label><input type="checkbox" name="attractions_category[]" value="game reserve"><b>Game Reserves</b></label>
 <label><input type="checkbox" name="attractions_category[]" value="Valleys"><b>Valleys</b></label>
 <label><input type="checkbox" name="attractions_category[]" value="water fall"><b>Water falls</b></label>
 <label><input type="checkbox" name="attractions_category[]" value="museum"><b>museums</b></label>
 <label><input type="checkbox" name="attractions_category[]" value="zoo"><b>Zoos</b></label>
 <label><input type="checkbox" name="attractions_category[]" value="mountain"><b>Lage Mountains🗻</b></label>
 <label><input type="checkbox" name="attractions_category[]" value="beaches"><b>Beaches 🏊</b></label>
 <label><input type="checkbox" name="attractions_category[]" value="historical site"><b>Historical sites</b></label>
 <br>
<button class="btn btn-success" id="view" name="view">View</button>	
    	</form>

    <!-- 	=================the end of form ============                   -->

    </div>
						</div>
			<div class="col-lg-7 col-md-12 px-lg-3 px-0">
	<!-- displying data form search -->
 <h3 class="tablinks" style="color:black" id="showsearch" align="center">Available Attractions</h3>
<!-- Tab content -->
<div id="about" class="tabcontent" style="display: block; height: 450px">
  <div class="result" id="result2">
  	<table>
  	<?php 
  	if(isset($_POST['view'])){
  		?>
  	<tbody>
  		
  		<?php

///////////// code for selecting attractions from the data base according selected category /////////////////////////////////////
			if(!empty($_POST['attractions_category'])){
				$count = count($_POST['attractions_category']);
foreach ($_POST['attractions_category'] as $value) {
$select = "SELECT DISTINCT * FROM attractions, location where  attractions.location_id = location.location_id   AND attraction_category_name = '$value' ORDER BY attraction_name ASC";
		 $search = mysqli_query($connection,$select);
		 while($fetch = mysqli_fetch_array($search)){

		 	///////////////bellow is display of selelected category//////////////////
		?>
<tr>
	<td> <p class="layer2"> 
		<div id="card" class="card mb-6" style="max-width: 100%;">
  <div class="row no-gutters" id="cardrow">
    <div class="col-md-12" style="margin-top: 3px;">
    	 <h5 class="card-title" style="color: white;" align="center"><a href="attraction.php?id=<?php echo$fetch["attraction_id"] ?>"><button class="btn btn-info"><?php echo $fetch['attraction_name']?></button></a></h5>
      <img src="../images/<?php echo $fetch["photos"];
      ?>" class="card-img" alt="..." height="300" width="500">
    </div>
<div class="col-md-12">
      <div class="card-body">
        <p class="layer2">
<a href="attraction.php?id=<?php echo$fetch["attraction_id"] ?>" style="background: white"><?php echo $fetch['attraction_name']?></a>
	<?php echo $fetch['full_description']?>
	<br>
	<a href="attraction.php?id=<?php echo$fetch["attraction_id"] ?>">
	<button id="more" class="btn btn-info"> check more</button></p></td>
</tr><br>
</p>
</div>
     </div>
    </div>
   </div>
<?php

 }
			}
		}
			
		?>
  	</tbody>
  <?php } else{?>
 <tbody id="result">
 </tbody>
<?php }?>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- //banner -->
<!-- <link rel="stylesheet" type="text/css" href="../js/search.js"> -->
<script src="//ajax.googleapis.com/ajax/libs/dojo/1.14.1/dojo/dojo.js"></script>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/attraction.js"></script>
<script src="../js/npm.js"></script>
</body>
 
</html>
