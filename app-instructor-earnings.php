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
    <!-- Wrapper required for sidebar transitions -->
    <div class="st-container">
        <!-- Fixed navbar -->
        <div class="navbar navbar-size-large navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#sidebar-menu" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-ellipsis-v"></i></a>
                    

                      <!-- main-nav Starts  -->
                     <?php require_once('php/header/main-nav.php'); ?>
                     <!-- main-nav  Ends  -->

            </div>

                  

        </div>
                                  <!-- Sidebar Menu  Starts  -->
                     
                     <?php require_once('php/left-sidebar/left-sidebar.php'); ?>
                    
                    <!-- Sidebar Menu  Ends  -->

    
       
        <div class="st-pusher" id="content">
            <!-- sidebar effects INSIDE of st-pusher: -->
            <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
            <!-- this is the wrapper for the content -->
            <div class="st-content">
                <!-- extra div for emulating position:fixed of the menu -->
                <div class="st-content-inner padding-none">
                    <div class="container-fluid">
                        <div class="page-section">
                            <h1 class="text-display-1">Earnings</h1>
                        </div>
                        <div class="page-section">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <div class="media v-middle media-clearfix-xs">
                                        <div class="media-body">
                                            <div class="max-width-300 form-group daterangepicker-report" id="reportrange">
                                                <div class="form-control overflow-hidden">
                                                    <i class="fa fa-calendar fa-fw"></i>
                                                    <span>December 10, 2014 - January 9, 2015</span>
                                                    <b class="caret"></b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="width-300 width-auto-xs">
                                                <div class="row text-center">
                                                    <div class="col-sm-6">
                                                        <h4 class="margin-none">Gross Revenue</h4>
                                                        <p class="text-display-1 text-warning margin-none">102.4k</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <h4 class="margin-none">Net Revenue</h4>
                                                        <p class="text-display-1 text-success margin-none">55k</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="line-holder" data-toggle="flot-chart-earnings" class="flotchart-holder height-300"></div>
                                </div>
                                <div class="panel-footer">
                                    <div class="table-responsive">
                                        <table class="table table-headerless table-condensed text-subhead v-middle margin-none">
                                            <tbody>
                                                <tr>
                                                    <td><a href="#">January 2015</a></td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-orange-200"></i> &dollar;64421</td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-green-200"></i> &dollar;56773</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">February 2015</a></td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-orange-200"></i> &dollar;93192</td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-green-200"></i> &dollar;48884</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">March 2015</a></td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-orange-200"></i> &dollar;57926</td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-green-200"></i> &dollar;16737</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">April 2015</a></td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-orange-200"></i> &dollar;91236</td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-green-200"></i> &dollar;76151</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">May 2015</a></td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-orange-200"></i> &dollar;51663</td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-green-200"></i> &dollar;8968</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">June 2015</a></td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-orange-200"></i> &dollar;96033</td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-green-200"></i> &dollar;8325</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">July 2015</a></td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-orange-200"></i> &dollar;100211</td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-green-200"></i> &dollar;98907</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">August 2015</a></td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-orange-200"></i> &dollar;85088</td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-green-200"></i> &dollar;74878</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">September 2015</a></td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-orange-200"></i> &dollar;44365</td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-green-200"></i> &dollar;51257</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">October 2015</a></td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-orange-200"></i> &dollar;92773</td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-green-200"></i> &dollar;84252</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">November 2015</a></td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-orange-200"></i> &dollar;30884</td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-green-200"></i> &dollar;85114</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">December 2015</a></td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-orange-200"></i> &dollar;53232</td>
                                                    <td class="width-100"><i class="fa fa-circle-o fa-fw text-caption text-green-200"></i> &dollar;53650</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /st-content-inner -->
            </div>
            <!-- /st-content -->
        </div>
        <!-- /st-pusher -->
        <!-- Footer -->
        <footer class="footer">
            <strong>Learning</strong> v1.0.0 &copy; Copyright 2015
        </footer>
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