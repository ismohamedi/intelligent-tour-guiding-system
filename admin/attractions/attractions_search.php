<?php
    ///////////////for displaying attraction details to admin ///////////////////////////
include '../../tourtzdb.php';
    $keyword = $_POST['keyword']; 

	 $search = mysqli_query($connection,"SELECT DISTINCT * FROM attractions, location where  attractions.location_id = location.location_id  AND CONCAT(attraction_category_name, attraction_name) LIKE '%$keyword%' ORDER BY attraction_name ASC ")  or die(mysqli_error());

    while($array = mysqli_fetch_array($search)){
    ?>
    <tr >
      <td scope="row" width="500"><?php echo'<h2 align="center"> '.$array['attraction_id'].'</h2>';?>
      </td>
      <td width="200" align="center"><?php echo $array['attraction_name']?></td>
      <td width="200" align="center"><?php echo $array['attraction_category_name']?></td>
      <td width="200" align="center"><?php echo $array['location_id']?></td>
      <td width="200" align="center"><?php echo $array['district']?></td>
       <td width="200" align="center"><?php echo $array['region']?></td>
    </tr>
    </tr>
    <?php } ?>