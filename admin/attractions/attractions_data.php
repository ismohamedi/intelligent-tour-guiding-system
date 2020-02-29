<?php
    ///////////////for displaying attraction details to admin ///////////////////////////
include '../../tourtzdb.php';

    $data = "SELECT DISTINCT * FROM attractions, location where  location.location_id = attractions.location_id";
    
    $passdata = mysqli_query($connection,$data);
    while($array = mysqli_fetch_array($passdata)){
    ?>
    <tr >
      <td scope="row" width="500"><?php echo'<h2 align="center"> '.$array['attraction_id'].'</h2>';?>
      </td>
      <td width="200" align="center"><?php echo $array['attraction_name']?></td>
      <td width="200" align="center"><?php echo $array['attraction_category_name']?></td>
      <td width="200" align="center"><?php echo $array['location_id']?></td>
      <td width="200" align="center"><?php echo $array['district']?></td>
       <td width="200" align="center"><?php echo $array['region']?></td>
       <td width="200" style="display: inline-block;" align="center"><a href="delete_attraction.php?id=<?php echo$array["attraction_id"];?>"><button class="btn btn-danger">Delete</button></a><a href="update_attraction.php?id=<?php echo$array["attraction_id"];?>"> <button class="btn btn-success">Edit</button></a></td>
    </tr>
    </tr>
    <script>
      function remove(){
      var change = confirm("Do you want to remove $attraction_name From attractions database?");
      if(change){
        window.location.assign("delete_attraction.php");
      } else{
        alert('Okay thanks');
        window.location.assign("update_attractions.php");
      }
      }
      </script>
    <?}?>