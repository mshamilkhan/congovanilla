<?php
include('connection.php');



if(isset($_POST['signup'])){
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$conpassword = $_POST['confirmpassword'];

$authenticate = "INSERT INTO register (name, email, password, confirmpassword)
VALUES ('$username', '$email', '$password' , '$conpassword')";
echo "inside signupdb";
$result = $conn->query($authenticate);
if($result->num_rows>0){
    // echo "email found";
    header("location: login.php");
}else{
    header("location: signup.php");
    // echo "heheheh no no no";
}






}
$conn->close();

?>