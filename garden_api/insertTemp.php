<?php

$serverName = "localhost";
$databaseName = "id14954125_garden";
$userName = "id14954125_mandar800";
$password= "7FN%S<RnsK6jUXCR";
$conn=mysqli_connect($serverName,$userName,$password,$databaseName);



if(!$conn){
  echo "Error Connecting to Database";
}

$res=mysqli_query($conn,"INSERT INTO `items`( `title`, `cost`, `img`) VALUES ('$title','$cost','$filename')");
if($res){
            echo "success";
        }else{
             echo "failed";
        }

?>