
<?php require_once('db/conn.php') ?>
<?php 
        $uid = $_GET['uid'];
        $sid= $_GET['sid'];

         $query = "SELECT detail_category.detail_id,sub_category.sub_id ,sub_category.sub_cat_name, detail_category.detail_cat_name, detail_category.detail_desc FROM detail_category
       INNER JOIN sub_category ON detail_category.sub_id=sub_category.sub_id and detail_category.sub_id=$uid";

        $reslt = mysqli_query($conn, $query);
        $row= mysqli_fetch_array($reslt, MYSQLI_ASSOC);


if (isset($_POST['update'])) 
{
    $sub_id= $_POST['sub_id'];
    $dcname = $_POST['dcname'];
    $ddesc = $_POST['ddesc'];
    $qry=("Update detail_category SET sub_id='$sub_id', detail_cat_name='$dcname', detail_desc='$ddesc' where sub_id='$uid'") ;
    mysqli_query($conn,$qry);

    header("Location:http://localhost/learning/admin/viewdcat.php?id=updated");
}
?>
<?php $qry_main="select * from `sub_category`"; 

                $qr1= mysqli_query($conn,$qry_main);

?> 
<?php $page = "upd_mcat"; ?>



 <!DOCTYPE html>
<html class="st-layout ls-top-navbar-large ls-bottom-footer show-sidebar sidebar-l3" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Learning</title>
    <!-- Compressed Vendor BUNDLE
    Includes vendor (3rd party) styling such as the customized Bootstrap and other 3rd party libraries used for the current theme/module -->
    <link href="css/vendor.min.css" rel="stylesheet">
    <!-- Compressed Theme BUNDLE
Note: The bundle includes all the custom styling required for the current theme, however
it was tweaked for the current theme/module and does NOT include ALL of the standalone modules;
The bundle was generated using modern frontend development tools that are provided with the package
To learn more about the development process, please refer to the documentation. -->
    <!-- <link href="css/theme.bundle.min.css" rel="stylesheet"> -->
    <!-- Compressed Theme CORE
This variant is to be used when loading the separate styling modules -->
    <link href="css/theme-core.min.css" rel="stylesheet">
    <!-- Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL modules are 100% compatible -->
    <link href="css/module-essentials.min.css" rel="stylesheet" />
    <link href="css/module-material.min.css" rel="stylesheet" />
    <link href="css/module-layout.min.css" rel="stylesheet" />
    <link href="css/module-sidebar.min.css" rel="stylesheet" />
    <link href="css/module-sidebar-skins.min.css" rel="stylesheet" />
    <link href="css/module-navbar.min.css" rel="stylesheet" />
    <link href="css/module-messages.min.css" rel="stylesheet" />
    <link href="css/module-carousel-slick.min.css" rel="stylesheet" />
    <link href="css/module-charts.min.css" rel="stylesheet" />
    <link href="css/module-maps.min.css" rel="stylesheet" />
    <link href="css/module-colors-alerts.min.css" rel="stylesheet" />
    <link href="css/module-colors-background.min.css" rel="stylesheet" />
    <link href="css/module-colors-buttons.min.css" rel="stylesheet" />
    <link href="css/module-colors-text.min.css" rel="stylesheet" />
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
 <div class="st-container">
        <!-- Fixed navbar -->
        
         <?php require_once('includes/nav-fixed.php');?>  

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-nav">
                    
                    <ul class="nav navbar-nav navbar-nav-bordered navbar-right">
                        <!-- notifications -->
                        
                        <?php require_once('notification.php');?>


                        <!-- // END notifications -->
                        
    
                        <!-- User -->
                            <?php require_once('nav-logout.php');?>
                        
                <!-- /.navbar-collapse -->
            </div>
        </div>
        <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
        
        <!-- sidebar effects OUTSIDE of st-pusher: -->
            
            <?php// require_once('includes/sidebar.php');?>

        <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->
        <!-- content push wrapper -->
        <div class="st-pusher" id="content">
         <div class="st-content-inner padding-none">
             <div class="container-fluid">
            <div class="page-section">
            <!-- sidebar effects INSIDE of st-pusher: -->
            <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
            <!-- this is the wrapper for the content -->
            
             <div class="panel panel-default">
                        <div class="panel-body">
                            <span id = "message"></span>
                            <form method="post" action="">
                                
                               <label style="font-size: 18px; color: white; background-color: rgb(66, 194, 251) ;" class="btn ">Update Category Here .</label>     
                               <div class="dropdown">
                                <label  style="font-size: 16px;  color:#667575;" class="btn">Choose detail Category  : </label> 
                                <select class=" btn btn-default " name="sub_id">
                                      <?php while ($row1=mysqli_fetch_array($qr1,MYSQLI_ASSOC) ) { ?>


                                      <option value="<?php echo $row1['sub_id']; ?>"

                                        <?php if($row['sub_id']==$row1['sub_id']){ ?>
                                       selected = "selected"

                                        <?php } ?>

                                       ><?php echo $row1['sub_cat_name']; ?></option>
                                   



                                     <?php } ?>
                                    </select> 
                                </div>                       
                              
                              <div class="form-group">
                                <label for="cname"><h2 class="btn btn-primary">Subject Name</h2></label>
                                <input type="text" class="form-control" name="dcname" id="cname" 
                                value="<?php echo $row['detail_cat_name'] ;?>">
                              </div>
                              <div class="form-group">
                                <label for="desc"><h2 class="btn btn-primary">subject Description</h2></label>
                                <textarea class="form-control" name="ddesc" id="desc"><?php echo $row['detail_desc']; ?></textarea>
                              </div>
                              
                              <button class="btn btn-success btn-lg center-block " id="update" name="update">
                                  Update
                              </button>
                                  
                              </input>
                               
                            </form>
                             
                        </div>

                    </div>
            <!-- /st-content -->
            </div>
            </div>
            </div>
        </div>

        <!-- /st-pusher -->
        <!-- Footer -->
         <?php require_once('includes/footer.php');?>
        <!-- // Footer -->
    </div>
