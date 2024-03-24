<?php include "../includes/db.php";?>
<?php session_start(); ?>
<?php
       $_SESSION['username']=null;
       $_SESSION['firstname']=null;
       $_SESSION['LastName']=null;
       header('Location: ../home-page');
       ?>