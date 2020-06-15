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
                            <h2>Latest News</h2>
                            <p>See who's selling in your area. Find a bike close to home.</p>
                        </div>
                        </div>
                    </div>

                    <div class="container sec-inner">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog-grid">
                                    <div class="col-md-5 col-sm-5 col-xs-12" style="padding: 0"><img class="img-responsive" src="images/news1.jpg"></div>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <p><i class="fa fa-user"></i> &nbsp; Admin </p>
                                        <h2>Need something ?</h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the </p>
                                        <ul class="pull-left">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                        <small class="pull-right">Dated: July 15,218</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-grid">
                                    <div class="col-md-5 col-sm-5 col-xs-12" style="padding: 0"><img class="img-responsive" src="images/news2.jpg"></div>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <p><i class="fa fa-user"></i> &nbsp; Admin </p>
                                        <h2>Need something ?</h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the </p>
                                        <ul class="pull-left">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                        <small class="pull-right">Dated: July 15,218</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-grid">
                                    <div class="col-md-5 col-sm-5 col-xs-12" style="padding: 0"><img class="img-responsive" src="images/news3.jpg"></div>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <p><i class="fa fa-user"></i> &nbsp; Admin </p>
                                        <h2>Need something ?</h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the </p>
                                        <ul class="pull-left">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                        <small class="pull-right">Dated: July 15,218</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-grid">
                                    <div class="col-md-5 col-sm-5 col-xs-12" style="padding: 0"><img class="img-responsive" src="images/news1.jpg"></div>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <p><i class="fa fa-user"></i> &nbsp; Admin </p>
                                        <h2>Need something ?</h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the </p>
                                        <ul class="pull-left">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                        <small class="pull-right">Dated: July 15,218</small>
                                    </div>
                                </div>
                            </div>
                        </div><!-- row -->
                    </div>
                </section>

                <section class="page-section testimonial-home" style="background: #dfdfeb">
                    <div class="container">
                        <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <blockquote>
                                        <i class="fa fa-quote-left"></i>
                                        <p>I thought I would never be able to find a good vehicle. Anyhow I took a look at the bikes posted by.
                                        I was looking for a bike due to some personal and domestic issues.
                                            I found a bike.</p>

                                        <h3> Daniel Croft</h3>

                                    </blockquote>
                                </div>
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                <img class="img-responsive" src="images/img-a.jpg">
                            </div>
                            </div>

                    </div>
                </section>
                <section class="page-section get-in-touch">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12 sec-inner">
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
                            <div class="col-md-4 col-sm-6 col-xs-12 sec-inner">
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
                            <div class="col-md-4 col-sm-12 col-xs-12 sec-inner">
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
