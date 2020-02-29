<?php
session_start();
?>
<?php
include"../tourtzdb.php";
if (!$_SESSION['uname']) {
  echo'<script>
window.location.assign("../login.php");
</script>';
}
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Intelligent Tour guiing system</title>
    <link rel="icon"  href="../images/songea3.jpg">
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="shortcut icon"  href="MICROFINANCE.png">
</head>
<body>

    <div id="wrapper" style="background:#15677A">
        <?php include 'leftbar.php';?>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner" style="margin-top: 5%">
                <div class="row">
                    <div class="col-md-12">
                     <h2 align="center" style="color: #15677A">Welcome to the panel</h2>   
                    </div>
                </div>              
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box" style="text-align: center;">
               <a href="table.php" style="text-decoration:none;">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-table"></i>
                </span>

                <div class="text-box" >
                  <a href="attractions/attractions.php" style="text-decoration: none">
                 
                    <p class="main-text">
<!--  php code for counting number of officer registered -->
<!--  php code for counting number of officer registered  end here--> 
</p>
                    <p class="text-muted">Attractions </p>
                    </a>
                </div>
                </a>
             </div>
             </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box" style="text-align: center;">
                   <a href="customers.php" style="text-decoration:none;">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-table"></i>
                </span>
                <div class="text-box" >
                  <a href="accommodations/accommodations.php" style="text-decoration: none">
                    <p class="main-text">
<!--  php code for counting number of officer registered -->
<!--  php code for counting number of officer registered  end here--> 

 </p>
                    <p class="text-muted" >Accommodations</p>
                    </a>
                </div>
              </a>
             </div>
             </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box" style="text-align: center;">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <div class="text-box" ><a href="updateprofile.php" style="text-decoration: none">
                    <p class="main-text"></p>
                    <p class="text-muted">Update profile</p>
                    </a>
                </div>
             </div>
             </div>
             <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box" style="text-align: center;">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-home"></i>
                </span>
                <div class="text-box" ><a href="home.php" style="text-decoration: none">
                    <p class="main-text"></p>
                    <p class="text-muted">User Home</p>
                    </a>
                </div>
             </div>
             </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box"style="text-align: left;">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <div class="text-box" >
                  <a href="addadmin.php" style="text-decoration: none">
                    <p class="main-text"> </p>
                    <p class="text-muted">Add Admin</p>
                    </a>
                </div>
             </div>
             </div>

              <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box"style="text-align: left;">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <div class="text-box" >
                  <a href="location/add_location.php" style="text-decoration: none">
                    <p class="main-text"> </p>
                    <p class="text-muted">Add Location</p>
                    </a>
                </div>
             </div>
             </div>



               <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box"style="text-align: left;">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-table"></i>
                </span>
                <div class="text-box" >
                  <a href="location/view_location.php" style="text-decoration: none">
                    <p class="main-text"> </p>
                    <p class="text-muted">View Locations</p>
                    </a>
                </div>
             </div>
             </div>
              <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box"style="text-align: left;">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-table"></i>
                </span>
                <div class="text-box" >
                  <a href="view_admins.php" style="text-decoration: none">
                    <p class="main-text"> </p>
                    <p class="text-muted">View Administators</p>
                    </a>
                </div>
             </div>
             </div>


            </div>
                 <!-- /. ROW  -->
                <div class="row"> 
                             
                </div>
           </div>
                 <!-- /. ROW  -->

             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
