<!--
author: CodeTechDevelopers
author URL: http://codetechdevelopers.com
-->
<?php
session_start();
include 'tourtzdb.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Intellegent tourist Guiding system</title>
<link rel="icon"  href="sondea3.jpg">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/search.css" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
	<header>
	<div class="top-head container">
		<div class="ml-auto text-right right-p">
		</div>
	</div>
	<div class="container" style="margin-left: 20px; width: 100%">
		<!-- nav -->
		<nav class="py-3 d-lg-flex" style="margin-left: 0px; margin-right: 0px">
			<div id="logo" style="margin-left: 5px; width: 100%">
				<h1> <a href="../index.php"><img src="images/songea3.jpg" alt="">Intellegent Tourist Tour Guiding system -TourTz </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class="active"><a href="#">Home</a></li>
				<li class=""><a href="../index.php?#about">About US</a></li>
				<li class=""><a href="../transport/transport.php">Weather</a></li>
				<li class=""><a href="search_spot.php">Spots</a></li>
				<li class=""><a href="../accommodation/accommodations.php">Accomodation</a></li>
				<li class=""><a href="#subscribe">Contact us</a></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>