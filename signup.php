<?php
include("signupdb.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <div class="main">

        <div class="left">
            <div class="leftimg"><img src="./images/robo.jpg" alt="Left Image" /></div>
            <div class="head">
                <h1>Unlock Your Creativity, No Code Needed</h1>
                <br />
                <h1> Discord, Your Canvas.</h1>
                <br />
                <p>Empower Your Ideas, No Coding Required. Discord: Where Imagination Thrives.</p>
            </div>
        </div>
        
        <div class="right">

<form action="/signupdb.php" method="POST">
            <div class="loginbox">
                <img  src="./images/msk.png" alt="Logo" class="logoimg" />
                <div class="logo"></div>
                
                <label htmlFor="email">Email</label>
                <input type="email" name="email" placeholder="Enter Email Here" class="inp emailinp" required/>

                <label htmlFor="usrname">Username</label>
                <input type="text" name="username" placeholder="Enter username Here" class="inp emailinp" required/>

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
                    <input type="submit"  value="Signup" class="btn" name="signup"/>
                    
                </div>
            </div>

        </form>
        </div>
    </div>
</body>
<script src="./assets//javascripts//login.js"></script>
</html>
