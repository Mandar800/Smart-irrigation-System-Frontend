<?php

$serverName = "localhost";
$databaseName = "id14954125_garden";
$userName = "id14954125_mandar800";
$password= "7FN%S<RnsK6jUXCR";
$conn=mysqli_connect($serverName,$userName,$password,$databaseName);
if(!$conn){
  echo "Error Connecting to Database";
}

$res=mysqli_query($conn,"DELETE FROM `Moisture`");
$res2=mysqli_query($conn,"SELECT * FROM `temp`");
if($res){
            echo "success moisture";
        }else{
             echo "failed moisture";
        }
if($res2){
            echo "success temp";
        }else{
             echo "failed temp";
        }
?>