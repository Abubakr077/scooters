<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Scooters</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/bootstrap-range.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head>
<body>
<div class="wraper">
    <div class="menu-bar">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <h1 class="navbar-brand logo"><a href="index.blade.php"><img class="img-responsive"
                                                                                         src="images/wheel.png">
                            </a></h1>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">Used Bikes <span
                                            class="caret"></span> <span class="sr-only">(current)</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="usedbikes.blade.php">used bikes</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>

                                    </ul>
                                </li>

                                <li><a href="newbikes.blade.php">New bikes</a></li>

                                <li><a href="accessories.blade.php">Accessories </a></li>
                                <li><a href="autoparts.html">Auto Parts</a></li>
                                <li><a href="dealer.blade.php">Dealers</a></li>


                                <li><a href="#" class=" dropdown-toggle " data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="rakshaw.blade.php">Rikshaw</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Forum</a></li>
                                    </ul>
                                </li>

                                <li><a href="#" class=" dropdown-toggle add-post" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">Post an add <span
                                        class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="sellbike.blade.php">sell bike</a></li>
                                        <li><a href="addposting.blade.php">Post an add</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" role="button"
                                       aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Signin
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#myModal" role="button"><i
                                                class="fa fa-user"></i> signup</a></li>
                                    </ul>
                                    <div id="myModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="loginbox" class="mainbox">
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading">
                                                                <div class="panel-title">Sign In</div>
                                                                <div style="float:right; font-size: 80%; position: relative; top:-23px">
                                                                    <a href="#">Forgot password?</a></div>
                                                            </div>

                                                            <div style="padding-top:30px" class="panel-body">

                                                                <div style="display:none" id="login-alert"
                                                                     class="alert alert-danger col-sm-12"></div>

                                                                <form id="loginform" class="form-horizontal"
                                                                      role="form">

                                                                    <div style="margin-bottom: 25px"
                                                                         class="input-group">
                                                                        <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-user"></i></span>
                                                                        <input id="login-username" type="text"
                                                                               class="form-control" name="username"
                                                                               value="" placeholder="username or email">
                                                                    </div>

                                                                    <div style="margin-bottom: 25px"
                                                                         class="input-group">
                                                                        <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-lock"></i></span>
                                                                        <input id="login-password" type="password"
                                                                               class="form-control" name="password"
                                                                               placeholder="password">
                                                                    </div>

                                                                    <div class="input-group">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input id="login-remember"
                                                                                       type="checkbox" name="remember"
                                                                                       value="1"> Remember me
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div style="margin-top:10px" class="form-group">
                                                                        <!-- Button -->
                                                                        <div class="col-sm-12 controls">
                                                                            <a id="btn-login" href="#"
                                                                               class="btn btn-primary">Login </a>
                                                                            <a id="btn-fblogin"
                                                                               href="signup-complete.blade.php"
                                                                               class="btn btn-primary">Login with
                                                                                Facebook</a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-md-12 control">
                                                                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                                                                Don't have an account!
                                                                                <a href="#"
                                                                                   onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                                                                    Sign Up Here
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="signupbox" style="display:none;" class="mainbox">
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading">

                                                                <div style=" font-size: 85%; position: relative;"><a
                                                                        id="signinlink" href="#"
                                                                        onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign
                                                                    In</a></div>
                                                            </div>
                                                            <div class="panel-body">
                                                                <form id="signupform" class="form-horizontal"
                                                                      role="form">
                                                                    <div id="signupalert" style="display:none"
                                                                         class="alert alert-danger">
                                                                        <p>Error:</p>
                                                                        <span></span>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="email"
                                                                               class="col-md-3 control-label">Email</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"
                                                                                   name="email"
                                                                                   placeholder="Email Address">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="firstname"
                                                                               class="col-md-3 control-label">First
                                                                            Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"
                                                                                   name="firstname"
                                                                                   placeholder="First Name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="lastname"
                                                                               class="col-md-3 control-label">Last
                                                                            Name</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"
                                                                                   name="lastname"
                                                                                   placeholder="Last Name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="password"
                                                                               class="col-md-3 control-label">Password</label>
                                                                        <div class="col-md-9">
                                                                            <input type="password" class="form-control"
                                                                                   name="passwd" placeholder="Password">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="icode"
                                                                               class="col-md-3 control-label">Invitation
                                                                            Code</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control"
                                                                                   name="icode" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <!-- Button -->
                                                                        <div class="col-md-offset-3 col-md-9">
                                                                            <button id="btn-signup" type="button"
                                                                                    class="btn btn-info"><i
                                                                                    class="icon-hand-right"></i> &nbsp
                                                                                Sign Up
                                                                            </button>
                                                                            <span style="margin:0 8px;">or</span>
                                                                            <button id="btn-fbsignup" type="button"
                                                                                    class="btn btn-primary"><i
                                                                                    class="icon-facebook"></i>   Sign Up
                                                                                with Facebook
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <main class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="result">
                            <h4 class="show">Show Results by:</h4>
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseOneA">
                                                Search Filters
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOneA" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <form>
                                                <div class="form-group col-md-12" style="padding: 0">
                                                    <p> some text here will be added to remove<a class="pull-right" href="#" style="margin-top: -17px;"><i class="fa fa-close"></i> </a></p>
                                                    <p> some text here will be added to remove<a class="pull-right" href="#" style="margin-top: -17px;"><i class="fa fa-close"></i> </a></p>
                                                    <p class="text-center"><a href="#">Clear All </a></p>

                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseOne">
                                                Search by keyword
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <form>
                                                <div class="form-group col-md-12" style="padding: 0">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                </div>
                                                <label style="width: 100%">
                                                    <button type="submit" class="btn btn-default">Search</button>
                                                </label>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseTwo">
                                                Brand
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <select class="form-control">
                                                <option value="">Suzuki</option>
                                                <option value="">Honda</option>
                                                <option value="">Yamaha</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseThree">
                                                Year
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <select class="form-control">
                                                <option value="">2018</option>
                                                <option value="">2017</option>
                                                <option value="">2016</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse41">
                                                Province
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse41" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <select class="form-control">
                                                <option value="">Punjab</option>
                                                <option value="">Sindh</option>
                                                <option value="">Balochistan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse4">
                                                City
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <select class="form-control">
                                                <option value="">Lahore</option>
                                                <option value="">Islamabad</option>
                                                <option value="">Karachi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse412">
                                                Registration City
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse412" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <select class="form-control">
                                                <option value="">Lahore</option>
                                                <option value="">Islamabad</option>
                                                <option value="">Karachi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse42">
                                                Mileage
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse42" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Select A Value"
                                                           class="form-control mileage aft-bootstrap-range"
                                                           readonly="readonly" data-original-title="" title="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Select A Price"
                                                           class="form-control price aft-bootstrap-range"
                                                           readonly="readonly" data-original-title="" title="">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse421">
                                                Engine Type
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse421" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <label><input type="checkbox">Petrol </label>
                                            <label><input type="checkbox">CNG </label>
                                            <label><input type="checkbox">Desel </label>
                                            <label><input type="checkbox">Hybrid </label>
                                            <label><input type="checkbox">LPG </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse52">
                                                Assembley </a>
                                        </h4>
                                    </div>
                                    <div id="collapse52" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <label><input type="checkbox">Imported </label>
                                            <label><input type="checkbox">Local </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse53">
                                                Engine Capacity </a>
                                        </h4>
                                    </div>
                                    <div id="collapse53" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Select A Value"
                                                           class="form-control age aft-bootstrap-range"
                                                           readonly="readonly" data-original-title="" title="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Select A Price"
                                                           class="form-control price aft-bootstrap-range"
                                                           readonly="readonly" data-original-title="" title="">
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse62">
                                                Assembley </a>
                                        </h4>
                                    </div>
                                    <div id="collapse62" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <label><input type="checkbox">Imported </label>
                                            <label><input type="checkbox">Local </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse54">
                                                Body Type </a>
                                        </h4>
                                    </div>
                                    <div id="collapse54" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <label><input type="checkbox">Honda </label>
                                            <label><input type="checkbox">Yamaha </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse55">
                                                Model Category </a>
                                        </h4>
                                    </div>
                                    <div id="collapse55" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <label><input type="checkbox">Small </label>
                                            <label><input type="checkbox">Middle </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse56">
                                                Picture Availability </a>
                                        </h4>
                                    </div>
                                    <div id="collapse56" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <label><input type="checkbox">With Pictures </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse57">
                                                Seller Type </a>
                                        </h4>
                                    </div>
                                    <div id="collapse57" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <label><input type="checkbox">Individuals </label>
                                            <label><input type="checkbox">Dealers </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse58">
                                                In Transit </a>
                                        </h4>
                                    </div>
                                    <div id="collapse58" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <label><input type="checkbox">In Transit </label>
                                            <label><input type="checkbox">Ready to ship </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse59">
                                                Add Type </a>
                                        </h4>
                                    </div>
                                    <div id="collapse59" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <label><input type="checkbox">Featured Adds </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse51">
                                                Price range
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse51" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <select class="form-control">
                                                <option value="">Rs.10,000 - Rs.15,000</option>
                                                <option value="">Rs.15,000 - Rs.20,000</option>
                                                <option value="">Rs.25,000 - Rs.30,000</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse5">
                                                Make
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <select class="form-control">
                                                <option value="">Suzuki</option>
                                                <option value="">Honda</option>
                                                <option value="">Yamaha</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse6">
                                                Power
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <select class="form-control">
                                                <option value="">70cc</option>
                                                <option value="">100cc</option>
                                                <option value="">150cc</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse7">
                                                Color
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse7" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <select class="form-control">
                                                <option value="">Red</option>
                                                <option value="">Black</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse8">
                                                Transmission
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <select class="form-control">
                                                <option value="">Auto</option>
                                                <option value="">Self</option>
                                                <option value="">Manual</option>
                                                <option value="">Modified</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-default" style="margin-top: 15px">Submit</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class=" sec-1">
                            <div class="sort" style="padding: 0">
                                <div class="col-md-12" style="padding-left: 0">
                                    <div class="col-md-2">
                                        <p class="pull-left">Sort By:</p>
                                    </div>
                                    <div class="col-md-10">
                                        <select class="form-control">
                                            <option value="">Updated Date : Recent First</option>
                                            <option value="">Price: Low to High</option>
                                            <option value="">Price: High to Low</option>
                                            <option value="">Model Year: First</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12" style="padding: 0">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#home">List View</a></li>
                                        <li><a data-toggle="tab" href="#menu1">Grid View</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active list-view">
                                            <div class="blog-grid adds-for-posts">
                                                <div class="col-md-3 col-sm-3 col-xs-12">

                                                    <div class=" heart-o">
                                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        <div class=" heart-i">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <h3>Honda cd 70 <span class="pull-right">PKR 58,000</span></h3>

                                                    <ul class="pull-left">
                                                        <li>2018</li>
                                                        <li>1,781 km</li>
                                                        <li>Petrol</li>
                                                        <li>70 cc</li>

                                                    </ul>
                                                    <a href="#" class="btn pull-right">Call Now</a>
                                                </div>
                                            </div>
                                            <div class="blog-grid adds-for-posts">
                                                <div class="col-md-3 col-sm-3 col-xs-12"><img class="img-responsive"
                                                                                              src="images/honda.png">
                                                    <div class=" heart-o">
                                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        <div class=" heart-i">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <h3>Honda cd 70 <span class="pull-right">PKR 58,000</span></h3>

                                                    <ul class="pull-left">
                                                        <li>2018</li>
                                                        <li>1,781 km</li>
                                                        <li>Petrol</li>

                                                        <li>70 cc</li>

                                                    </ul>
                                                    <a href="#" class="btn pull-right">Call Now</a>
                                                </div>
                                            </div>
                                            <div class="blog-grid adds-for-posts">
                                                <div class="col-md-3 col-sm-3 col-xs-12"><img class="img-responsive"
                                                                                              src="images/honda.png">
                                                    <div class=" heart-o">
                                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        <div class=" heart-i">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <h3>Honda cd 70 <span class="pull-right">PKR 58,000</span></h3>

                                                    <ul class="pull-left">
                                                        <li>2018</li>
                                                        <li>1,781 km</li>
                                                        <li>Petrol</li>

                                                        <li>70 cc</li>

                                                    </ul>
                                                    <a href="#" class="btn pull-right">Call Now</a>
                                                </div>
                                            </div>
                                            <div class="blog-grid adds-for-posts">
                                                <div class="col-md-3 col-sm-3 col-xs-12"><img class="img-responsive"
                                                                                              src="images/honda.png">
                                                    <div class=" heart-o">
                                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        <div class=" heart-i">
                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <h3>Honda cd 70 <span class="pull-right">PKR 58,000</span></h3>

                                                    <ul class="pull-left">
                                                        <li>2018</li>
                                                        <li>1,781 km</li>
                                                        <li>Petrol</li>

                                                        <li>70 cc</li>

                                                    </ul>
                                                    <a href="#" class="btn pull-right">Call Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="menu1" class="tab-pane fade">
                                            <div class="blog-grid adds-for-posts grid-view">
                                                <div class="col-md-4 col-sm-8 col-xs-12">
                                                    <div class="border-class">
                                                        <div class="img-box">
                                                            <div class="featured-ribbon featured-ribbon-price">
                                                                Rs.65,000
                                                            </div>
                                                            <div class="img-content img-valign">
                                                                <a href="#"><img alt="New" class="lazy-car-slider pic"
                                                                                 data-original="" rel="nofollow"
                                                                                 src="images/honda.png" title=""
                                                                                 style="display: inline;">
                                                                    <div class=" heart-o">
                                                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                        <div class=" heart-i">
                                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="overlay"></div>
                                                            </div>
                                                        </div>
                                                        <h3>Honda cd 70</h3>
                                                        <ul class="pull-left">
                                                            <li>2018</li>
                                                            <li>1,781 km</li>
                                                            <li>Petrol</li>
                                                            <li>70 cc</li>
                                                        </ul>
                                                        <a href="#" class="btn">Call Now</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-8 col-xs-12">
                                                    <div class="border-class">
                                                        <div class="img-box">

                                                            <div class="featured-ribbon featured-ribbon-price">
                                                                Rs.65,000
                                                            </div>
                                                            <div class="img-content img-valign">
                                                                <a href="#"><img alt="New" class="lazy-car-slider pic"
                                                                                 data-original="" rel="nofollow"
                                                                                 src="images/honda.png" title=""
                                                                                 style="display: inline;">
                                                                    <div class=" heart-o">
                                                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                        <div class=" heart-i">
                                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="overlay"></div>
                                                            </div>

                                                        </div>

                                                        <h3>Honda cd 70</h3>

                                                        <ul class="pull-left">
                                                            <li>2018</li>
                                                            <li>1,781 km</li>
                                                            <li>Petrol</li>
                                                            <li>70 cc</li>
                                                        </ul>
                                                        <a href="#" class="btn">Call Now</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-8 col-xs-12">
                                                    <div class="border-class">
                                                        <div class="img-box">

                                                            <div class="featured-ribbon featured-ribbon-price">
                                                                Rs.65,000
                                                            </div>
                                                            <div class="img-content img-valign">
                                                                <a href="#"><img alt="New" class="lazy-car-slider pic"
                                                                                 data-original="" rel="nofollow"
                                                                                 src="images/honda.png" title=""
                                                                                 style="display: inline;">
                                                                    <div class=" heart-o">
                                                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                        <div class=" heart-i">
                                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="overlay"></div>
                                                            </div>

                                                        </div>

                                                        <h3>Honda cd 70</h3>

                                                        <ul class="pull-left">
                                                            <li>2018</li>
                                                            <li>1,781 km</li>
                                                            <li>Petrol</li>
                                                            <li>70 cc</li>
                                                        </ul>
                                                        <a href="#" class="btn">Call Now</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-8 col-xs-12">
                                                    <div class="border-class">
                                                        <div class="img-box">

                                                            <div class="featured-ribbon featured-ribbon-price">
                                                                Rs.65,000
                                                            </div>
                                                            <div class="img-content img-valign">
                                                                <a href="#"><img alt="New" class="lazy-car-slider pic"
                                                                                 data-original="" rel="nofollow"
                                                                                 src="images/honda.png" title=""
                                                                                 style="display: inline;">
                                                                    <div class=" heart-o">
                                                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                        <div class=" heart-i">
                                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="overlay"></div>
                                                            </div>

                                                        </div>

                                                        <h3>Honda cd 70</h3>

                                                        <ul class="pull-left">
                                                            <li>2018</li>
                                                            <li>1,781 km</li>
                                                            <li>Petrol</li>
                                                            <li>70 cc</li>
                                                        </ul>
                                                        <a href="#" class="btn">Call Now</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-8 col-xs-12">
                                                    <div class="border-class">
                                                        <div class="img-box">

                                                            <div class="featured-ribbon featured-ribbon-price">
                                                                Rs.65,000
                                                            </div>
                                                            <div class="img-content img-valign">
                                                                <a href="#"><img alt="New" class="lazy-car-slider pic"
                                                                                 data-original="" rel="nofollow"
                                                                                 src="images/honda.png" title=""
                                                                                 style="display: inline;">
                                                                    <div class=" heart-o">
                                                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                        <div class=" heart-i">
                                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="overlay"></div>
                                                            </div>

                                                        </div>

                                                        <h3>Honda cd 70</h3>

                                                        <ul class="pull-left">
                                                            <li>2018</li>
                                                            <li>1,781 km</li>
                                                            <li>Petrol</li>
                                                            <li>70 cc</li>
                                                        </ul>
                                                        <a href="#" class="btn">Call Now</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-8 col-xs-12">
                                                    <div class="border-class">
                                                        <div class="img-box">

                                                            <div class="featured-ribbon featured-ribbon-price">
                                                                Rs.65,000
                                                            </div>
                                                            <div class="img-content img-valign">
                                                                <a href="#"><img alt="New" class="lazy-car-slider pic"
                                                                                 data-original="" rel="nofollow"
                                                                                 src="images/honda.png" title=""
                                                                                 style="display: inline;">
                                                                    <div class=" heart-o">
                                                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                        <div class=" heart-i">
                                                                            <a href="#"><i class="fa fa-heart"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="overlay"></div>
                                                            </div>

                                                        </div>

                                                        <h3>Honda cd 70</h3>

                                                        <ul class="pull-left">
                                                            <li>2018</li>
                                                            <li>1,781 km</li>
                                                            <li>Petrol</li>
                                                            <li>70 cc</li>
                                                        </ul>
                                                        <a href="#" class="btn">Call Now</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section get-in-touch">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-8 col-xs-12 col-sm-6 col-xs-12 sec-inner">
                        <h4>COME AND VISIT</h4>
                        <p>1st Floor Royal London Buildings 42-46 Baldwin Street Bristol BS1 1PN</p>

                        <ul class="pull-left">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-8 col-xs-12 col-sm-6 col-xs-12 sec-inner">
                        <h4>GET IN TOUCH</h4>
                        <p>Telephone : +012 345 6789</p>
                        <p>E-mail : noreply@info.com</p>
                        <ul class="pull-left">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-8 col-xs-12 col-sm-12 col-xs-12 sec-inner">
                        <h4>STAY INFORMED</h4>
                        <p>We may send you information about related events, products and services which we
                            information about related believe.</p>
                        <form>
                            <div class="form-group pull-left">
                                <input type="text" class="form-control" id="" placeholder="email address">
                            </div>
                            <label>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </label>

                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <ul class="nomargin footer-links list-unstyled" id="footer-Make">
                            <li><h5>About us </h5></li>
                            <li><a href="#" id="footer_Toyota"
                                   title="Toyota Bikes for Sale">Toyota Bikes for Sale</a></li>
                            <li><a href="#" id="footer_Suzuki"
                                   title="Suzuki Bikes for Sale">Suzuki Bikes for Sale</a></li>
                            <li><a href="#" id="footer_Honda"
                                   title="Honda Bikes for Sale">Honda Bikes for Sale</a></li>

                            <li><a href="#" id="footer_Daihatsu"
                                   title="Daihatsu Bikes for Sale">Daihatsu Bikes for Sale</a></li>
                            <li><a href="#" id="footer_Mitsubishi"
                                   title="Mitsubishi Bikes for Sale">Mitsubishi Bikes for Sale</a></li>

                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <ul class="nomargin footer-links list-unstyled" id="footer-City">
                            <li><h5>About scooter.pk</h5></li>
                            <li><a href="#" id="footer_Lahore"
                                   title="Bikes for Sale in Lahore">Bikes in Lahore</a></li>
                            <li><a href="#" id="footer_Karachi"
                                   title="Bikes for Sale in Karachi">Bikes in Karachi</a></li>
                            <li><a href="#" id="footer_Islamabad"
                                   title="Bikes for Sale in Islamabad">Bikes in Islamabad</a></li>

                            <li><a href="#" id="footer_Gujranwala"
                                   title="Bikes for Sale in Gujranwala">Bikes in Gujranwala</a></li>
                            <li><a href="#" id="footer_Faisalabad"
                                   title="Bikes for Sale in Faisalabad">Bikes in Faisalabad</a></li>

                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <ul class="nomargin footer-links list-unstyled">
                            <li><h5>Our Products</h5></li>

                            <li><a href="#" title="Used Bikes">Used Bikes</a></li>

                            <li><a href="#" title="Used Bikes">Used Bikes</a></li>

                            <li><a href="#" title="New Bikes">New Bikes</a></li>

                            <li><a href="#" rel="nofollow" title="Scooters Autoshow">Autoshow</a></li>

                            <li><a href="#" title="Sitemap">Sitemap</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <ul class="nomargin footer-links list-unstyled">

                            <li><h5>Advertise with us</h5></li>

                            <li><a href="#" rel="nofollow" title="About Scooters.com">About
                                Scooters.com</a></li>

                            <li><a href="#" rel="nofollow" title="Our Products">Our Products</a>
                            </li>

                            <li><a href="#" rel="nofollow" title="Advertise With Us">Advertise
                                With Us</a></li>

                            <li><a href="#" rel="nofollow"
                                   title="How To Pay">How To Pay</a></li>

                            <li><a href="#" rel="nofollow" title="Contact Us">Contact Us</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 footer-social">
                        <h5>Follow Us</h5>
                        <ul class="list-unstyled list-inline networks">
                            <li>
                                <a href="#" class="twitter" rel="nofollow"
                                   target="_blank" title="Follow Us On Twitter"><i
                                        class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="facebook" rel="nofollow"
                                   target="_blank" title="Follow Us On Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="googleplus"
                                   rel="me" target="_blank" title="Follow Us On Google Plus"><i
                                        class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="pinterest" rel="nofollow"
                                   target="_blank" title="Follow Us On Pinterest"><i
                                        class="fa fa-pinterest"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap-range.min.js"></script>
    <script type="text/javascript">
        $('.mileage').bootstrapRange({
            minValues: [500, 1000, 2000, 3000, 4000, 5000],
            maxValues: [1000, 1500, 2000, 3000, 4000, 50000],
            minimumCallback: function (min) {
                console.log(min);
            },
            maximumCallback: function (max) {
                console.log(max);
            }
        });
        $('.price').bootstrapRange({
            minValues: [0, 1000, 2000, 3000],
            maxValues: [0, 1000, 2000, 3000],
            minPlaceholder: 'MIN',
            maxPlaceholder: 'MAX',
            minHintText: "MIN",
            maxHintText: "MAX",
            minimumCallback: function (min) {
                console.log(min);
            },
            maximumCallback: function (max) {
                console.log(max);
            }
        });
    </script>

</div>
</body>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>

</html>
