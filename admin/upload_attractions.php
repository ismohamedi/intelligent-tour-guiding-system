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
<html >
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Intelligent Tour Guiding system</title>
      <link rel="icon"  href="../images/songea3.jpg">
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
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
                     <h2 align="center" style="color:#15677A">Add Attractions and accommodation</h2>   
                                             
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
        <div class="col-md-6">
                                  
        <form role="form" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <button class="btn btn-info" style="margin-left: 30%">Enter Attraction Details</button><br>
       <label>Attraction Name</label>
       <input   type="text"  name="attraction_name"  class="form-control" required="" />
      </div>
      <div class="form-group">
         <label>Attraction Category</label>
        <select class="form-control"  required="" name="attraction_category_name" > <option>select category</option>
         <!--  php code for selecting attraction category names from databsae -->
          <?php 
          $select = "SELECT DISTINCT attraction_category_name FROM attractions";
          $pass =mysqli_query($connection,$select);
          while ( $data = mysqli_fetch_array($pass)) {
            echo'<option> '.$data['attraction_category_name'].'</option>';

          }
          ?>

        </select> 
         </div>

        <div class="form-group">
        <label>full_description</label>
        <textarea name="full_description" class="form-control" 
        placeholder="Attraction descriptions"  required="" ></textarea>
         </div>

          <div class="form-group">
                                          
         </div>
        
                                                                                                     
            <div class="form-group">
           <label>location ID</label>
            <input type="number" name="location_id" title="location id" required="" class="form-control">
      </div>
       <div class="form-group">
         <label>select image</label>
         <input type="file" name="photo" class="form-control" accept='image/*' required=""/>
        </div>
      <div class="form-group">
            <br>
            <button type="submit" class="btn btn-default" name="send" style="width: 35%; font-size: 16px;color:white;  background-color: #428bca; margin-left: 30%">Submit</button>

      </div>
 </form>
<!-- Php code for sending attractions details to the database -->
<?php
if(isset($_POST['send'])){
  $attraction_name = $_POST['attraction_name'];
  $attraction_category_name = $_POST['attraction_category_name'];
  $full_description = $_POST['full_description'];
  $location_id = $_POST['location_id'];
  
// //////for checking location id if exist in the database////////

  $check_location_id = mysqli_query($connection,"SELECT location_id FROM location where location_id = '$location_id'");
  if(mysqli_num_rows($check_location_id) == FALSE){
  echo'<script> alert("Sorry there is not attractions location with that ID please check it first or Add to the system")</script>';
  } else if($attraction_category_name == "select category"){
    echo'<script> alert("Please select specific attraction category")</script>';
  }
  else{


    //////// start   code for uploading photo /////
  $name = $_FILES["photo"]["name"];
  $tmp_name = $_FILES["photo"]["tmp_name"];
  $path = '../images/';
move_uploaded_file($tmp_name, $path.$name);
//////////// end  code for uploading photo//////////

  $insertdata = "INSERT INTO `attractions`(`attraction_name`, `attraction_category_name`, `full_description`, `photos`, `location_id`) VALUES('$attraction_name','$attraction_category_name','$full_description','$name','$location_id')";

  $send = mysqli_query($connection, $insertdata);
  if($send){
    echo'<script> alert("Thanks you have successfully add '.$attraction_name.' to the attractions Database")</script>';
  }
  else{
     echo'<script> alert("Sorry data not sent please try again with entering correct deatails of specific Attraction")</script>';
  }
  }
}
 ?>

    </div>
    <div class="col-md-6">

      <form role="form" method="post" enctype="multipart/form-data">      
   <div class="form-group email">
    <button class="btn btn-info" style="margin-left: 30%">Enter Accommodation Details</button><br>
    <label class="control-label" >Accomodation Name</label>
      <input type="text" name="accommodation" class="form-control"  required="">
     </div>
    <div class="form-group mobile">
     <label class="control-label"  >Descriptions</label>
     <textarea  name="descriptions" class="form-control" required="" placeholder="Enter full descriptions of the hotel/lodge/camp"></textarea>
     </div>
     <div class="form-group  age">
     <label class="control-label" >Accommodation Category</label>
    <select name="accommodation_category" class="form-control"><option>Select category</option><option>hotel</option><option>Lodge</option><option>Tent-camp</option> </select>
                                        </div>

    <div class="form-group gender">
    <label class="control-label" >location</label>
    <input type="text" name="location_id" class="form-control" required="">
      
     </div>
       <div class="form-group">
    <label>Select Image</label>
    <input type="file" name="photo" class="form-control" accept='image/*' required=""/>
                                        </div>

   <button type="submit" class="btn btn-default" name="submit" style="width: 35%; font-size: 16px;color:white;  background-color: #428bca; margin-left: 30%">Submit</button> </form>
 

        <!-- PHP CODE FOR ENTERING ACCOMODATION DETAILS TO THE DATABASE -->

   <?php
if(isset($_POST['submit'])){
  $accommodation_name = $_POST['accommodation'];
  $accommodation_category = $_POST['accommodation_category'];
  $description = $_POST['descriptions'];
  $location_id = $_POST['location_id'];
  
// //////for checking location id if exist in the database////////

  $check_location_id = mysqli_query($connection,"SELECT location_id FROM location where location_id = '$location_id'");
  if(mysqli_num_rows($check_location_id) == FALSE){
  echo'<script> alert("Sorry there is not attractions location with that ID please check it first or Add to the system")</script>';
  } else if($accommodation_category == "select category"){
    echo'<script> alert("Please select specific attraction category")</script>';
  }
  else{


    //////// start   code for uploading photo /////
  $name = $_FILES["photo"]["name"];
  $tmp_name = $_FILES["photo"]["tmp_name"];
  $path = '../images/';
move_uploaded_file($tmp_name, $path.$name);
//////////// end  code for uploading photo//////////

  $insertdata = "INSERT INTO `accommodation`( `hotel_name`, `descriptions`, `accommodation_category`, `location_id`, `photo`) VALUES('$accommodation_name','$description','$accommodation_category','$location_id','$name')";

  $send = mysqli_query($connection, $insertdata);
  if($send){
    echo'<script> alert("Thanks you have successfully add '.$accommodation_name.' to the accommodation Database")</script>';
  }
  else{
     echo'<script> alert("Sorry data not sent please try again with entering correct deatails of specific Attraction")</script>';
  }
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
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
