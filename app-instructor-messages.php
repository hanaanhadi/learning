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
        <!-- St-pusher Start -->
        
        <div class="st-pusher" id="content">
            <!-- sidebar effects INSIDE of st-pusher: -->
            <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
            <!-- this is the wrapper for the content -->
            <div class="st-content">
                <!-- extra div for emulating position:fixed of the menu -->
                <div class="st-content-inner padding-none">
                    <div class="container-fluid">
                        <div class="page-section third">
                            <div class="media messages-container media-clearfix-xs-min media-grid">
                                <div class="media-left">
                                    <div class="messages-list">
                                        <div class="panel panel-default paper-shadow" data-z="0.5" data-scrollable-h>
                                            <ul class="list-group">
                                                <li class="list-group-item active">
                                                    <a href="#">
                                                        <div class="media v-middle">
                                                            <div class="media-left">
                                                                <img src="images/people/110/woman-5.jpg" width="50" alt="" class="media-object" />
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="date">Today</span>
                                                                <span class="user">Samantha Michael</span>
                                                                <div class="text-light">Are we ok to meet...</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="#">
                                                        <div class="media v-middle">
                                                            <div class="media-left">
                                                                <img src="images/people/110/guy-3.jpg" height="50" alt="" class="media-object" />
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="date">Sat</span>
                                                                <span class="user">Adrian Demian.</span>
                                                                <div class="text-light">Looking forward to...</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="#">
                                                        <div class="media v-middle">
                                                            <div class="media-left">
                                                                <img src="images/people/110/woman-4.jpg" width="50" alt="" class="media-object" />
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="date">5 days</span>
                                                                <span class="user">Michelle Anister</span>
                                                                <div class="text-light">Nice design.</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="#">
                                                        <div class="media v-middle">
                                                            <div class="media-left">
                                                                <img src="images/people/110/woman-3.jpg" height="50" alt="" class="media-object" />
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="date">Sat</span>
                                                                <span class="user">Sue Tallbot</span>
                                                                <div class="text-light">Looking forward to...</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="#">
                                                        <div class="media v-middle">
                                                            <div class="media-left">
                                                                <img src="images/people/110/guy-9.jpg" height="50" alt="" class="media-object" />
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="date">Sat</span>
                                                                <span class="user">Andy Smith</span>
                                                                <div class="text-light">Looking forward to...</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="#">
                                                        <div class="media v-middle">
                                                            <div class="media-left">
                                                                <img src="images/people/110/woman-9.jpg" height="50" alt="" class="media-object" />
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="date">Sat</span>
                                                                <span class="user">Jeniffer Doe</span>
                                                                <div class="text-light">Looking forward to...</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="#">
                                                        <div class="media v-middle">
                                                            <div class="media-left">
                                                                <img src="images/people/110/guy-6.jpg" height="50" alt="" class="media-object" />
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="date">Sat</span>
                                                                <span class="user">Jimmy Joe</span>
                                                                <div class="text-light">Looking forward to...</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="#">
                                                        <div class="media v-middle">
                                                            <div class="media-left">
                                                                <img src="images/people/110/guy-2.jpg" height="50" alt="" class="media-object" />
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="date">Sat</span>
                                                                <span class="user">Chris Name</span>
                                                                <div class="text-light">Looking forward to...</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <a class="btn btn-primary" href="#">
                                                    <i class="fa fa-envelope"></i> Send
                                                </a>
                                            </div>
                                            <!-- /btn-group -->
                                            <input type="text" class="form-control share-text" placeholder="Write message..." />
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                        <div class="panel-body">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <img src="images/people/110/woman-5.jpg" alt="person" class="media-object img-circle width-50" />
                                                </div>
                                                <div class="media-body message">
                                                    <h4 class="text-subhead margin-none"><a href="#">Samantha Michael</a></h4>
                                                    <p class="text-caption text-light"><i class="fa fa-clock-o"></i> 2 min ago</p>
                                                </div>
                                            </div>
                                            <p>Is 4pm ok?</p>
                                        </div>
                                    </div>
                                    <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                        <div class="panel-body">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <img src="images/people/110/guy-5.jpg" alt="person" class="media-object img-circle width-50" />
                                                </div>
                                                <div class="media-body message">
                                                    <h4 class="text-subhead margin-none"><a href="#">Adrian Demian</a></h4>
                                                    <p class="text-caption text-light"><i class="fa fa-clock-o"></i> 15 hrs ago</p>
                                                </div>
                                            </div>
                                            <p>
                                                Hi Samantha
                                            </p>
                                            <p>Sure, Tomorrow is great.. What time?</p>
                                        </div>
                                    </div>
                                    <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                        <div class="panel-body">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <img src="images/people/110/woman-5.jpg" alt="person" class="media-object img-circle width-50" />
                                                </div>
                                                <div class="media-body message">
                                                    <h4 class="text-subhead margin-none"><a href="#">Samantha Michael</a></h4>
                                                    <p class="text-caption text-light"><i class="fa fa-clock-o"></i> 1 day ago</p>
                                                </div>
                                            </div>
                                            <p>Sure.</p>
                                            <p>Is Tomorrow ok to discuss?</p>
                                        </div>
                                    </div>
                                    <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                        <div class="panel-body">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <img src="images/people/110/guy-5.jpg" alt="person" class="media-object img-circle width-50" />
                                                </div>
                                                <div class="media-body message">
                                                    <h4 class="text-subhead margin-none"><a href="#">Adrian Demian</a></h4>
                                                    <p class="text-caption text-light"><i class="fa fa-clock-o"></i> 2 days ago</p>
                                                </div>
                                            </div>
                                            <p>
                                                Can we arrange a Skype call?
                                            </p>
                                        </div>
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