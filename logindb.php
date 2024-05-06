<?php
include('connection.php');



if(isset($_POST['login'])){
$email = $_POST['email'];
$password = $_POST['password'];

$authenticate = "SELECT email from credentials WHERE email='$email' && password = '$password'";
echo "inside register";
$result = $conn->query($authenticate);
if($result->num_rows>0){
    // echo "email found";
    header("location: index.php");
}else{
    header("location: login.php");
    // echo "heheheh no no no";
}






}
$conn->close();

?>