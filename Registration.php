<?php require_once './controller/registrationController.php'?> 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Registration</title>  
           <script src="./Js/index.js"></script> 
           <script src="./Js/jquery.js"></script>
      </head>  
      <body>
           <center> 
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Registration</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                         echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Name:</label>  
                     <input type="text" name="name" class="form-control" id= "name" onblur="checkName()"/>
                     <span id="nameErr"><?php echo $nameErr;?></span><br><hr>  
                     <label>Email:</label>  
                     <input type="text" name="email" class="form-control" id= "email" onblur="checkEmail()"/>
                     <span id="emailErr"><?php echo $emailErr;?></span><br><hr>
                     <label>User Name:</label>  
                     <input type="text" name="username" class="form-control"  id= "username"  onblur="checkUsername()"/>
                     <span id="usernameErr"></span><br><hr>
                     <label>Password:</label>  
                     <input type="password" name="password" class="form-control" id= "password"  onblur="checkPassword()"/>
                     <span id="passwordErr"><?php echo $passwordErr;?></span><br><hr>  
                     <label>Confirm Password:</label>  
                     <input type="password" name="cpassword" class="form-control" id= "cpassword" onblur="checkCpassword()"/>
                     <span id="cpasswordErr"><?php echo $cpasswordErr;?></span><br><hr>    
                     <label>Gender:</label>  
                     
                        <input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="other">Other
                        <br><hr>
                     <label>Date of birth: </label>  
                     <input type="date" name="dob">
                     <br><hr>
                     <input type="submit" name="submit" value="Append"  /><br />  
                     <div>
                        <p>Already have an account? <a href="login.php">Sign in</a>.</p>
                     </div>                    
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
           </center> 
      </body>  
 </html>
 <script>
    $(document).ready(function(){
        $('#username').keyup(function(){
            var name = $(this).val();
            $.ajax({
                url: "./controller/usernameCheck.php",
                method:"POST",
                data:{my_name:name},
                dataType:"text",
                success:function(html)
                {
                    $('#usernameErr').html(html);
                }
            });
        });
    });
</script>