<?php 

    $conn =  mysqli_connect("localhost","root","","learning");
    $subID = $_POST["subId"];
    $output = '';
    $sql="select * from `detail_category` where sub_id = '".$subID."' ORDER BY detail_cat_name ";
    $result = mysqli_query($conn,$sql);
    $output = '<option value = "">Select detail Category </option>';

    while ($row = mysqli_fetch_array($result))
     {
        $output .= '<option value="'. $row["detail_id"].'">'. $row["detail_cat_name"].'</option>';
     }
     echo  $output;


?>
