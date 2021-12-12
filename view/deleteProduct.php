<?php 

require_once '../model/model1.php';
if(isset($_GET['id']))
{
  $product = showProduct($_GET['id']);  
}
else
{
  header('Location: ../view/process.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
   <?php 
        
  ?>
<form method="POST">
<fieldset style="width: 15%;">
<legend>Delivered Product</legend>

  Name : <?php echo $product['Name'] ?><br>

  Buying Price : <?php echo $product['Buying Price'] ?><br>

  Selling Price : <?php echo $product['Selling Price'] ?><br>

  Displayable :<?php echo $product['Display'] ?><br>

  <hr>
  <a href="../controller/removeProduct.php?id=<?php echo $product['ID'] ?>">Delivered</a>

 </fieldset>
</form>
</body>
</html>