<?php
include("../database/signupdb.php");

if(isset($_GET['error'])) {
    if($_GET['error'] == 'email_exists') {
       
        header("location: signup.php");
    }
 
 elseif($_GET['error'] == 'password_mismatch') {
        echo '<script>alert("Passwords do not match!");</script>';
        // header("location: signup.php");
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="main">

        <div class="left">
            <div class="leftimg"><img src="../images/dis.png" alt="Left Image" /></div>
            <div class="head">
                <h1 class="grey">Unlock Your Creativity, No Code Needed</h1>
                <br />
                <h1 class="blue"> Discord, Your Canvas.</h1>
                <br />
                <p>Empower Your Ideas, No Coding Required. Discord: Where Imagination Thrives.</p>
            </div>
        </div>
        
        <div class="right">

<form action="./signup.php" method="POST">

            <div class="loginbox">

                <img  src="../images/msk.png" alt="Logo" class="logoimg" />
                <div class="logo"></div>
                
                <label htmlFor="email">Email</label>
                <input type="email" name="email" placeholder="Enter email here" class="inp emailinp" required/>

                <label htmlFor="usrname">Username</label>
                <input type="text" name="username" placeholder="Enter username here" class="inp emailinp" required/>

                <label htmlFor="password">Password</label>
                <div class="pas">
                    <input type="password" name="password" placeholder="Enter Password Here" class="inp pasinp" required/>
                    <p class="togglepass" id="toggleBtn" onClick={passwordToggle}>show/hide</p>
                </div>
                
                
                <label htmlFor="password">Confirm Password</label>
                <input type="password" name="confirmpassword" placeholder="Enter password again" class="inp emailinp" required/>
               
                <!-- <p class="forgot" onClick={forgetPasswords}>Forgot Password</p> -->
                
                <div class="btnbox">
                    <button class="btn"><a href="login.php">Login</a></button>
                    <input type="submit"  value="Signup" class="btn signup" name="signup" onclick=""/>
                    
                </div>
            </div>

        </form>
        </div>
    </div>
</body>
<script src="../assets/javascripts/login.js"></script>
<script src="../assets/javascripts/signup.js"></script>
</html>
