<?php
session_start();
include"../../tourtzdb.php";
if (!$_SESSION['uname']) {
 echo'<script>
window.location.assign("../../login.php");
</script>';
}
$attraction_id   = $_SESSION['location_id'];
$attraction_name = $_SESSION['attraction_name'];

///////////////// PHP CODE FOR REMOVING ATTRACTION FROM ATTRACTIONS DATABASE//////////////////

        $delete = mysqli_query($connection,"DELETE FROM location WHERE location_id = '$attraction_id'");

 ////////////////////////// THE END OF THE CODE///////////////////////////////////

        if($delete){
        

///////////////// JS code FOR DISPLAYING MESSAGE AND RETURNING TO update_attractions.php/////////////////////
echo'<script>
         alert("Thanks You have successfully Remove '.$attraction_name.' from attractions database ");
         window.location.assign("update_attractions.php"); </script>';

      } else{
   echo'
   <script>
     	alert("sorry process failed try agin");
     	window.location.assign("update_attractions.php"); </script>';
     }

?>