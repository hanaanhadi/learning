
<?php
$conn = mysqli_connect("localhost","root","","learning");

$mcname = $_POST['mcname'];
$mdesc = $_POST['mdesc'];		

$qry = "INSERT INTO main_category VALUES('','$mcname','$mdesc')";

$result = mysqli_query($conn,$qry);

echo "Record Successfully Entered ...!";

?>
