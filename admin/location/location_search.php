<?php
    ///////////////for displaying attraction details to admin ///////////////////////////
include '../../tourtzdb.php';

    $keyword = $_POST['keyword']; 

	 $search = mysqli_query($connection,"SELECT DISTINCT * FROM location where CONCAT(location_id,district,region) LIKE '%$keyword%'")  or die(mysqli_error());

    while($array = mysqli_fetch_array($search)){
    ?>
    <tr >
      <td width="200" align="center"><?php echo $array['location_id']?></td>
      <td width="200" align="center"><?php echo $array['district']?></td>
      <td width="200" align="center"><?php echo $array['region']?></td>
       <td width="200" align="center"><?php echo $array['weather_id']?></td>
    </tr>
    </tr>
    <?php } ?>