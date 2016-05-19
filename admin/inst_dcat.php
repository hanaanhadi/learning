<?php
$conn = mysqli_connect("localhost","root","","learning");

    
    $sid= $_POST['sub_id'];
    $dcname = $_POST['dcname'];
    $ddesc = $_POST['ddesc'];

    $qry="Insert into `detail_category` values('','$sid','$dcname','$ddesc')";

    $res = mysqli_query($conn,$qry);



   echo "Record Successfully Entered ...!";

?>
