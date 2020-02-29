<?php
session_start();
?>
<?php
include"../../tourtzdb.php";
if (!$_SESSION['uname']) {
 echo'<script>
window.location.assign("../../login.php");
</script>';
}
?>

<!DOCTYPE html>
<html >
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Intelligent Tour Guiding system</title>
      <link rel="icon"  href="../../images/songea3.jpg">
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper" style="background: #15677A; z-index:1000;" >
        <?php include 'leftbar.php';?>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="overflow: scroll;" >
            <div id="page-inner" style="overflow: scroll;margin-top: 4%;">
                <div class="row" style="overflow: scroll;">
                    <div class="col-md-12">
                     <h2 align="center" style="color:#15677A">Add Location</h2>   
                                             
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row" >
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
        <div class="panel-body">
        <div class="row">
    <div class="col-md-6" style="margin-left: 30%">

      <form role="form" method="post" enctype="multipart/form-data">      
   <div class="form-group email">
    <button class="btn btn-info" style="margin-left: 30%">Enter Location Details</button><br>
    <label class="control-label" >District</label>
      <input type="text" name="district" class="form-control"  required="">
     </div>
    <div class="form-group mobile">
     <label class="control-label"  >Region</label>
     <input type="text" name="region"   class="form-control" required="" placeholder="Enter Region">
     </div>
     <div class="form-group mobile">
     <label class="control-label"  >Location Description</label>
     <input type="text" name="location_description"   class="form-control"  placeholder="Enter location Description">
     </div>
    

    <div class="form-group gender">
    <label class="control-label" >weather Id</label>
    <input type="text" name="weather_id" class="form-control" required="">
      
     </div>

   <button type="submit" class="btn btn-default" name="submit" style="width: 35%; font-size: 16px;color:white;  background-color: #428bca; margin-left: 30%">Submit</button> </form>
 

        <!-- PHP CODE FOR ENTERING ACCOMODATION DETAILS TO THE DATABASE -->

   <?php
if(isset($_POST['submit'])){
  $region = $_POST['region'];
  $ditrict = $_POST['district'];
  $weather_id = $_POST['weather_id'];
  $location_description = $_POST['location_description'];
  
  
// //////for checking location id if exist in the database////////


  $insertdata = "INSERT INTO `location`(`district`, `region`, `weather_id`, `location_description`) VALUES ('$ditrict','$region','$weather_id','$location_description')";

  $send = mysqli_query($connection, $insertdata);
  if($send){
    echo'<script> alert("Thanks you have successfully add New location to the location Database")</script>';
  }
  else{
     echo'<script> alert("Sorry data not sent please try again with entering correct deatails of specific Location")</script>';
  }
  }
 ?>  
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
    
   
</body>
</html>
