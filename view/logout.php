
<?php
	 session_start();
	 extract($_SESSION);
	
	 unset($_SESSION['email']);
	 
	 header("Location:Home.php");
  ?>