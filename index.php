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
<title> Tour Guiding system</title>
<link rel="icon"  href="images/songea3.jpg">
<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="popup-video.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></script>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Intellegent tourist Guiding system,  Flat Web system, Android Compatible web system,Smartphone Compatible web system" />

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
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/font-awesome.min.css" rel="stylesheet">
 <!-- fontawesome css -->
	<!-- //css files -->

	<!-- google fonts -->
	<!-- <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet"> -->
	<!-- //google fonts -->

</head>
<body>

<!-- header -->
<header>

	<div class="top-head container">
		<div class="ml-auto text-right right-p">
		</div>
	</div>
	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex">
			<div id="logo" style="width: 100%; margin-left: -15%">
				<h1  > <a href="index.php"><img src="images/songea3.jpg" alt="">Intelligent Tour Guiding system</a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1" style="margin-right: -10%;width: 100%">
				<li class=""><a href="index.php">Home</a></li>
				<li class=""><a href="#about">About US</a></li>
				<li class=""><a href="#services">Services</a></li>
				<li class=""><a href="attractions/attractions.php">Attractions</a></li>
				<li class=""><a href="accommodation/accommodations.php?id=<?php $id=0; echo $id;?>">Accomodation</a></li>
				<li class=""><a href="#subscribe">Contact us</a></li>

				<!-- <li class=""><a href="login.php" style="color: green; font-weight: bold; background: white">Login</a></li>
				<li class=""><a href="logout.php" style="color: red;  background: white">Log out</a></li>
        <li class=""><a href="register.php">Sign Up</a></li>-->
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 banner-text-w3pvt">
					<!-- banner slider-->
					<div class="csslider infinity" id="slider1">
						<input type="radio" name="slides" checked="checked" id="slides_1" />
						<input type="radio" name="slides" id="slides_2" />
						<input type="radio" name="slides" id="slides_3" />
						<ul class="banner_slide_bg">
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4" id="introwords">Intelligent Tourist Guiding system.</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Travel with peace of Mind.</h4>
										<p class="w3ls_pvt-title my-3">This sytem is designed to enable Tourists within Tanzania to Search for Tourst Spots and enables you as a Tourist to know the rouete Distance and Total cost of Travel as well as weather condtion of the area you want to vist.</p>
										<a href="#about" class="btn btn-banner my-3">Read More</a>
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4" id="introwords">Transport assistance</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Have a joyful Tour</h4>
										<p class="w3ls_pvt-title my-3">The system provide you a possible kind of Transports such as airplanes and buses with its specific cost also the full schedule of particular Transport.</p>
										<a href="#about" class="btn btn-banner my-3">Read More</a>
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4" id="introwords">Get best accomodation.</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Enjoy your Tour by Getting best beding places</h4>
										<p class="w3ls_pvt-title my-3"> The system suggests best hotels in the particular Sport including Tourist camps with good and affordable prices.</p>
										<a href="#about" class="btn btn-banner my-3">Read More</a>
									</div>
								</div>
							</li>
						</ul>
						<div class="navigation">
							<div>
								<label for="slides_1"></label>
								<label for="slides_2"></label>
								<label for="slides_3"></label>
							</div>
						</div>
					</div>
					<!-- //banner slider-->
				</div>

				<div class="col-lg-5 col-md-8 px-lg-3 px-0" id="video" style="background: transparent;">
					<div class="banner-form-w3 ml-lg-5" >
						<div class="padding">
							<!-- banner slide photos and video -->

<div id="light" class="rights">
  <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
  <video id="VisaChipCardVideo" controls>
      <source src="videos/Pride of LIONS crossing the road - Mikumi National Park, Tanzania.mp4" type="video/mp4" style="padding: 0,0">
      <!--Browser does not support <video> tag -->
    </video>
</div>

<div id="fade" onClick="lightbox_close();"></div>



<script type="text/javascript">
	window.document.onkeydown = function(e) {
  if (!e) {
    e = event;
  }
  if (e.keyCode == 27) {
    lightbox_close();
  }
}

function lightbox_open() {
  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
  window.scrollTo(0, 0);
  document.getElementById('light').style.display = 'block';
  document.getElementById('fade').style.display = 'block';
  lightBoxVideo.play();
}

function lightbox_close() {
  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
  document.getElementById('light').style.display = 'none';
  document.getElementById('fade').style.display = 'none';
  lightBoxVideo.pause();
}


