<?php
require_once './model/model.php';
$name = $email = $username = $password = $cpassword = $gender = $dob = '';
$nameErr = $emailErr = $usernameErr = $passwordErr = $cpasswordErr = $genderErr = $dobErr = '';
$message = '';  
$error = '';
$flag = 0;
 
if($_SERVER["REQUEST_METHOD"] == "POST")  
{  
  
    if (isset($_POST['submit']) ) {
      $data['name'] = $_POST['name'];
      $data['email'] = $_POST['email'];
      $data['username'] = $_POST['username'];
      $data['password'] = $_POST['password'];
      $data['gender'] = $_POST['gender'];
      $data['dob'] = $_POST['dob'];
    
      
    
      if (addUser($data)) {
        echo 'Successfully added!!';
        echo "<a href ='./login.php'>Login</a>";
      }
    } else {
      echo 'You are not allowed to access this page.';
    }
  
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  } 
  ?> 