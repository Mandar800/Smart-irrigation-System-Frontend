<?php

$serverName = "localhost";
$databaseName = "id14954125_garden";
$userName = "id14954125_mandar800";
$password= "7FN%S<RnsK6jUXCR";
$conn=mysqli_connect($serverName,$userName,$password,$databaseName);
if(!$conn){
  echo "Error Connecting to Database";
}

$res=mysqli_query($conn,"SELECT AVG(water) from `Moisture`");
$row = mysqli_fetch_row($res);
if($res){
            echo $row[0];
        }else{
             echo "failed";
        }

?>