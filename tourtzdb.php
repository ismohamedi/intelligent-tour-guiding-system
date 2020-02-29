<?php
$servername  = "localhost";
$username    = "root";
$password    = "";
$db          = "tourtz";

$connection= mysqli_connect($servername,$username,$password,$db);
if (!$connection) {
	echo "failed to connect";
}

?>
