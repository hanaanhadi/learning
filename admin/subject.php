<?php $page = "subject"; ?>
<?php require_once('db/conn.php') ?>
<?php 

function load_maincat()
{
    $conn =  mysqli_connect("localhost","root","","learning");
    $output = '';
    $sql="select * from `main_category`";
    $result = mysqli_query($conn,$sql);

    while ($ro = mysqli_fetch_array($result))
     {
        $output .= '<option value="'. $ro["main_id"].'">'. $ro["main_cat_name"].'</option>';
     }
     return $output;
}


if (isset($_POST['submit'])) 
{
    $mid= $_POST['main_id'];
    $sid= $_POST['sub_id'];
    $dcname = $_POST['dcname'];
    $dcdesc = $_POST['ddesc'];

    $qry="Insert into `detail_category` values('','$mid','$sid','$dcname','$dcdesc')" or die(mysql_error());
    mysqli_query($conn,$qry) or die (mysql_error());

    header("Location:http://localhost/learning/admin/inst-dashboard.php?did=inserted");
}

?>


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
    <script src="js/jquery.min.js"></script>
  

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

            
             <div class="panel panel-default">
                        <div class="panel-body">
                            <form method="post" action="">
                                
                                 <div class="dropdown">
                                  <label  class="btn btn-block" style="font-size: 16px; background-color: lightblue; color:white;">Choose Main Category  : </label>
                                   <select class="btn btn-default btn-block" name="main_id" id="main_id">
                                      <option value="">Select  Main Category</option>
                                      <?php echo load_maincat(); ?>
                                    </select>  
                                   
                                </div>  <br>   

                                 <div class="dropdown">
                                  <label  class="btn btn-block " style="font-size: 16px;background-color: lightblue;color:white;">Choose Sub Category   : </label> 
                                  <select class="btn btn-default btn-block" name="sub_id" id="sub_id">
                                      <option value="">Select Sub Category</option>
                                        
                                    </select> 
                                </div> <br>
                                <div class="dropdown">
                                  <label  class="btn btn-block " style="font-size: 16px;background-color: lightblue;color:white;">Choose Subject   : </label> 
                                  <select class="btn btn-default btn-block" name="detail_id" id="detail_id">
                                      <option value="">Select Subject</option>
                                        
                                    </select> 
                                </div>                    
                                                 
                              
                              <div class="form-group">
                                <label for="cname"><h2 class="btn btn-primary">Detail Category Name </h2></label>
                                <input type="text" class="form-control" name="scname" id="sname" placeholder="Enter Category Name " required>
                              </div>
                              <div class="form-group">
                                <label for="desc"><h2 class="btn btn-primary">Detail Description</h2></label>
                                <textarea class="form-control" name="sdesc" id="sdesc" placeholder="Enter Category Description " required></textarea>
                              </div>
                              
                              <input type="submit" name="submit" value="submit" class="btn btn-primary btn-xl btn-block">
                                  
                              </input>
                            </form>
                             
                        </div>

                    </div>
            <!-- /st-content -->
        </div>

        <!-- /st-pusher -->
        <!-- Footer -->
         <?phpr equire_once('includes/footer.php');?>
        <!-- // Footer -->
    </div>
    <!-- /st-container -->
    <!-- Inline Script for colors and config objects; used by various external scripts; -->

    
    
    <script>
        
    $(document).ready(function()
    {

        $('#main_id').change(function()
        {
            var main_id = $(this).val();

            $.ajax({

                url:"fetch_subcat.php",
                method:"POST",
                data:{mainId:main_id},
                dataType:"text",
                success:function(data)
                {
                    $('#sub_id').html(data);
                }

            }); 

        });

        $('#sub_id').change(function()
        {
            var sub_id = $(this).val();

            $.ajax({

                url:"fetch_detcat.php",
                method:"POST",
                data:{subId:sub_id},
                dataType:"text",
                success:function(data)
                {
                    $('#detail_id').html(data);
                }

            }); 

        });

    });

    </script>
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
    function myFunction() 
    {
        var main = document.getElementById("main_id").value;
        alert(main);
        
        
    }
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
