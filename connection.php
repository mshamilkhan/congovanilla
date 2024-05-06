<?php
$host= "localhost";
$user= "root";
$pass= "";
$db= "congo";
$conn= mysqli_connect($host, $user, $pass, $db);
if($conn){
    // echo "Successfull Connection";
}
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>