</script>



   <div class="w3-content w3-section" style="max-width:100%; width: 600px" style="background: transparent;">
  <a href="#" onclick="lightbox_open();">
  	       <strong style="margin-left: 16%;color: white">Click here to Watch a video</strong>

  <img class="mySlides w3-animate-top" src="images/bagamoyo_ruins.jpg">
  <img class="mySlides w3-animate-bottom" src="images/OLDOINYO-LENGAI.jpg">
  <img class="mySlides w3-animate-top" src="images/klipspringer-antelope-jozani-chwaka-bay-tanzania-africa.jpg" >
  <img class="mySlides w3-animate-bottom" src="images/505ps-Copy-815x459.jpg">
  <img class="mySlides w3-animate-bottom" src="images/Amboni.jpg">
  <img class="mySlides w3-animate-bottom" src="images/tanzania-mount-kilimanjaro.jpg">
  <img class="mySlides w3-animate-bottom" src="images/tanzania-zanzibar-stone-town.jpg">
  <img class="mySlides w3-animate-bottom" src="images/tanzania-mount-kilimanjaro.jpg">

  </a>
</div>

</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 2500);
}
</script>



							<!--banner photos -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- what we Serve -->
<section class="banner-bottom py-5" id="about">
	<div class="container py-lg-5">
		<h2 class="heading mb-sm-5 mb-4" align="center" id="travel">Travel with us for safety and saving Cost</h2>
		<div class="row bottom-grids">
			<div class="col-md-3 col-sm-6">
				<div class="three-grids-w3pvt-1 d-flex text-right">
					<div class="text-effect-wthree midd-text-w3ls p-3 w-100">
						<h5 class="text-capitalize text-bl font-weight-bold"><a href="attractions/attractions.php"> Tourist Attractions</a></h5>
						<p>Tourism in Tanzania</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 mt-sm-0 mt-4">
				<div class="three-grids-w3pvt-2 d-flex text-right">
					<div class="text-effect-wthree midd-text-w3ls p-3 w-100">
						<h5 class="text-capitalize text-bl font-weight-bold"><a href="attractions/attractions.php"> Trasport </a></h5>
						<p>Trasportation services</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 mt-md-0 mt-4">
				<div class="three-grids-w3pvt-3 d-flex text-right">
					<div class="text-effect-wthree midd-text-w3ls p-3 w-100">
						<h5 class="text-capitalize text-bl font-weight-bold"><a href="accommodation/accommodations.php?id=<?php $id=0; echo$id; ?>"> Accommodation</a></h5>
						<p>accommodation places</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 mt-md-0 mt-4">
				<div class="three-grids-w3pvt-4 d-flex text-right">
					<div class="text-effect-wthree midd-text-w3ls p-3 w-100">
						<h5 class="text-capitalize text-bl font-weight-bold"><a href="attractions/attractions.php"> Weather Condition </a></h5>
						<p>weather condition of an area</p>
					</div>
				</div>
			</div>
			<!-- <div class="col-lg-5">
				<p class="mt-4">This system created so as to enables you as Tourist from out side Tanzania as well as from within the Country to get best tour trips with assistance from this system especially on Transport, weather condition and accommodation facilities throughout the country as well other services like supermarkets hospitals and other social servises<i> For more infor about a partcular service click on the links above</i> .</p>
			</div>

			<div class="col-lg-5">
				<p class="mt-4"> The system also intend to reduce the Transport cost and time of serching and finding the way of reaching in a particular spots at a particular intended time because the system will help you to give the prediction of the weather condtion of the particular area and which wearing is sweetable for that area on that day. </p>
			</div> -->
		</div>
	</div>
</section>
<!-- //what we Serve -->

<!-- services -->
<section class="services py-5" id="services">
	<div class="container">
		<h3 class="heading mb-5" align="center">Services System Provides</h3>
		<div class="row ml-sm-5">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-text">
							<h4>Attractions Location</h4>
							<p>The system prive the means of getting particular location of the Tourist spots also calculating its distance from the current location of the one who search for, also suggesting how to reach there. </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
						</div>
						<div class="our-services-text">
							<h4>Transport Assistance</h4>
							<p>The system provide assistance on transport either public or prive from one point to another also locates where to get Tour cars</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
						</div>
						<div class="our-services-text">
							<h4>Accommodation Assistance</h4>
							<p>The system shows the available hotels around the area you choose to vist with its particular price and the services they offer to their customers</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
						</div>
						<div class="our-services-text">
							<h4>Advice about weather</h4>
							<p>After choosing a particular place you want to vist the system provide a weather condition of the perticular area and advising about which wearings are sweetable at that place and sometimes if weather is too bad the system will advice you to reject the Tour for such day</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
						</div>
						<div class="our-services-text">
							<h4>Distance and How to reach</h4>
							<p>The system proved the distance of the particular area from your existing position and suggesting how to reach there by suggesting the kinds of transport to use and where to get those Transport.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
						</div>
						<div class="our-services-text">
							<h4>Social Services</h4>
							<p>The system locate social serices areas such as hospitals, supermarkes and other areas where  a you as a Tourist you can Get a best social services as you need.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

