<?php
    //session_start();
      //  include("../studentdashboard/php/connect.php");
?>
<?php $page = "instdashboard"; ?>
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
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    $("input[name='accept_all']").click(function() {
        var checked = $(this).prop("checked"); 
        $("#mytable tr td input[name='accept[]']").prop("checked",checked); 
    });
    $("input[name='ignore_all']").click(function() {
        var checked = $(this).prop("checked"); 
        $("#mytable tr td input[name='ignore[]']").prop("checked",checked); 
    });
});
</script>
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
            <div class="st-content">
                <div class="st-content-inner padding-none">
                    <div class="container-fluid">
                        <div class="page-section">
                            <div class="tabbable paper-shadow relative" data-z="0.5">
                                <!-- Tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="admin-control.php"><i class="fa fa-file-text-o"></i> <span class="hidden-sm hidden-xs">Login Requests</span></a></li>
                                    <li class=""><a href="new-admin.php"><i class="fa fa-file-text-o"></i> <span class="hidden-sm hidden-xs">Make New Admin</span></a></li>
                                </ul>
                            </div><!--Code here-->
                            
                                    <?php
                                        $query="SELECT * From `user` WHERE `status` LIKE '0' ";
                                        $run=mysqli_query($connect,$query);
                                        
                                        if (mysqli_num_rows($run)>=1)
                                        {
                                            echo '
                                                <form method="post" action="../Studentdashboard/php/user_status.php ">
                                                    <table style="width:100%" class="table-striped table-bordered table-condensed table-hover" id="mytable">
                                                            <tr style="background-color:green" class="success">
                                                                <th>Serial #</th>
                                                                <th>User Id</th>
                                                                <th>User Name</th>
                                                                <th>Email</th>
                                                                <th>Password</th>
                                                                <th>Action (A)</th>
                                                                <th>Action (B)</th>
                                                            </tr>
                                            ';
                                        $count = 1;
                                        while($row=mysqli_fetch_array($run))
                                            {
                                                $user_id = $row['user_id'];
                                                $username = $row['username'];
                                                $email = $row['email'];
                                                $pass = $row['password'];

                                                $_SESSION['user_id']=$user_id;
                                                $_SESSION['username']=$username;
                                                $_SESSION['email']=$email;
                                                $_SESSION['pass']=$pass;
                                                
                                                    echo"<tr style='background-color:lightblue' class='info'>";
                                                        echo"<td>$count</td>";
                                                        echo"<td>$user_id</td>";
                                                        echo"<td>$username</td>";
                                                        echo"<td>$email</td>";
                                                        echo"<td>$pass</td>";
                                                        
                                                        echo "
                                                                <td><input type='checkbox' name='accept[]' id='checks' value='$user_id'>  Accept</td><td><input type='checkbox' name='ignore[]' value='$user_id'>  Ignore</td></tr>
                                                            </tr>";
                                                    $count++;
                                            }
                                        }
                                            else{
                                                        
                                                    echo "
                                        <div class='panel panel-default' style='background-color:indigo'>
                                            <div class='media v-middle success'>
                                                <div class='media-left'>
                                                    <div class='bg-green-400 text-white'>
                                                        <div class='panel-body' style='background-color:#1C1C1C'>
                                                            <i class='fa fa-credit-card fa-fw fa-2x' style='color:white'></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='media-body' >
                                                    <span style='color:white;font-size:25px' class='text-body-2'><center>Sorry ! Table is Empty Now</center></span> 
                                                </div>
                                            </div>
                                        </div>
                                            ";
                                                        }        
                                    ?>
                                </table>
                                <?php 
                                    if (mysqli_num_rows($run))
                                    {
                                        echo '
                                          <input type="checkbox" style="margin-left:78%" id="accept_all" name="accept_all">  Accept All<input type="checkbox" style="margin-left:4.5%" name="ignore_all">  Ignore All
                                          <input type="submit" style="margin-left:78%" value="Accept" class="btn btn-success btn-md" href=""><input type="submit" style="margin-left:4.5%" value="Ignore" class="btn btn-success btn-md">
                                        ';
                                    }
                                 ?>
                                </form>
                       </div>
                    </div>
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