<?php
    ///////////////for displaying attraction details to admin ///////////////////////////
include '../tourtzdb.php';

    $data = "SELECT DISTINCT * FROM  user_account";
    $passdata = mysqli_query($connection,$data);
    while($array = mysqli_fetch_array($passdata)){
    ?>
    <tr >
      <td width="200" align="center"><?php echo $array['first_name']?></td>
      <td width="200" align="center"><?php echo $array['last_name']?></td>
      <td width="200" align="center"><?php echo $array['username']?></td>
       <td width="200" align="center"><?php echo $array['role']?></td>
       <td width="200" align="center"><?php echo $array['email']?></td>
    </tr>
    </tr>
    <?}?>