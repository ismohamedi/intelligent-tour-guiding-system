	<?php
	include '../tourtzdb.php';
	

		/////////////// for displaying codattractione according to the search from the search box///////////////////

	 $keyword = $_POST['keyword'];
	 $search = mysqli_query($connection,"SELECT DISTINCT * FROM attractions, location where  attractions.location_id = location.location_id  AND CONCAT(attraction_category_name, attraction_name, full_description) LIKE '%$keyword%' ORDER BY attraction_name ASC ")  or die(mysqli_error());
	while($fetch = mysqli_fetch_array($search)){

		///////////////////////while loop for displaying selected data////////////////////////////////

?>
<tr>
	<td> <p class="layer2"> 
		<div id="card" class="card mb-6" style="max-width: 100%;">
  <div class="row no-gutters" id="cardrow">
    <div class="col-md-12" style="margin-top: 3px;">
    	 <h5 class="card-title" style="color: white;" align="center"><a href="attraction.php?id=<?php echo$fetch["attraction_id"] ?>"><button class="btn btn-info"><?php echo $fetch['attraction_name']?></button></a></h5>
      <img src="../images/<?php echo $fetch["photos"];
      ?>" class="card-img" alt="..." height="300" width="500">
    </div>
<div class="col-md-12">
      <div class="card-body">
        <p class="layer2">
<a href="attraction.php?id=<?php echo$fetch["attraction_id"] ?>" style="background: white"><?php echo $fetch['attraction_name']?></a>
	<?php echo $fetch['full_description']?><br>
	<a href="attraction.php?id=<?php echo$fetch["attraction_id"] ?>"><button id="more" class="btn btn-info"> check more</button></a>
	</p></td>
</tr><br>
</p>
     </div>
     </div>
    </div>
</div>
<?php
}
?>