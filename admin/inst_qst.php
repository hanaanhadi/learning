<?php
$conn = mysqli_connect("localhost","root","","learning");

    
    $did= $_POST['detail_id'];
    $qdesc = $_POST['qdesc'];
    $qopt1 = $_POST['opt1'];
    $qopt2 = $_POST['opt2'];
    $qopt3 = $_POST['opt3'];
    $qopt4 = $_POST['opt4'];
    $qopt5 = $_POST['opt5'];
    $qcopt = $_POST['copt'];

    $qry="Insert into `questions` values('','$did','$qdesc','$qopt1','$qopt2','$qopt3','$qopt4','$qopt5','$qcopt')";

    $res = mysqli_query($conn,$qry);



   echo "Record Successfully Entered ...!";

?>
