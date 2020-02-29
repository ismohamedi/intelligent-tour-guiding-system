<?php
    ///////////////for displaying attraction details to admin ///////////////////////////
include '../../tourtzdb.php';

    $data = "SELECT DISTINCT * FROM  location";
    $passdata = mysqli_query($connection,$data);
    while($array = mysqli_fetch_array($passdata)){
    ?>
    <tr >
      <td width="200" align="center"><?php echo $array['location_id']?></td>
      <td width="200" align="center"><?php echo $array['district']?></td>
      <td width="200" align="center"><?php echo $array['region']?></td>
       <td width="200" align="center"><?php echo $array['weather_id']?></td>
    </tr>
    </tr>
    <?}?>