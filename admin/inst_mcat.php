

<?php
$mcname = $_POST["cnam"];
echo $mcname;
exit;
$conn =  mysqli_connect("localhost","root","","learning"); 
	$mcname = $_POST["cname"];
    $mcdesc = $_POST["cdesc"];
    $output = '';
    $qry=("INSERT INTO `main_category` VALUES('','$mcname','$mcdesc')";
    $res=mysqli_query($conn,$qry);
    if (!$res) 
    {
    	echo "<div class = 'alert alert-danger fade in'>";
    	echo "<a href = '#' class= 'close' data-dismiss = 'alert' aria-label='close'>$times;</a>";
    	echo "<strong>Sorry</strong> Enter Category Again !";
    	echo "</div>";
    }
    else
    {
    	echo "<div class = 'alert alert-success fade in'>";
    	echo "<a href = '#' class= 'close' data-dismiss = 'alert' aria-label='close'>$times;</a>";
    	echo "<strong>Successfully</strong> Data Inserted !";
    	echo "</div>";
    }



?>