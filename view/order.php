<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/storeOwner/storeOwner.css">
</head>

<body>
    <section class="navigation">
        <div class="nav-container">
            <div class="brand">
                <a href="">
                    <img src="../src/t.png" alt="">
                </a>
            </div>
            <nav>
                <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
                <ul class="nav-list">
                    <li>
                        <a href="Home.php">Home</a>
                    </li>
                    <li>
                        <a href="empDashboard.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="process.php">Process Order</a>
                    </li>
                    <li>
                        <a href="order.php">Order Product</a>
                    </li>
                    <li>
                        <a href="eEditProfile.php">Edit Profile</a>
                    </li>
                    <li>
                        <a class="selected_nav" href="eChangePass.php">Change Password</a>
                    </li>
                    <li>
                        <a href="logout.php">Log Out</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <section>
        
        </fieldset>
    </section>

    <section>
     
        <form action="../controller/saveProduct.php" method="POST" enctype="multipart/form-data">
             <fieldset style="width: 15%;">
              <legend>Order PRODUCT</legend>

              <label for="name">Product Name</label><br>
              <input type="text" id="name" name="name"><br>

              <label for="buyingPrice">Price</label><br>
              <input type="text" id="buyingPrice" name="buyingPrice"><br>

              <label for="sellingPrice">Total Price</label><br>
              <input type="text" id="sellingPrice" name="sellingPrice"><br>

              <hr>

              <input type="checkbox" id="display" name="display">
              <label for="display">Display</label><br>

              <hr>
              
              <input type="submit" name = "saveProduct" value="Save">

             </fieldset>
            </form>
        </fieldset>
    </section>

    <?php include "../include/footer.php" ?>
</body>

</html>