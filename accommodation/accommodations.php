<!--
author: CodeTechDevelopers
author URL: http://codetechdevelopers.com
-->
<?php
session_start();
include '../tourtzdb.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Intellegent tourist Guiding system</title>
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
	<link href="../css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<link href="../css/attraction.css" type="text/css" rel="stylesheet" media="all">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link rel= "stylesheet" type="text/css" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.min.css">
    

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
			<div id="logo" style="width: 60%; margin-left: -6%">
				<h1> <a href="../index.php"><img src="../images/songea3.jpg" alt="">Tour Guiding system </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1" style="margin-right: -20%">
				<li class="active"><a href="../index.php">Home</a></li>
				<li class=""><a href="../index.php?#about">About US</a></li>
				<li class=""><a href="../index.php?#services">Services</a></li>
				<li class=""><a href="../attractions/attractions.php">Attractions</a></li>
				<li active class=""><a href="accommodations.php?id=<?php $id=0; echo$id; ?>">Accommodation</a></li>
				<li class=""><a href="../index.php#subscribe">Contact us</a></li>
		
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<div class="container-data" id="pro">
	<div class="form">
							 <form class="form-inline my-2 my-lg-0" method="post" action="#about">
      <input class="form-control mr-sm-2" type="search" placeholder="example katavi" name="keyword" aria-label="Search" id="search"><button class="btn btn-outline-success my-2 my-sm-0" name="searchdata">search</button>

    </form>
    </div>
	<div class="row" style="margin-left: 6%;margin-bottom: 2%">
				<?php

				$location_id = $_GET['id'];
				if(isset($_POST['searchdata'])){
					$keyword = $_POST['keyword']; 

					// //////////////////if search place is not emoty is going to select from accommodations  database/////////////////////////////////////////

					if(!empty($keyword)){
					$search = mysqli_query($connection,"SELECT DISTINCT hotel_name,descriptions,hotel_id,photo FROM attractions, accommodation, location where attractions.location_id = location.location_id AND  accommodation.location_id = location.location_id  AND CONCAT(accommodation.descriptions,accommodation.hotel_name,location.district,location.region) LIKE '%$keyword%' ORDER BY hotel_name ASC ") ; 
while($data = mysqli_fetch_array($search)){

	//////////////////////////////// for displaying data from the database///////////////////////////////////////
?>
	<div class="col">
<div class="card" style="width: 18rem; height: 25rem">
  <img src="../images/<?php echo$data['photo'];?>" class="card-img-top" alt="...">
  <div class="card-body" style="overflow: scroll;">
    <h5 class="card-title"><?php echo$data['hotel_name']; ?></h5>
    <p class="card-text"><?php  echo$data['descriptions']; ?>.</p>
    <a style="margin-left: 25%" href="../accommodation/accommodations.php?id=<?php echo$array["hotel_id"] ?>" class="btn btn-primary">more details</a>
  </div>
</div>
</div>
<?php
}
}
}
else if($location_id > 0){

	////////////////// here is a selection and display of accommodations from the database by the use of location_id/////////////////////////////////////
	
$search = mysqli_query($connection,"SELECT DISTINCT * FROM accommodation, location WHERE accommodation.location_id = location.location_id AND location.location_id = '$location_id'");
while($data = mysqli_fetch_array($search)){
?>
	<div class="col">
<div class="card" style="width: 18rem; height: 25rem">
  <img src="../images/<?php echo$data['photo'];?>" class="card-img-top" alt="...">
  <div class="card-body" style="overflow: scroll;">
    <h5 class="card-title"><?php echo$data['hotel_name']; ?></h5>
    <p class="card-text"><?php  echo$data['descriptions']; ?>.</p>
    <a style="margin-left: 25%" href="../accommodation/accommodations.php?id=<?php echo$array["hotel_id"] ?>" class="btn btn-primary">more details</a>
  </div>
</div>
</div>
<?php
}
}
?>
</div>
</div>
</body>
<script src="../js/bootstrap.bundle.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.js"></script>
</html>