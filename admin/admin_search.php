<?php
    ///////////////for displaying attraction details to admin ///////////////////////////
include '../tourtzdb.php';

    $keyword = $_POST['keyword']; 

	 $search = mysqli_query($connection,"SELECT DISTINCT * FROM user_account where CONCAT(first_name,last_name,username,role) LIKE '%$keyword%'")  or die(mysqli_error());

    while($array = mysqli_fetch_array($search)){
    ?>
    <tr >
      <td width="200" align="center"><?php echo $array['first_name']?></td>
      <td width="200" align="center"><?php echo $array['last_name']?></td>
      <td width="200" align="center"><?php echo $array['username']?></td>
       <td width="200" align="center"><?php echo $array['role']?></td>
       <td width="200" align="center"><?php echo $array['email']?></td>
    </tr>
    </tr>
    <?php } ?>