<?php
include('../connection.php');



if(isset($_POST['login'])){
$email = $_POST['email'];
$password = $_POST['password'];

$authenticate = "SELECT email from credentials WHERE email='$email' && password = '$password'";
$result = $conn->query($authenticate);
if($result->num_rows>0){
    header("location: ../index.php");
}else{
    header("location: ../pages/login.php");
}






}
$conn->close();

?>