</section>
<!-- //services -->

<!-- user views -->
<section class="testimonials" id="testi">
	<div class="layer py-lg-5">
		<div class="container py-5">
			<h3 class="heading mb-5" align="center">What Users Say About The system</h3>
			<div class="text-center">
				<div class="row">
					<div class="col-md-6">
						<div class="testi-info-text">
							<h4>Best System i have ever seen</h4>
							<p>
								<span class="fa fa-quote-left"></span> I have got best assistance which makes me reach where i wanted at specific time and minimum cost more over I enjoyed my tour with maximum assistance from this system thanks alot Creators of this system .
								<span class="fa ml-2 fa-quote-right"></span>
							</p>
						</div>
						<div class="testi-pos">
							<img src="images/ts1.jpg" alt="" class="img-fluid rounded-circle mb-3" />
							<h4> John Elisa </h4>
						</div>
					</div>
					<div class="col-md-6 mt-md-0 mt-5">
						<div class="testi-info-text">
							<h4>System saved me intems of cost </h4>
							<p>
								<span class="fa fa-quote-left"></span> A year ago I losted alot of money in transport essues because there was no one to direct me at the particular areas I wanted also where to get a  specific Transport for reach where I wanted but this year become essier throuth this system thanks alot CodeTechDevelopers.
								<span class="fa ml-2 fa-quote-right"></span>
							</p>
						</div>
						<div class="testi-pos">
							<img src="images/ts2.jpg" alt="" class="img-fluid rounded-circle mb-3" />
							<h4>Watson Mary</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //users views -->

<!-- Team  -->
<!-- <section class="team pt-5" id="team">
	<div class="layer">
    <div class="container py-lg-5">
		<h3 class="heading mb-sm-5 mb-4" align="center">Our Team</h3>
        <div class="row">
			<div class="team-grid col-md-3 col-sm-6 mb-5">
				<img src="images/ismailiphoto.jpg" class="" alt="photo" />
				<div class="team-info text-center">
					<h3 class="e">Ismaili Mohamedi</h3>
					<span class="" style="color: black;background: white; font-weight: bolder;">Software Developer and CEO of CodeTechDevelopers</span>
				</div>
			</div>
			<div class="team-grid col-md-3 col-sm-6 mb-5">
				<img src="images/ismailiphoto.jpg" class="" alt="photo" />
				<div class="team-info text-center">
					<h3 class="">Alphone Arnold</h3>
					<span class="" style="color: black;background: white">Software Developer</span>
				</div>
			</div>
			<div class="team-grid col-md-3 col-sm-6 mb-5">
				<img src="images/ismailiphoto.jpg" class="" alt="photo" />
				<div class="team-info text-center">
					<h3 class="">Yusuph Kaondo</h3>
					<span class="" style="color: black;background: white">Programmer and Designer</span>
				</div>
			</div>

        </div>
    </div>
    </div>
</section> -->
<!-- //Team -->

<!-- subscribe -->
<section class="subscribe" id="subscribe">
</section>
<!-- //subscribe -->

<!-- footer -->
<footer>
	<div class="footer-layer py-sm-5 pt-5 pb-3">
		<div class="container py-md-3">
			<div class="footer-grid_section text-center">
				<div class="footer-title mb-3">
					<a href="#"><img src="images/songea3.jpg" alt=""> Intelligent Tourist Tour Guiding system</a>
				</div>
				<div class="footer-text">
					<p>We are happy to see you enjoying your tour by getting huge and best assistance from us. your happiness is our happiness too follow us on the following social medias bellow.</p><br>
          <p> For and problem ecountered during uses of the system or for any suggestion please contact us by <a href="mailTo:codetechdevelopers1@gmail.com">codetechdevelopers@gmail.com</a>  or through our mobile number
          
          <a href="callTo:+255763080423">+255763080423</a> 
          </p>
				</div>
				<!-- for social medias -->
				<!-- <ul class="social_section_1info">
					<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
					<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
				</ul> -->
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- copyright -->
<section class="copyright">
	<div class="container py-4">
		<div class="row bottom">
			<ul class="col-lg-6 links p-0">
				<li><a href="#about" class="">About Us</a></li>
				<li><a href="#services" class="">Services </a></li>
				<li><a href="#team" class="">our team </a></li>
				<li><a href="#testi" class="">users views </a></li>
				<li><a href="login.php" class="">Admin</a></li>
			</ul>


			<!-- <div class="col-lg-6 copy-right p-0">
				<p class="">© 2019 Tourtz. All rights reserved | Design by
					<a href="#"> CodeTechDevelopers</a>
				</p>
			</div> -->


		</div>
	</div>
</section>
<!-- //copyright -->

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top">
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

</body>
</html>
