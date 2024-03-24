<?php include "../includes/db.php";?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<style>
    * {

        font-family: Georgia, serif;
        text-align: center;
        position: relative;
    }

    .user-box {
  position: absolute;
  display: inline-block;
  z-index: 10;
  margin-top: 10px;
  left: 284px;
  
}

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding-left: 40px;
  padding-right: 40px;
  padding-top: 20px;
  padding-bottom: 20px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 10px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  color: black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 10000000;
  border-radius: 10px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {display: block; color: black;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

.user-name {
  display: inline-block;
  padding: 20px;
  background-color: orange;
  border-radius:10px;

}


    body {
        margin: 0;
        padding: 0;
        height: 100%;
    }

    html {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    ul.topnav {
        list-style-type: none;
        margin-left: 258px;
        padding: 5px;
        overflow: hidden;
        background-color: rgba(36, 210, 33, 1);
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;

    }

    .topnav li button.signup {
        margin: 15px;
        padding: 10px 20px 10px 20px;
        /*padding: top,right,bottom,left;*/
        background: rgba(248, 157, 20, 1);
        border-radius: 10px;
        border: none;
        cursor: pointer;
    }

    ul.topnav li {
        float: right;
    }

    ul.topnav li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        margin: 10px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    ul.topnav li a span {
        color: black;
    }


    ul.topnav li a:hover {
        background-color: rgba(248, 157, 20, 1);
        border-radius: 20px;
    }

    /* ul.topnav li a.active {
        background-color: #04AA6D;
    } */

    ul.topnav li.right {
        float: right;
    }


    .head {
        background-image: url('images/Frame\ 1.png');
        margin-top: 0px;
        margin-bottom: 39px;
        margin-left: 10px;
          position: relative;
         /*left: 20px;
         bottom: 27px; */
         height: 550px;
         background-position: center;
         background-repeat: no-repeat;
         background-size: cover;
         position: relative;
         padding-top: 20px;
         animation: slider 18s infinite linear;
       }
       @keyframes slider {

        0%{ background-image: url('images/Frame\ 1.png');}
        35%{ background-image: url('images/Main image.png');}
        75%{ background-image: url('images/frame\ 2.png');}    
        }

       .head-text {
        /* text-align: left;
        position: absolute; */
        /* top: 50%;
        left: 21%; */
        /* transform: translate(-50%, -50%); */
        color: black;
        height: auto;
        position: absolute;
        top: 120px;
        left: 30px;
      }
      .head-text p{
          font-size: 40px;
          text-align: left;
          text-shadow: 1px 1px 2px black;
      }
      .head-text-button{
        position: absolute;
        top: 350px;
        left: 100px;
        border: none;
        outline: 0;
        display: inline-block;
        padding: 18px 24px;
        text-align: center;
        cursor: pointer;
        border-radius: 20px;
        background-color: #32CD32;
        font-size: larger;
        transition: all 0.3s ease;
      }
      .head-text-button:hover {
        transform: scale(1.1);
      background-color: #32CD32;
      color: white;
      box-shadow: 2px 2px 4px black;
    
    }
    p.aim{
        font-family: Georgia, serif;
        text-align: center;
        position: relative;
        justify-content:center ;
        left: 17%;
        font-size: 30px;
        margin-top: -20px; 
        width: 70%;
     }
     .container{
        display: flex;
        flex-direction: column;
        position: relative;
        /* gap: 2000px; */
     }

                                                                       /* BOX 1 */
     .box1{
        width: 1240px;
        height: 489px;
        background: linear-gradient(270deg, #E9BBFA 17.26%, #DAAFEA 41.63%, #B692C3 68.88%, #8A6F94 101.29%);
        border-radius: 40px;
        position: absolute;
        right: 10px;
        text-align: left;
    }
     .box1 h1{
        color: rgba(106, 7, 141, 1);
        font-size: 64px;
        font-weight: 400;
        line-height: 80px;
        position: absolute;
        left: 44%;
    }
    .box1 p{
        width: 588px;
        font-size: 28px;
        line-height: 35px;
        position: absolute;
        left: 42%;
        top: 25%;
        margin: 20px;
        padding:20px ;
        text-align: left;
    }

    
    .boximages{
        position: relative;
    }
    
    .box1-before{
        display: inline;
        position: absolute;
        top: 80px;
        left: 32%;
    }
    
    .box1-img{
        position: absolute;
        top: 200px;
        left: 125px;
    }
    
    .box1-after{
        display: inline;
        position: absolute;
       top: 550px;
        left: 2%;
    }




                                                                 /* BOX 2 */
    .box2{
        width: 1240px;
        height: 489px;
        background: linear-gradient(270deg, #FB9F99 26.53%, #F66C6C 56.99%, #F0523D 83.66%, #E14530 99.33%);
        border-radius: 40px;
        position: absolute;
        left: 10px;
        top: 850px;
        text-align: right;

    }
     .box2 h1{
        color: rgba(179, 28, 28, 1);
        font-size: 64px;
        font-weight: 400;
        line-height: 80px;
        position: absolute;
        left: 7%;
    }
    .box2 p{
        width: 588px;
        font-size: 28px;
        line-height: 35px;
        position: absolute;
        right: 42%;
        top: 25%;
        margin: 20px;
        padding:20px ;
        text-align: left;
    }

    .boximages{
        position: relative;
    }
    
    .box2-before{
        display: inline;
        position: absolute;
        top: 550px;
        right: 2%;
    }
    
    .box2-img{
        position: absolute;
        top: 640px;
        right: 125px;
    }
    
    .box2-after{
        display: inline;
        position: absolute;
       top: 970px;
        right: 32%;
    }
                                                                 /* BOX 3 */
    .box3{
    width: 1240px;
    height: 489px;
    background: linear-gradient(270deg, #C8E37C 17.8%, #B0CF69 25.42%, #97C247 36.76%, #80B43E 66.93%, #65A930 100.12%);
    border-radius: 40px;
    position: absolute;
    right: 10px;
    top: 1450px;
    text-align: left;
    }
    .box3 h1{
        color: rgba(51, 94, 25, 1);
    font-size: 64px;
    font-weight: 400;
    line-height: 80px;
    position: absolute;
    left: 44%;
    }
    .box3 p{
    width: 588px;
    font-size: 28px;
    line-height: 35px;
    position: absolute;
    left: 42%;
    top: 25%;
    margin: 20px;
    padding:20px ;
    text-align: left;
    }


    .boximages3{
    position: relative;
    }

    .box3-before{
    display: inline;
    position: absolute;
    top: 1585px;
    left: 32%;
    }

    .box3-img{
    position: absolute;
    top: 1700px;
    left: 125px;
    }

    .box3-after{
    display: inline;
    position: absolute;
    top: 2010px;
    left: 2%;
    }
                                                                /* BOX 4 */
        .box4{
            width: 1240px;
            height: 489px;
            background: linear-gradient(270deg, #C2CCF1 15.07%, #6FA4CA 48.77%, #437BBD 74.94%, #1F64A3 99.24%);
            border-radius: 40px;
            position: absolute;
            left: 10px;
            top: 2300px;
            text-align: right;
    
        }
            .box4 h1{
                color: rgba(51, 94, 25, 1);
            font-size: 64px;
            font-weight: 400;
            line-height: 80px;
            position: absolute;
            left: 7%;
        }
        .box4 p{
            width: 588px;
            font-size: 28px;
            line-height: 35px;
            position: absolute;
            right: 42%;
            top: 25%;
            margin: 20px;
            padding:20px ;
            text-align: left;
        }
    
        .boximages{
            position: relative;
        }
        
        .box4-before{
            display: inline;
            position: absolute;
            top: 2000px;
            right: 2%;
        }
        
        .box4-img{
            position: absolute;
            top: 2100px;
            right: 125px;
        }
        
        .box4-after{
            display: inline;
            position: absolute;
            top: 2450px;
            right: 32%;
        }
</style>

<body>

    <div class="nav">
    <div class="user-box">
                    <span class="user-name">

                    <?php 
                                if(isset($_SESSION['username'])){

                                    echo $_SESSION['username'];
                                }
                            ?>

                    </span>
                    <div class="dropdown">
                        <button class="dropbtn">^</button>
                        <div class="dropdown-content">
                            <a href="#">Profile</a>
                            <a href="../login-page/logout.php">Logout</a>
                        </div>
                    </div>
                </div>


        <ul class="topnav">

            <li class="right"><a href="#about">About Us</a></li>

            <li><a href="/Recipe_page/Recipie.html">Recipe</a></li>

            <li><a href="#recipes">Awarness</a></li>
            <li><a href="#recipes">Meal Tracker</a></li>
            <li><a href="#recipes">Home</a></li>

        </ul>
    </div>

    <div class="head">
    <div class="head-text">
      <p>Track your bites, shrink your <br>plates: Your journey to a <br> leaner you starts here!</p>
    </div>
    <button class="head-text-button">Go to Tracker</button>
  </div>

  <div class="bottom-text">
    <p class="aim">Unlock a world of culinary wisdom: Explore our treasure trove of meal tracking and food reduction
      secrets!</p>
  </div>

  <div class="container">

    <div class="box1">
      <h1>Healthy Recipe</h1>
      <p>Our healthy recipe page is a culinary oasis, brimming with wholesome dishes crafted to nourish both body and
        soul. From vibrant salads to hearty soups, and tantalizing mains to guilt-free desserts, each recipe is
        thoughtfully curated to support your journey towards a healthier, happier you.</p>
    </div>
  
    <div class="boximages">
  
      <div class="box1-before">
        <img src="images/Group 5.png" alt="">
      </div>
      <div class="box1-img">
  
        <img src="images/Recipie.png" alt="" width="500px">
      </div>
      <div class="box1-after">
        <img src="images/Group 4.png" alt="">
      </div>

    </div>



    <div class="box2">
      <h1> Meal Tracker</h1>
      <p>Take charge of your nutrition journey with our intuitive meal tracker page. Seamlessly monitor your daily intake,
        set personalized goals, and track your progress towards a healthier lifestyle. Whether you're aiming to shed a few
        pounds, optimize your macros, or simply adopt healthier eating habits, our user-friendly interface empowers you
        every step of the way.</p>
    </div>
  
  <div class="boximages">
  
      <div class="box2-before">
        <img src="images/Group 5.png" alt="">
      </div>
      <div class="box2-img">
  
        <img src="images/meal tracker.png" alt="" width="500px">
      </div>
      <div class="box2-after">
        <img src="images/Group 4.png" alt="">
      </div>
    </div>



    <div class="box3">
      <h1>Food Waste Reduction</h1>
      <p>Join us in the fight against food waste. Here, we're on a mission to minimize waste and maximize sustainability
        in the kitchen. Discover practical tips and insightful resources to help you make the most of every ingredient and
        reduce your environmental footprint. Together, we can make a meaningful difference for our planet, one plate at a
        time.</p>
    </div>
  
    <div class="boximages3">
  
      <div class="box3-before">
        <img src="images/Group 5.png" alt="">
      </div>
      <div class="box3-img">
  
        <img src="images/foodsave.png" alt="" width="500px">
      </div>
      <div class="box3-after">
        <img src="images/Group 4.png" alt="">
      </div>
    </div>

    <div class="box4">
      <h1>Statistics and Awareness</h1>
      <p>Explore eye-opening statistics and insightful data visualizations that illuminate the scale of the problem and
        its impact on our planet. From staggering figures on global food waste to localized insights that hit closer to
        home, gain a deeper understanding of the challenges we face and the opportunities for positive change.</p>
    </div>
  
    <div class="boximages">
  
      <div class="box4-before">
        <img src="images/Group 5.png" alt="">
      </div>
      <div class="box4-img">
  
        <img src="images/food.png" alt="" width="500px">
      </div>
      <div class="box4-after">
        <img src="images/Group 4.png" alt="">
      </div>
    </div>



  </div>
  
