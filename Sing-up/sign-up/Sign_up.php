<?php include "../includes/db.php";?>

<?php

if(!$connect){
    die(mysqli_connect_error());
  }


if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];


   

    $username = mysqli_real_escape_string($connect, $username );
    $password = mysqli_real_escape_string($connect, $password );

    // <!-- password encrypition -->
    
    $encrypted_password=password_hash($password,PASSWORD_BCRYPT,array('cost' => 12));

    $query = "INSERT INTO userInfo(firstname,Lastname,username,Email,Password)";
    $query .= " VALUES ('{$firstname}','{$lastname}','{$username}','{$email}','$encrypted_password')";

    $result = mysqli_query($connect,$query);
    if(!$result){
        die('Query Failed'.mysqli_error($connect));
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="sign-up.css">
</head>
<body>
    <div class="left-section">
<div class="overlay">
  
    <p>
        "Welcome aboard! By <span>Signing up</span>, you're not just creating an account.
        Your signup brings you closer to a world of mindful eating choices and food waste awarness. Let's make a difference together!
    </p>
</div>
<img src="imagesS/left-bg.jpeg" alt="" width="100%">
    </div>


    <div class="right-section">
        <div class="form-detail">
        <div class="text">

            <img src="imagesS/Rasoi Rescue Logo.jpg" alt="">
        <h1
        style="color: #000;  font-family: Poppins; font-size: 30px; font-style: normal; font-weight: 700; line-height: normal; text-transform: uppercase; margin: 0 0 10px 0;">
        SignUp</h1>
    <p
        style="color: #525252; font-family: Poppins; font-size: 16px; font-style: normal; font-weight: 400; line-height: normal; margin: 0 0 24px 0;">
        Already Sign-up?

       
        <a href="../login-page/login.php">Click to Login</a>
        </p>
    </div>
        <form action="Sign_up.php" method="post" name="sign-up">
            <div class="input-container-firstbox " >
                
                <img src="imagesS/user.svg" alt="">
                <input type="text" id="Firstname" name="firstname" placeholder="First-Name" required>
                <input type="text" id="Lastname" name="lastname" placeholder="Last-Name" required>
            </div>
            <div class="input-container">
                <img src="imagesS/user.svg" alt="">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="input-container">
                <img src="imagesS/email.svg" alt="">
                <input type="text" id="email" name="email" placeholder="Email"  required>
            </div>
            

            <div class="input-container">
                <img src="imagesS/password.svg" alt="">
                <input type="password" name="password" id="password" placeholder="Create-Password" required>
            </div>

            <div class="input-container">
                <img src="imagesS/password.svg" alt="">
                <input type="re-password" name="re-password" id="re-password" placeholder="Re-Enter Password" required>
            </div>

<button class="buttonL" type="submit" name="submit" onclick="validateform()">Create Account</button>
            </form>
        </div>

<div class="other_signin_option">
            <div class="logotext">OR Sign-up WITH</div>
            <div class="logos">
              <img src="imagesS/insta.svg" alt="">
              <img src="imagesS/facebook.svg" alt="">
              <img src="imagesS/google.svg" alt="">
              <img src="imagesS/Twitter.svg" alt="">
            </div>
            </div>
    </div>
</body>
<script>


function validateform(){  
var re_password = document.getElementById("re-password").value; 
var password = document.getElementById("password").value; 
  if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  

  }
  if(password != re_password){
    alert("Re-password should match with password")
  }
}  

</script>
</html>