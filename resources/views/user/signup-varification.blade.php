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
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head>
<body>
<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
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
                                    <li><a href="autoparts.blade.php">Auto Parts</a></li>
                                    <li><a href="dealer.blade.php">Dealers</a></li>


                                    <li><a href="#" class=" dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="rakshaw.blade.php">Rikshaw</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Forum</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#" class=" dropdown-toggle add-post" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Post an add <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="sellbike.blade.php">sell bike</a></li>
                                            <li><a href="addposting.blade.php">Post an add</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Signin <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" data-toggle="modal" data-target="#myModal"  role="button"><i class="fa fa-user"></i> signup</a></li>
                                        </ul>
                                        <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="loginbox" class="mainbox">
                                                            <div class="panel panel-info" >
                                                                <div class="panel-heading">
                                                                    <div class="panel-title">Sign In</div>
                                                                    <div style="float:right; font-size: 80%; position: relative; top:-23px"><a href="#">Forgot password?</a></div>
                                                                </div>

                                                                <div style="padding-top:30px" class="panel-body" >

                                                                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                                                                    <form id="loginform" class="form-horizontal" role="form">

                                                                        <div style="margin-bottom: 25px" class="input-group">
                                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
                                                                        </div>

                                                                        <div style="margin-bottom: 25px" class="input-group">
                                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                                                        </div>

                                                                        <div class="input-group">
                                                                            <div class="checkbox">
                                                                                <label>
                                                                                    <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div style="margin-top:10px" class="form-group">
                                                                            <!-- Button -->
                                                                            <div class="col-sm-12 controls">
                                                                                <a id="btn-login" href="#" class="btn btn-primary">Login  </a>
                                                                                <a id="btn-fblogin" href="signup-complete.blade.php" class="btn btn-primary">Login with Facebook</a>

                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="col-md-12 control">
                                                                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                                                                    Don't have an account!
                                                                                    <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
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

                                                                    <div style=" font-size: 85%; position: relative;"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                                                                </div>
                                                                <div class="panel-body" >
                                                                    <form id="signupform" class="form-horizontal" role="form">
                                                                        <div id="signupalert" style="display:none" class="alert alert-danger">
                                                                            <p>Error:</p>
                                                                            <span></span>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="email" class="col-md-3 control-label">Email</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" class="form-control" name="email" placeholder="Email Address">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="firstname" class="col-md-3 control-label">First Name</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="password" class="col-md-3 control-label">Password</label>
                                                                            <div class="col-md-9">
                                                                                <input type="password" class="form-control" name="passwd" placeholder="Password">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" class="form-control" name="icode" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <!-- Button -->
                                                                            <div class="col-md-offset-3 col-md-9">
                                                                                <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                                                                <span style="margin:0 8px;">or</span>
                                                                                <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
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
                    <div class="container sec-1">
                        <div class="row">
                            <div class="col-md-12">
                            <h2>Thank you for signing up</h2>
                            <p>An email has been sent to info@scooters.com for varification of your account</p>
                                <a class="btn btn-default" style="width: 30%; margin: 20px auto; float: none; display: block;" href="index.blade.php">Back To Home Page</a>
                        </div>
                        </div>
                    </div>
                </section>

            </main>

  <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
        </div>
<script>
    // ===== Scroll to Top ====
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200);   // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, 500);
    });
</script>
</body>
</html>
