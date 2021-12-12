<?php
session_start();

if (!isset($_POST['name'])) 
{
  require_once ('../model/model1.php');
  $products = showAllproducts();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/storeOwner/storeOwner.css">

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
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
                        <a class="selected_nav" href="empDashboard.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="process.php">Process Order</a>
                    </li>
                    <li>
                        <a href="order.php">Order Product</a>
                    </li>
                    
                    <li>
                        <a href="eChangePass.php">Change Password</a>
                    </li>
                    <li>
                        <a href="logout.php">Log Out</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <section>
      <style>
        table,td,th{
        border:2px solid black;
      }
</style>
            <legend >
               
                <form action="controller/saveProduct.php" method="POST" enctype="multipart/form-data">
                  <fieldset style="width:30%;">
                      <legend> <h1>Available Process Order</h1></legend>
                      <table align="center"; >
                      <thead>
                      <tr>
                      <th width="45%">Product Name</th>
                      <th width="40%">Price</th>
                      <th colspan="2">Action</th>
                      </tr>
                      </thead>
                      <body>
                          <?php 
                          foreach ($products as $i => $product): 
                          if ($product['Display'] == "YES" || isset($_POST['name'])):
                          ?>
                      <tr>

                      <td><?php echo $product['Name'] ?></td>
                      <td><?php echo $product['Selling Price']?></td>
                      <td width="10%"><a href="?id=<?php echo $product['ID'] ?>">Processing</a></td>
                      <td width="20%"><a href="deleteProduct.php?id=<?php echo $product['ID'] ?>">Deliver</a></td>
                      </tr>
                       <?php endif; endforeach; ?>
               </table>
          </fieldset>
</body>

</html>