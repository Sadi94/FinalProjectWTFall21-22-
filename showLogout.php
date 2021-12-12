<?php
session_start();

if (isset($_SESSION['uname'])) {
     echo "<h2> Logged in as ".$_SESSION['uname']."</h2> ";
    

}
else{
          $msg="error";
          header("location:login.php");
          
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
     <header>
          <nav>
               <a href="dashboard.php">Dashboard</a>
               <a href="viewprofile.php">View Profile</a>
               <a href="edit.php">Edit Profile</a>
               <a href="cart.php">View Cart</a>
               <a href='logout.php'>Logout </a>
          </nav>
     </header>
    
</body>
</html>