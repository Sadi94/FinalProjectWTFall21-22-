<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['confirmOrder']))
        {
            $message="Order Confirmed";
        }
    ?>
    <fieldset>
        <legend align="center">
            <span> <h1>Payment</h1></span>
        </legend>
        <center>
            <form method="post">
                <label>Bkash Number:</label>
                <input type="text">
                <label>Password:</label>
                <input type="password"><br>
                <input type="submit" value="Confirm Order" name="confirmOrder" style="margin-top: 5px;">
            </form>
            <?php  
                if(isset($message))  
                {  
                    echo $message;  
                } 
	
            ?>  
            <br>    
            <a href="dashboard.php">Dashboard</a>       
        </center>
        
    </fieldset>
</body>
</html>