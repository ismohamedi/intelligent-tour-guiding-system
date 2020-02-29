<?php
include '../tourtzdb.php';

if (isset($_POST['search'])) {
	$search = mysqli_real_escape_string($connection, $_POST['searchdata']);

	$searchquery = "SELECT * FROM attraction WHERE attraction_name LIKE '%$search%' OR features_found LIKE '%$search%' OR attraction_type LIKE '%$search%'";
	$passquery = mysqli_query($connection,$searchquery);
	while($result = mysqli_fetch_array($passquery)){
		echo '
		<tr>
		<td> '.$result['attraction_name'].'</td>
		<td> '.$result['attraction_type'].'</td>
		<td> '.$result['region'].'</td>
		<td> '.$result['district'].'</td>
		<td> '.$result['features_found'].'</td>
        </tr?
		';


	}

}

?>