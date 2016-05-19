<?php
$conn = mysqli_connect("localhost","root","","learning");

 $mid= $_POST['main_id'];
    $scname = $_POST['scname'];
    $scdesc = $_POST['sdesc'];

    $qry="Insert into `sub_category` values('','$mid','$scname','$scdesc')";

    $res = mysqli_query($conn,$qry);



   echo "Record Successfully Entered ...!";

?>
