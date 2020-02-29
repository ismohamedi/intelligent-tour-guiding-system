<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body onload="remove()">
<?php 
session_start();
include"../../tourtzdb.php";
  $attraction_id = $_GET['id'];
  $_SESSION['location_id'] = $attraction_id;

if($attraction_id){

  // ///////////PHP CODE FOR TAKING ATTRACTION NAME FROM ATTRACTIOS TABLE/////////////////
        $select = mysqli_query($connection,"SELECT * FROM attractions WHERE attraction_id = '$attraction_id'");
        $attraction = mysqli_fetch_array($select);
        $attraction_name = $attraction['attraction_name'];
        $_SESSION['attraction_name'] = $attraction_name;

}
 // ////////////////THE END OF SELECTION CODE/////////////////////////////////////
?>
    <script>
      function remove(){
      var change = confirm('Do you want to remove '.$attraction_name.' From attractions database?');
      if(change){
        window.location.assign("delete_attraction.php");
      } else{
        alert('Okay thanks');
        window.location.assign("update_attraction.php");
      }
      }
      </script>
    </body>
</body>
</html>
