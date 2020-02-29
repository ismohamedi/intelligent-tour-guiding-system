
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
    <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="../css/attraction.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
	<header>
	<div class="top-head container">
		<div class="ml-auto text-right right-p">
		</div>
	</div>
	<div class="container" >
		<!-- nav -->
		<nav class="py-3 d-lg-flex" style="margin-left: 0px; margin-right: 0px">
			<div id="logo">
				<h1> <a href="../index.php"><img src="../images/songea3.jpg" alt="">Tour Guiding system</a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class="active"><a href="../index.php">Home</a></li>
				<li class=""><a href="../index.php?#about">About US</a></li>
				<li class=""><a href="../index.php?#services">services</a></li>
				<li class=""><a href="attractions.php">Attractions</a></li>
				<li class=""><a href="../accommodation/accommodations.php">Accomodation</a></li>
				<li class=""><a href="../index.php?#subscribe">Contact us</a></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<div class="container-data" id="pro">
	<div class="col order-first">
		<table class="table" id="table" border="2" height="500">
  <thead>
    <tr>
      <th scope="col" width="300" ><h3 align="center">Attraction Name</h3></th>
       <th scope="col" width="300"><h3 align="center">Descriptions</h3></th>
      <th scope="col" width="200"><h3 align="center">Weather Condition</h3></th>
      <th scope="col" width="200"><h3 align="center">Transport</h3></th>
      <th scope="col" width="200"><h3 align="center">Accommodation</h3></th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	///////////////for displaying attraction details and weather conditions///////////////////////////
  	$id= $_GET['id'];
  	$data = "SELECT DISTINCT attraction_name,full_description,photos,attractions.location_id FROM attractions where  attraction_id = '$id'";
  	$passdata = mysqli_query($connection,$data);
  	$array = mysqli_fetch_array($passdata);
  	?>
    <tr height="400" style="background: rgba(0, 0, 0, 0.4);color:white; ">
      <td scope="row" width="500"><?php echo'<h2 align="center"> '.$array['attraction_name'].'</h2>';?>
      	<br><img src="../images/<?php echo $array["photos"];
      ?>" alt="..." height="300" width="500">
      </td>
      <td width="400"><?php echo $array['full_description']?></td>
      <td width="300" style="color:white;"><?php include"../weather/forecasting/weathernow.php"?></td>
      <td width="200"><a href="../transport/transport.php?id=<?php echo$array["location_id"] ?>"><button class="btn btn-info"> Check for Transport🚁 🚎</button></a></td>
      <td width="200"><a href="../accommodation/accommodations.php?id=<?php echo$array["location_id"] ?>"><button class="btn btn-info"> Check for accommodation🏡 </button></a></td>
    </tr>
    </tr>
  </tbody>
</table>
</div>
</div>
</body>
</html>