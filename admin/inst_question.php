<?php 
$conn = mysqli_connect("localhost","root","","learning");
$number = count($_POST["name"]);

if ($number > 0){
	for ($i=0; $i < $number; $i++)
	 { 
			if (trim($_POST["name"][$i]) != '') 
			{
				$qry = "insert into questions(name) values ('".mysqli_real_escape_string($conn , $_POST["name"][$i]."') ";
					mysqli_query($conn,$qry);
			}
	}
	echo 'Data Inserted';	
 }
else
{
	echo "Enter Question";
}

 ?>