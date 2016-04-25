<?php 

    $conn =  mysqli_connect("localhost","root","","learning");
    $mainID = $_POST["mainId"];
    $output = '';
    $sql="select * from `sub_category` where main_id = '".$mainID."' ORDER BY sub_cat_name ";
    $result = mysqli_query($conn,$sql);
    $output = '<option value = "">Select Sub Category </option>';

    while ($row = mysqli_fetch_array($result))
     {
        $output .= '<option value="'. $row["sub_id"].'">'. $row["sub_cat_name"].'</option>';
     }
     echo  $output;


?>
