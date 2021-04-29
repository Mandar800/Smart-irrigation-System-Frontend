<?php

$serverName = "localhost";
$databaseName = "id14954125_garden";
$userName = "id14954125_mandar800";
$password= "7FN%S<RnsK6jUXCR";
$conn=mysqli_connect($serverName,$userName,$password,$databaseName);
if(!$conn){
  echo "Error Connecting to Database";
}

$res=mysqli_query($conn,"SELECT * from `temp`");
$result = array();
$temp = array();
$temptime = array();

if($res){
    while($row = mysqli_fetch_row($res)){
        array_push($temptime,substr($row[0],0,5));
        array_push($temp,$row[1]);
    }
    $tempdata = array($temptime,$temp);
    array_push($result,$tempdata);
    
}else{
    echo $res;
}


$res=mysqli_query($conn,"SELECT * from `Moisture`");

$water = array();
$watertime = array();

if($res){
    while($row = mysqli_fetch_row($res)){
        array_push($watertime,substr($row[0],0,5));
        array_push($water,$row[1]);
    }
    $waterdata = array($watertime,$water);
    array_push($result,$waterdata);
    
}else{
    echo $res;
}


echo json_encode($result);

?>