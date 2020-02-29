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
                     <h2 align="center" style="color:#15677A">Update Attractions</h2>   
                                             
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row" >
                
                <div class="col order-first">
                  <div class="form-inline pull-right" style="margin-bottom: 2%; margin-right: 2%">
      <input type="text" id="search" class="form-control" placeholder="Search here..."/>
    </div>
    <table class="table table-bordered">
  <thead class="alert-info">
    <tr>
      <th scope="col" width="300" ><h3 align="center">Attraction ID</h3></th>
       <th scope="col" width="300"><h3 align="center">attraction Name</h3></th>
      <th scope="col" width="200"><h3 align="center">attraction category</h3></th>
      <th scope="col" width="200"><h3 align="center">location ID</h3></th>
      <th scope="col" width="200"><h3 align="center">District</h3></th>
      <th scope="col" width="200"><h3 align="center">Region</h3></th>
       <th scope="col" width="200"><h3 align="center">Actions</h3></th>

    </tr>
  </thead>
  <tbody id="result"></tbody>
</table>
</div>
</div>
</div>      
</div>
</div>
</div>
    <!-- SCRIPTS -AT THE BOTTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
      <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/npm.js"></script>
</body>
</html>
