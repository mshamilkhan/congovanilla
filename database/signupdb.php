<?php
include('../connection.php');



if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conpassword = $_POST['confirmpassword'];


    $alreadyExist = "SELECT email FROM register WHERE email='$email'";
    $exist = $conn->query($alreadyExist);

    if ($exist->num_rows > 0) {
        header("Location: ../pages/login.php?error=email_exists");
        exit();
    } else {

        if ($password == $conpassword) {

            $authenticate = "INSERT INTO register (name, email, password, confirmpassword)
    VALUES ('$username', '$email', '$password' , '$conpassword')";
            $conn->query($authenticate);
            header("location: ../pages/login.php");
        } else {
            header("Location: ../pages/signup.php?error=password_mismatch");
            exit();
        }
    }
}
$conn->close();
