<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM tutorial";
$result = $db_handle->runQuery($query);
print json_encode($result);
?>