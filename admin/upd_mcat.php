
<?php require_once('db/conn.php') ?>
<?php 
        $uid = $_GET['uid'];
        $q1 = "select * from `main_category` where main_id=$uid";
        $reslt = mysqli_query($conn, $q1);
        $row= mysqli_fetch_array($reslt, MYSQLI_ASSOC);


if (isset($_POST['update'])) 
{
    $mcname = $_POST['mcname'];
    $mcdesc = $_POST['mdesc'];
    $qry=("Update main_category SET main_cat_name='$mcname', main_desc='$mcdesc' where main_id='$uid'") ;
    mysqli_query($conn,$qry);

    header("Location:http://localhost/learning/admin/viewmcat.php?id=updated");
}
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
            
            <?php require_once('includes/sidebar.php');?>

        <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->
        <!-- content push wrapper -->
        <div class="st-pusher" id="content">
            <!-- sidebar effects INSIDE of st-pusher: -->
            <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
            <!-- this is the wrapper for the content -->
            
             <div class="panel panel-default">
                        <div class="panel-body">
                            <form method="post" action="">
                                
                               <label style="font-size: 18px; color: white; background-color: lightblue ;" class="btn ">Update Category Here ...</label>                            
                              
                              <div class="form-group">
                                <label for="cname"><h2 class="btn btn-primary">Insert Main category</h2></label>
                                <input type="text" class="form-control" name="mcname" id="cname" 
                                value="<?php echo $row['main_cat_name'] ;?>">
                              </div>
                              <div class="form-group">
                                <label for="desc"><h2 class="btn btn-primary">Category Description</h2></label>
                                <textarea class="form-control" name="mdesc" id="desc"><?php echo $row['main_desc']; ?></textarea>
                              </div>
                              
                              <input type="submit" name="update" value="update" class="btn btn-success btn-xl btn-block">
                                  
                              </input>
                               
                            </form>
                             
                        </div>

                    </div>
            <!-- /st-content -->
        </div>

        <!-- /st-pusher -->
        <!-- Footer -->
         <?php require_once('includes/footer.php');?>
        <!-- // Footer -->
    </div>