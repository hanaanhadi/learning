<?php $page = "viewmcat"; ?>


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
    <link href="css/custom.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <!-- Wrapper required for sidebar transitions -->
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
            <?php require_once('db/conn.php');?> 
             <div class="panel panel-default">
                        <div class="panel-body">
                            
                             
                            <br><br><p class="btn btn-lg" style="background-color: lightblue; color: white;">All Inserted Main categories Are :</p><br><br>
                             <table class="table table-bordered" border="1" >
                              
                                  <tr class="default" >
                                  <td style="background-color: lightblue; color: white; font-size: 16px; font-style: oblique; text-align: center;">S.No</td>
                                  <td style="background-color: lightblue; color: white; font-size: 16px; font-style: oblique; text-align: center;">Category</td>
                                  <td style="background-color: lightblue; color: white; font-size: 16px; font-style: oblique; text-align: center;">Description</td>
                                  <td  colspan="2"  style="background-color: lightblue; color: white; font-size: 16px; font-style: oblique; text-align: center;">Action</td>
                                  </tr>
                                 
                                 <?php $conn = mysqli_connect("localhost", "root", "", "learning"); ?>
                                 <?php 
                                $query = "SELECT * FROM `main_category`";
                                $result = mysqli_query($conn, $query);
                                 



                                  ?>
                                 <?php $i=1; while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                                 
                                 <tr>
                                  <td style="background-color: grey; color: white;  font-style: oblique;">
                                  <?php echo $i; ?></td>
                                  <td style="background-color: grey; color: white;  font-style: oblique;">
                                  <?php echo $row['main_cat_name'];?></td>
                                  <td style="background-color: grey; color: white;  font-style: oblique;">
                                  <?php echo $row['main_desc'];?></td>
                                
                                   <td style="background-color: grey; color: white;  font-style: oblique; vertical-align: middle;"><a href="upd_mcat.php?uid= <?php echo $row['main_id'];?>" class="btn btn-primary">Update</a></td>

                                  <td style="background-color: grey; color: white;  font-style: oblique; vertical-align: middle;"><a href="del_mcat.php?did= <?php echo $row['main_id'];?>" class="btn btn-danger">Delete</a></td>
                                  </tr>
                                
                                <?php $i++; } ?>
                             
                            </table>
                        </div>
                        

                    </div>
            <!-- /st-content -->
        </div>

        <!-- /st-pusher -->
        <!-- Footer -->
         <?php require_once('includes/footer.php');?>
        <!-- // Footer -->
    </div>
    <!-- /st-container -->
    <!-- Inline Script for colors and config objects; used by various external scripts; -->



    <script>
    var colors = {
        "danger-color": "#e74c3c",
        "success-color": "#81b53e",
        "warning-color": "#f0ad4e",
        "inverse-color": "#2c3e50",
        "info-color": "#2d7cb5",
        "default-color": "#6e7882",
        "default-light-color": "#cfd9db",
        "purple-color": "#9D8AC7",
        "mustard-color": "#d4d171",
        "lightred-color": "#e15258",
        "body-bg": "#f6f6f6"
    };
    var config = {
        theme: "html",
        skins: {
            "default": {
                "primary-color": "#42a5f5"
            }
        }
    };
    </script>
    <!-- Separate Vendor Script Bundles -->
    <script src="js/vendor-core.min.js"></script>
    <script src="js/vendor-countdown.min.js"></script>
    <script src="js/vendor-tables.min.js"></script>
    <script src="js/vendor-forms.min.js"></script>
    <script src="js/vendor-carousel-slick.min.js"></script>
    <script src="js/vendor-player.min.js"></script>
    <script src="js/vendor-charts-flot.min.js"></script>
    <script src="js/vendor-nestable.min.js"></script>
    <!-- <script src="js/vendor-angular.min.js"></script> -->
    <!-- Compressed Vendor Scripts Bundle
    Includes all of the 3rd party JavaScript libraries above.
    The bundle was generated using modern frontend development tools that are provided with the package
    To learn more about the development process, please refer to the documentation.
    Do not use it simultaneously with the separate bundles above. -->
    <!-- <script src="js/vendor-bundle-all.min.js"></script> -->
    <!-- Compressed App Scripts Bundle
    Includes Custom Application JavaScript used for the current theme/module;
    Do not use it simultaneously with the standalone modules below. -->
    <!-- <script src="js/module-bundle-main.min.js"></script> -->
    <!-- Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL the modules are 100% compatible -->
    <script src="js/module-essentials.min.js"></script>
    <script src="js/module-material.min.js"></script>
    <script src="js/module-layout.min.js"></script>
    <script src="js/module-sidebar.min.js"></script>
    <script src="js/module-carousel-slick.min.js"></script>
    <script src="js/module-player.min.js"></script>
    <script src="js/module-messages.min.js"></script>
    <script src="js/module-maps-google.min.js"></script>
    <script src="js/module-charts-flot.min.js"></script>
    <!-- [html] Core Theme Script:
        Includes the custom JavaScript for this theme/module;
        The file has to be loaded in addition to the UI modules above;
        module-bundle-main.js already includes theme-core.js so this should be loaded
        ONLY when using the standalone modules; -->
    <script src="js/theme-core.min.js"></script>
</body>
</html>