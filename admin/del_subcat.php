 <?php require_once('db/conn.php') ?>
<?php 
	
	if (isset ($_GET['did']) && ($_GET['did'] != "")) 

	{
		$did = $_GET['did'];
		
		$query = "delete from `sub_category` where sub_id=$did";
        $result = mysqli_query($conn, $query);
	    header("Location:http://localhost/learning/admin/viewsubcat.php?id=deleted");

	}




 ?>
