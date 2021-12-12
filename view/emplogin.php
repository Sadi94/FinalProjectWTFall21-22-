<?php
include('../controller/emploginCheck.php');
if(isset($_SESSION['email'])){
    header("location: ../view/empDashboard.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <center><a href="Home.php"><img src="../src/t.png" alt=""></a></center>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src='../jsc/emLogin.js'></script>
<body>
    
<form action="" onsubmit="return validateForm()" method="post">
    User Email:<input type="text" id="email" onkeyup="va()"name="email"><br><p id="errorname"></p>
    Password:<input type="password" id="password"  onkeyup="val()" name="password"><br>
    <p id="errorroll"></p>
    <input type="submit" name="submit" value="submit">
     or
    <a href="signupPage.php">Go to Register</a>
</form>
<?php echo $err; 
?>
</body>
<?php 
        include "../include/footer.php";
      ?>
      </head>
</html>

<?php
unset($_SESSION['email']);
?>