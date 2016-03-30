<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">
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
    <!-- Fixed navbar -->
    
         
    </div>
    <div class="container">
        <div class="jumbotron bg-transparent text-center margin-none">
            <h1>Forms</h1>
            <p>Learning includes all the form controls shipped with Bootstrap, as well as custom form components that cover various usage scenarios, all themed for modern websites.</p>
        </div>
        <div class="page-section">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                    <h4 class="page-section-heading">Basic example</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-control-material">
                                            <input type="email" class="form-control" id="exampleInputFirstName" placeholder="Your first name">
                                            <label for="exampleInputFirstName">First name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-control-material">
                                            <input type="email" class="form-control" id="exampleInputLastName" placeholder="Your last name">
                                            <label for="exampleInputLastName">Last name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-control-material static required">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    <label for="exampleInputEmail1">Email address</label>
                                </div>
                                <div class="form-group form-control-material static required">
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    <label for="exampleInputPassword1">Password</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    <h4 class="page-section-heading">Input controls</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Input</label>
                                    <div class="col-sm-9">
                                        <div class="form-control-material">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Type here..">
                                            <label for="inputEmail3">Email address</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Textarea</label>
                                    <div class="col-sm-9">
                                        <div class="form-control-material">
                                            <textarea id="textarea" class="form-control" rows="5"></textarea>
                                            <label for="textarea">Textarea</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Add-On</label>
                                    <div class="col-sm-9">
                                        <div class="form-control-material">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input id="addon" type="text" class="form-control" placeholder="Username">
                                                <label for="addon">Username</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Input Button</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-inverse" type="button">Go!</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Color Picker</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control minicolors" data-defaultValue="#25ad9f">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Disabled</label>
                                    <div class="col-sm-9">
                                        <div class="form-control-material">
                                            <input id="inputDisabled" type="text" class="form-control" placeholder="Disabled input" disabled>
                                            <label for="inputdisabled">Disabled</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group margin-none">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <h4 class="page-section-heading">Select controls</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="form-horizontal" action="">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Select</label>
                                    <div class="col-sm-9">
                                        <select name="select" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                            <option>Garlic</option>
                                            <option>Tomatoes</option>
                                            <option>Onion</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group margin-bottom-none">
                                    <label class="col-sm-3 control-label">Multiple</label>
                                    <div class="col-sm-9">
                                        <select class="selectpicker" multiple data-style="btn-white" title='Choose one of the following...'>
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <h4 class="page-section-heading">Select2 controls</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h5>Basics</h5>
                            <div class="form-group">
                                <select style="width: 100%;" data-toggle="select2">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                            <h5>Multi-Value Select Boxes</h5>
                            <div class="form-group">
                                <select multiple="multiple" style="width: 100%;" data-toggle="select2">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                            <h5>Placeholders</h5>
                            <div class="form-group">
                                <select style="width: 100%;" data-toggle="select2" data-placeholder="Select a State .." data-allow-clear="true">
                                    <option></option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                            <h5>Multiple select</h5>
                            <div class="form-group">
                                <select multiple="multiple" style="width: 100%;" data-toggle="select2" data-placeholder="Select a State .." data-allow-clear="true">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                            <h5>Tagging Support</h5>
                            <div class="form-group">
                                <input type="hidden" data-toggle="select2-tags" data-tags="red,green,blue,brown" style="width: 100%;" value="brown,red,green" />
                            </div>
                            <h5>Disabled Mode</h5>
                            <div class="form-group">
                                <select disabled="disabled" data-toggle="select2" style="width:100%">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                            <h5>API</h5>
                            <div class="form-group">
                                <div class="btn-group btn-group-sm">
                                    <input type="button" data-toggle="select2-enable" data-target="#select2_6_2" class="btn btn-default" value="Enable" />
                                    <input type="button" data-toggle="select2-disable" data-target="#select2_6_2" class="btn btn-default" value="Disable" />
                                </div>
                            </div>
                            <div class="form-group">
                                <select disabled="disabled" multiple="multiple" data-toggle="select2" id="select2_6_2" style="width:100%">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                            <h5>Templating</h5>
                            <div class="form-group">
                                <select style="width: 100%;" id="select2_7">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                    <h4 class="page-section-heading">Basic Checkboxes</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>Supports all of the Bootstrap brand colors: primary, success, info, etc.</p>
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="checkbox">
                                        <input id="checkbox1" type="checkbox" checked>
                                        <label for="checkbox1">Default</label>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox2" type="checkbox" checked>
                                        <label for="checkbox2">Primary</label>
                                    </div>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox5" type="checkbox" checked>
                                        <label for="checkbox5">Warning</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" type="checkbox" checked>
                                        <label for="checkbox3">Success</label>
                                    </div>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox4" type="checkbox" checked>
                                        <label for="checkbox4">Info</label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="checkbox6" type="checkbox" checked>
                                        <label for="checkbox6">Check me out</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="checkbox">
                                        <input id="checkbox9" type="checkbox" disabled="">
                                        <label for="checkbox9">Can't check this</label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox10" type="checkbox" disabled="" checked="">
                                        <label for="checkbox10">This too</label>
                                    </div>
                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="checkbox11" type="checkbox" disabled="" checked="">
                                        <label for="checkbox11">And this</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="page-section-heading">Inline Checkboxes</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="checkbox checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="option1">
                                <label for="inlineCheckbox1">Inline One</label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked="">
                                <label for="inlineCheckbox2">Inline Two</label>
                            </div>
                            <div class="checkbox checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox3" value="option1">
                                <label for="inlineCheckbox3">Inline Three</label>
                            </div>
                        </div>
                    </div>
                    <h4 class="page-section-heading">Circle Checkboxes</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="checkbox checkbox-circle">
                                <input id="checkbox7" type="checkbox" checked>
                                <label for="checkbox7">Simply Rounded</label>
                            </div>
                            <div class="checkbox checkbox-info checkbox-circle">
                                <input id="checkbox8" type="checkbox" checked>
                                <label for="checkbox8">Me too</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                    <h4 class="page-section-heading">Basic Radios</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>Supports all of the Bootstrap brand colors: primary, success, info, etc.</p>
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="radio">
                                        <input type="radio" name="radio1" id="radio11" value="option1" checked>
                                        <label for="radio11">Default</label>
                                    </div>
                                    <div class="radio radio-primary">
                                        <input type="radio" name="radio1" id="radio12" value="option2">
                                        <label for="radio12">Primary</label>
                                    </div>
                                    <div class="radio radio-warning">
                                        <input type="radio" name="radio1" id="radio13" value="option2">
                                        <label for="radio13">Warning</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="radio radio-success">
                                        <input type="radio" name="radio2" id="radio21" value="option1" checked>
                                        <label for="radio21">Success</label>
                                    </div>
                                    <div class="radio radio-info">
                                        <input type="radio" name="radio2" id="radio22" value="option2">
                                        <label for="radio22">Info</label>
                                    </div>
                                    <div class="radio radio-danger">
                                        <input type="radio" name="radio2" id="radio23" value="option3">
                                        <label for="radio23">Danger</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="radio radio-danger">
                                        <input type="radio" name="radio3" id="radio31" value="option1" disabled>
                                        <label for="radio31">Disabled</label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" name="radio3" id="radio32" value="option2" checked disabled>
                                        <label for="radio32">Radio</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="page-section-heading">Inline Radios</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="radio radio-info radio-inline">
                                <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                <label for="inlineRadio1">Inline One</label>
                            </div>
                            <div class="radio radio-inline">
                                <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                <label for="inlineRadio2">Inline Two</label>
                            </div>
                            <div class="radio radio-inline">
                                <input type="radio" id="inlineRadio3" value="option3" name="radioInline">
                                <label for="inlineRadio3">Inline Three</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                    <h4 class="page-section-heading">Sliders</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>Simple and beautiful form slider component with different options. Originally began as a fork of the bootstrap-slider project by Stefan Petre, this is a complete rewrite of the plugin.</p>
                            <input data-slider="formatter" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14" data-slider-handle="square" />
                            <hr/>
                            <input data-slider="default" type="text" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]" data-slider-handle="square" />
                            <hr/>
                            <div class="media slider">
                                <strong id="ex6SliderVal-1" class="pull-right">3</strong>
                                <div class="media-body">
                                    <input data-slider="default" data-on-slide="#ex6SliderVal-1" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-value="3" data-slider-handle="square" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="page-section-heading">Date Pickers</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="datepicker">Datepicker</label>
                                <input id="datepicker" type="text" class="form-control datepicker">
                            </div>
                            <div class="form-group daterangepicker-report" id="reportrange">
                                <label>Date Range Picker:</label>
                                <div class="form-control">
                                    <i class="fa fa-calendar fa-fw"></i>
                                    <span>December 10, 2014 - January 9, 2015</span>
                                    <b class="caret"></b>
                                </div>
                            </div>
                            <div class="form-group margin-none">
                                <label for="reservationtime">Reservation dates:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="reservation" id="reservationtime" class="form-control daterangepicker-reservation" value="07/10/2014 1:00 PM - 07/10/2014 1:30 PM" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="page-section-heading">Validation states</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>Bootstrap includes validation styles for error, warning, and success states on form controls. To use, add .has-warning, .has-error, or .has-success to the parent element. Any .control-label, .form-control, and .help-block within that element will receive the validation styles.</p>
                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess1">Input with success</label>
                                <input type="text" class="form-control" id="inputSuccess1">
                            </div>
                            <div class="form-group has-warning">
                                <label class="control-label" for="inputWarning1">Input with warning</label>
                                <input type="text" class="form-control" id="inputWarning1">
                            </div>
                            <div class="form-group has-error margin-none">
                                <label class="control-label" for="inputError1">Input with error</label>
                                <input type="text" class="form-control" id="inputError1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                    <h4 class="page-section-heading">Input Spinners</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>A mobile and touch friendly input spinner component for Bootstrap 3. It supports the mouse wheel and the up &amp; down keys.</p>
                            <div class="form-group">
                                <label for="touch-spin-1">Example with postfix (large):</label>
                                <input id="touch-spin-1" data-toggle="touch-spin" data-min="0" data-max="100" data-postfix="%" data-step="0.1" data-decimals="2" type="text" value="55" name="demo1" />
                            </div>
                            <div class="form-group">
                                <label for="touch-spin-2">With prefix:</label>
                                <input id="touch-spin-2" data-toggle="touch-spin" data-min="-1000000" data-max="1000000" data-prefix="$" data-step="50" type="text" value="200" name="demo2" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="touch-spin-3">With vertical buttons:</label>
                                <input id="touch-spin-3" data-toggle="touch-spin" data-verticalbuttons="true" type="text" value="3" name="demo3" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <h4 class="text-headline text-light">Corporate</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">About the company</a></li>
                        <li><a href="#">Company offices</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4 class="text-headline text-light">Explore</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Courses</a></li>
                        <li><a href="">Tutors</a></li>
                        <li><a href="">Pricing</a></li>
                        <li><a href="">Become Tutor</a></li>
                        <li><a href="">Sign Up</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h4 class="text-headline text-light">Newsletter</h4>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter email here...">
                            <span class="input-group-btn">
								<button class="btn btn-grey-800" type="button">Subscribe</button>
							  </span>
                        </div>
                    </div>
                    <br/>
                    <p>
                        <a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn btn-pink-500 btn-circle"><i class="fa fa-dribbble"></i></a>
                        <a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a>
                    </p>
                    <p class="text-subhead">
                        &copy; 2015 Learning App by mosaicpro.
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
        <strong>Learning</strong> v1.0.0 &copy; Copyright 2015
    </footer>
    <!-- // Footer -->
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