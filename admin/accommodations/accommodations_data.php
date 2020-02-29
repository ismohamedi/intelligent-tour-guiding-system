 <?php
    ///////////////for displaying attraction details to admin ///////////////////////////
include '../../tourtzdb.php';
    $data = "SELECT DISTINCT * FROM accommodation, location where  location.location_id = accommodation.location_id";
    $passdata = mysqli_query($connection,$data);
    while($array = mysqli_fetch_array($passdata)){
    ?>
    <tr >
      <td scope="row" width="500"><?php echo'<h2 align="center"> '.$array['hotel_id'].'</h2>';?>
      </td>
      <td width="200" align="center"><?php echo $array['hotel_name']?></td>
      <td width="200" align="center"><?php echo $array['accommodation_category']?></td>
      <td width="200" align="center"><?php echo $array['location_id']?></td>
      <td width="200" align="center"><?php echo $array['district']?></td>
       <td width="200" align="center"><?php echo $array['region']?></td>
      <td width="200" style="display: inline-block;" align="center"><button class="btn btn-danger">Delete</button> <button class="btn btn-success">Edit</button></td>
       

    </tr>
    </tr>
    <?}?>