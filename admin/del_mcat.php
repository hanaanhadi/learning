 <?php require_once('db/conn.php') ?>
<?php 
	
	if (isset ($_GET['did']) && ($_GET['did'] != "")) 

	{
		$did = $_GET['did'];
		
		$query = "delete from `main_category` where main_id=$did";
        $result = mysqli_query($conn, $query);
	    header("Location:http://localhost/learning/admin/viewmcat.php?id=deleted");

	}




 ?>
