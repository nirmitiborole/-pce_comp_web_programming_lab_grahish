<?php include "../includes/db.php";?>
<?php session_start(); ?>
<?php
  
  if(isset($_POST['login'])){
   $username=$_POST['username'];
   $password=$_POST['password'];

   $username=mysqli_real_escape_string($connect,$username);
   $password=mysqli_real_escape_string($connect,$password);

   
   $query = "SELECT * FROM userinfo WHERE username = '{$username}' ";
   $select_user_query = mysqli_query($connect,$query);

   if(!$select_user_query){
       die("QUERY FAILED".mysqli_error($connect));

   }

   while($row = mysqli_fetch_array($select_user_query)){
       // yeh jouper wali line hai iska matlab dhyan se smaj sabse phele humne ek query banai(line 16) uss query me humne apne datbase ki sari values ko store kar liya or unn sari values ko dal diya $select_user_query ek variable me ab kyuki humare pas ek varaible me bhaut sari value hai to hum array ko use karge , to humne $select_user_query ko rows me store kiya as a araay ab hume usme jo bhi values chaiye wo hum array ki tarah call karke le le lenge ex($row['user_id'])

      $db_user_id=$row[5];
      $db_username=$row[2];
      $db_user_password=$row[4];
      $db_user_firstname=$row[0];
      $db_user_lastname=$row[1];
    }

   if (password_verify($password,$db_user_password)){
       $_SESSION['username']=$db_username;
       $_SESSION['firstname']=$db_user_firstname;
       $_SESSION['LastName']=$db_user_lastname;
       header("Location:../home-page/homepage.php");

  }else{
    $credentials_dont_match = true;
    $msg = "wrong username or id";
}

}
  ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
    body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    height: 100vh;
}

.left-section {
    background-color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.text {
    position: relative;
    left: -3%;
    text-align: center;
}
.text h1{
    color: #000; 
    font-family: Poppins; 
    font-size: 30px; font-style: normal; 
    font-weight: 700; line-height: normal; 
    text-transform: uppercase; margin: 0 0 10px 0;
}
/* Style for the login form */
form {
    max-width: 300px;
    width: 100%;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

.buttonL {
    height: 52px;
    width: 124px;
    border-radius: 16px;
    background: linear-gradient(100deg, #9181F4 -5.85%, #5038ED 109.55%);
    box-shadow: 0px 8px 21px 0px rgba(0, 0, 0, 0.16);
    color: #fff;
    border: none;
    cursor: pointer;
    margin: auto;
    /* Center the button */
    display: block;
    /* Ensure block-level display for margin:auto to work */
    position: relative;
    left: -6%;
    transition: all 0.3s ease;
}
.buttonL:hover{
    box-shadow: 0px 8px 21px 0px rgba(0, 0, 0, 0.16); 
    transform: scale(1.1);
  }



.input-container {
    position: relative;
    width: 100%;
}

.input-container svg {
    position: absolute;
    top: 40%;
    left: 10px;
    transform: translateY(-50%);
    fill: #1C1C1C;
}

input {
    width: calc(100% - 30px);
    padding: 8px 30px 8px 40px;
    /* Adjust padding to accommodate the icon */
    margin-bottom: 16px;
    box-sizing: border-box;
    border-radius: 16px;
    border: 0px;
    /* Added border-radius */
    background: rgba(240, 237, 255, 0.80);
    /* Added background color */
    height: 52px;
}

input::placeholder {
    color: #1C1C1C;
    font-family: 'Poppins', sans-serif;
    font-size: 12px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}

.logotext {
    margin-top: 48px;
}

.logos {
    display: flex;
    gap: 23px;
    margin-top: 11px;
    margin-bottom: 15px;
}



/* Right Section */


.right-section {
    background: linear-gradient(217.64deg, #9181F4 -5.84%, #5038ED 106.73%),
        linear-gradient(0deg, rgba(0, 0, 0, 0.56), rgba(0, 0, 0, 0.56)),
        linear-gradient(0deg, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0));
    border: 1px solid;
    box-shadow: 0px 4px 4px 0px #00000040;
    background-size: auto;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-align: center;
    padding: 0px;
    position: relative;
   
}
.right-section img{
  position: relative;
    border-radius: 90px;
    opacity: 61%;
    height:100%;
    width: 100%;
}


.overlay {
    border-radius: 46px;
    border: 1px solid rgba(255, 255, 255, 0.52);
    background: rgba(255, 255, 255, 0.21);
    backdrop-filter: blur(6.800000190734863px);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    max-width: 80%;
    text-align: center;
    z-index: 1;
    /* height:10px;*/
}

/* Text styles */
.overlay p {
    color: #000;
    font-family: 'Poppins', sans-serif;
    font-size: 32px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    margin: 0;
}

.overlay span {
    color: red;
    font-size: larger;
    font-style: oblique;
}

.logo {
    width: 121px;
    position: relative;
    left: -279px;
    bottom: 214px;
}
    </style>
</head>

<body>
    
  
   
   
  
    <div class="left-section">
      <div class="text">
        
      
        <h1>
           
            LOGIN</h1>


            <!-- inline css -->
        <p
            style="color: #525252; font-family: Poppins; font-size: 16px; font-style: normal; font-weight: 400; line-height: normal; margin: 0 0 24px 0;">
            New to Rasoi Rescue?


           
            <a href="/RasoiRescue/Sing-up/Sign_up.php">Click to Sign-up</a>


        </p>
    </div>
   
        <form name="myform" method="post" action="login.php">
            <div class="input-container">

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M20 22H18V20C18 18.3431 16.6569 17 15 17H9C7.34315 17 6 18.3431 6 20V22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13ZM12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z"
                        fill="#1C1C1C" />
                </svg>
                
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>

            <div class="input-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M6 8V7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7V8H20C20.5523 8 21 8.44772 21 9V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V9C3 8.44772 3.44772 8 4 8H6ZM19 10H5V20H19V10ZM11 15.7324C10.4022 15.3866 10 14.7403 10 14C10 12.8954 10.8954 12 12 12C13.1046 12 14 12.8954 14 14C14 14.7403 13.5978 15.3866 13 15.7324V18H11V15.7324ZM8 8H16V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V8Z"
                        fill="#1C1C1C" />
                </svg>
                <input type="password" name="password"  placeholder="Password" required>
            </div>

            <?php  if(isset($_POST['login'])){
            echo $msg;
            }
            ?>
            
            <button class="buttonL" type="submit" name="login">Login</button>
         
        </form>
        <div class="logotext">OR LOGIN WITH</div>
      <div class="logos">
        <img src="/images/insta.svg" alt="" >
        <img src="/images/facebook.svg" alt="">
        <img src="/images/google.svg" alt="">
        <img src="/images/Twitter.svg" alt="">
      </div>
      <!-- audio -->
      <audio  controls src="login welcome.mp3"></audio>
    </div>

    <div class="right-section">
        <div class="overlay">
            <p>
                <span>Log in</span> to discover how you can make a difference with your food choices.
                Whether you want to find recipes,
                track your ingredients, or learn more about food waste,
                we have it all for you.
            </p>
        </div>
        <!-- Content for the right section goes here -->
        <img src="/images/right-bg.jpg" alt="" >
       
</div>
</body>

<script>


function validateform(){  
var name=document.myform.username.value;  
var password=document.myform.password.value;  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  

</script>

</html>