<?php 
     include 'showLogout.php';
?>
<?php require_once './controller/viewController.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
</head>
<body>
    
    
    
    <center>
        <fieldset>
            <legend align="center">
                <span> <h1>View Profile</h1></span>
            </legend>
            <label>Name: <?php echo $name?></label>
            <hr>
            <label>Email: <?php echo $email?></label>
            <hr>
            <label>Username: <?php echo $_SESSION['uname']?></label>
            <hr>
            <label>Gender: <?php echo $gender?></label>
            <hr>
            <label>Date of bath: <?php echo $dob?></label>
        </fieldset>
    </center>
</body>
</html>