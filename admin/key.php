<?php
function checkKeys ($conn , $randStr){
  $sql= "SELECT * FROM `users`";
  $result = mysqli_query($conn,$sql);

   while ($row = mysqli_fetch_assoc($result)){
           if ($row['workid'] == $randStr){
            $keyExists = true;
            break;
           }else{
            $keyExists = false;

           }
   }
   return $keyExists;
   }
   function generateKey($conn){
    $keyLength = 6;
    $str = "1234567890JHL";
    $randStr = substr(str_shuffle($str), 0 , $keyLength);

    $checkKeys = checkKeys($conn , $randStr);
    while ($checkKeys == true) {
      $randStr = substr(str_shuffle($str), 0, $keyLength);
      $checkKeys = checkKeys($conn , $randStr);
    }
    return $randStr;
   }
   echo 'WID-'.generatekey($conn);
?>