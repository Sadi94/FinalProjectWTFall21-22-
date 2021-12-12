<?php 

require_once '../model/model1.php';
if (deleteProduct($_GET['id']))
{
    header('Location: ../view/process.php');
}

 ?>