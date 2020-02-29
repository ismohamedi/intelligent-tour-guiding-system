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
                     <h2 align="center" style="color:#15677A">Add new system Administrator</h2>                          
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
        <div class="form-group">
          <button class="btn btn-info" style="margin-left: 30%">ADD ADMINISTRATOR</button><br>
       <label>First Name</label>
       <input   type="text"  name="first_name"  class="form-control" required="" placeholder="First Name" />
      </div>
      <div class="form-group">
         <label>Surname</label>
        <input class="form-control" type="text" required="" name="surname"  placeholder="surname"> 
         </div>

        <div class="form-group">
        <label>Username</label>
        <input name="username" class="form-control" 
        placeholder="username"  required="" />
         </div>                                                                                  
            <div class="form-group">
           <label>Email</label>
            <input type="email" name="email" title="email" required="" class="form-control" placeholder="email">
      </div>
        <div class="form-group">
           <label>mobile phone</label>
            <input type="text" name="mobile" title="phone" required="" class="form-control" placeholder="eg: 25576XXXXXXX"  minlength="12" maxlength="12">
      </div>
          <div class="form-group">
           <label>Role</label>
            <select  name="role"  required="" class="form-control" ><option>Admin</option><option>Super Admin</option></select>
      </div>
       <div class="form-group">
         <label>password</label>
         <input type="password" name="password" class="form-control" maxlength="20" minlength="8" required=""  placeholder="Enter password" />
        </div>
        <div class="form-group">
         <label>Comfirm password</label>
         <input type="password" name="c_password" class="form-control"  required=""  placeholder="Re-enter password" />
        </div>
      <div class="form-group">
            <br>
            <button type="submit" class="btn btn-default" name="send" style="width: 35%; font-size: 16px;color:white;  background-color: #428bca; margin-left: 30%">Register</button>

      </div>
 </form>
<!-- Php code for insert data to user_account table of the database -->
<?php

if(isset($_POST['send'])){
$user = $_SESSION['uname'];
$sql        = "SELECT * from user_account where username='$user'";
$result      = mysqli_query($connection,$sql);
$data        = mysqli_fetch_array($result);
$role        = $data['role'];

if($role == "Super Admin"){

//////////////////////////////// TAKING VARIABLES FROM HTML FORM/////////////////////////////////////////////
$first_name  = mysqli_real_escape_string($connection,$_POST['first_name']);
$surname     = mysqli_real_escape_string($connection,$_POST['surname']);
$uname       = mysqli_real_escape_string($connection,$_POST['username']);
$email       = mysqli_real_escape_string($connection,$_POST['email']);
$password    = md5(mysqli_real_escape_string($connection,$_POST['password']));
$password2   = md5(mysqli_real_escape_string($connection,$_POST['c_password']));
$role1       = mysqli_real_escape_string($connection,$_POST['role']);
$phone       = mysqli_real_escape_string($connection,$_POST['mobile']);
if ($password == $password2) {

$insert = mysqli_query($connection,"INSERT INTO `user_account`(`first_name`, `last_name`, `email`, `username`, `role`, `password`) VALUES('$first_name','$surname','$email ','$uname','$role1','$password') ");

if($insert){

   // Authorisation details.
  $username = "gurlymasele08@gmail.com";
  $hash = "008451015e52b5780d8a9b5348861ebfbe853db5a694c07699ad928557b5c436";

  // Config variables. Consult http://api.txtlocal.com/docs for more info.
  $test = "0";

  // Data for text message. This is the text message data.
  $sender = "Ft6rYlJFVuw-KnseBdvW0vnnk0NpkblyzO4ildh82L";  // This is who the message appears to be from.
  $numbers = "$phone"; // A single number or a comma-seperated list of numbers
  $pass    = mysqli_real_escape_string($connection,$_POST['password']);
  // if($role1 = "Admin"){
  $message = 'hello  '.$first_name.' '.$surname .' You have been added to Tour Tz as ADMINISTRATOR your Username is:'.$uname.' and password is: '.$pass.' you can log in to the system through: http://tourtanzania.000webhostapp.com/login.php';
 // }
 // else{
 //  $message = "hello  ".$first_name." ".$surname ."  You have been added to Tour Tz as SUPER ADMINISTRATOR your Username is:".$uname." and password is: ".$pass." you can log in to the system through: http://tourtanzania.000webhostapp.com/login.php ";
 // }
  // 612 chars or less
  // A single number or a comma-seperated list of numbers
  $message = urlencode($message);
  $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
  $ch = curl_init('http://api.txtlocal.com/send/?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch); // This is the result from the API
  curl_close($ch);

if($result){
  echo'<script> alert("Thanks you have successfully add new Administrator named '.$first_name.' '.$surname.' to the system and credintials SMS sent to '.$phone.'")</script>';
}
}
else{
   echo'<script> alert("Sorry failed try again")</script>';
}
}
else{
  echo'<script> alert("sorry password did not match please enter it correctly")</script>';
}
}else{
 echo'<script> alert("sorry you are not super Admin you can`t Add another Administrator to the system so please Contact your super admin")</script>';
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
