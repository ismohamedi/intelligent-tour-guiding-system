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
<link rel="icon"  href="sondea3.jpg">
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
    <link href="../css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->


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
			<div id="logo">
				<h1> <a href="../index.php"><img src="../images/songea3.jpg" alt="">Intellegent Tourist Tour Guiding system </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class="active"><a href="../index.php">Home</a></li>
				<li class=""><a href="../index.php#about">About US</a></li>
				<li class=""><a href="../index.php#services">Services</a></li>
				<li class=""><a href="../attractions/attractions.php">Attractions</a></li>
				<li class=""><a href="../accommodation/accommodations.php?id=<?php $id = 0; echo $id;?>">Accommodation</a></li>
				<li class=""><a href="../index.php#subscribe">Contact us</a></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<div class="container-data" id="pro">
	<div class="col order-first">

		<p align="center">
			<i class="icon search"></i><input class="form-control" type="search" name="keyword" aria-label="Search" id="search1"><button class="btn btn-outline-success my-2 my-sm-0">search</button>
		</p>
		<table class="table" id="table">
  <thead>
    <tr>
      <th scope="col" width="300">Attraction Name</th>
       <th scope="col" width="300">Descriptions</th>
      <th scope="col" width="200">Weather Condition</th>
      <th scope="col" width="200">Transport</th>
      <th scope="col" width="200">Accommodation</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	$id= $_GET['id'];
  	$data = "SELECT DISTINCT * FROM attractions, accommodation where  attractions.location_id = accommodation.location_id AND attraction_id = '$id'";
  	$passdata = mysqli_query($connection,$data);
  	$array = mysqli_fetch_array($passdata);
  	?>
    <tr height="400">
      <td scope="row" width="300"><?php echo $array['attraction_name']?>
      	<br><img height="250" width="200" src="../images/<?php echo $fetch["photos"];
      ?>"  alt="..." >
      </td>
      <td width="300"><?php echo $array['full_description']?></td>
      <td width="200"><?php include"../weather/forecasting/weathernow.php"?></td>
      <td width="200"><a href="../transport/transport.php?id=<?php echo$array["location_id"] ?>"><button class="btn btn-info"> Check for Transport</button></a></td>
      <td width="200"><a href="../accommodation/accommodations.php?id=<?php echo$array["location_id"] ?>"><button class="btn btn-info"> Check for accommodation</button></a></td>
    </tr>
    </tr>
  </tbody>
</table>
</div>
</div>
</body>
</html>