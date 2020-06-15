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
        <section class="page-section" style="margin-bottom: 60px">
            <div class="container">
                <div class="row">
                    <!-- Post Content Column -->
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <!-- Title -->
                        <h3 class="mt-4">Trending <marquee>
                            United Bravo Launch Ceremony by Live - 2 days ago
                            United Bravo and its prospect of after-sales support - September 7, 2018
                            Government to revive Engineering Development Board - September 7, 2018
                        </marquee></h3>
                        <!-- Author -->
                        <p class="lead">
                            by
                            <a href="#">Scooters</a>
                        </p>
                        <hr>
                        <!-- Date/Time -->
                        <p>Posted on September 9, 2018 at 12:00 PM</p>
                        <hr>
                        <!-- Preview Image -->


                            <div id="myCarousel8" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="images/bravo.jpg">
                                        <div class=" heart-o">
                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                        <div class="carousel-caption">
                                            <h4>Lorem ipsum dolor sit</h4>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. </p>
                                        </div>
                                    </div><!-- End Item -->
                                    <div class="item">
                                        <img src="images/bravo.jpg">
                                        <div class=" heart-o">
                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                        <div class="carousel-caption">
                                            <h4>consetetur sadipscing </h4>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. </p>
                                        </div>
                                    </div><!-- End Item -->
                                    <div class="item">
                                        <img src="images/bravo.jpg">
                                        <div class=" heart-o">
                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                        <div class="carousel-caption">
                                            <h4>tempor invidunt </h4>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                        </div>
                                    </div><!-- End Item -->
                                    <div class="item">
                                        <img src="images/bravo.jpg">
                                        <div class=" heart-o">
                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                        <div class="carousel-caption">
                                            <h4>tempor invidunt ut </h4>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. fa-heart-o</p>
                                        </div>
                                    </div><!-- End Item -->
                                    <div class="item">
                                            <img src="images/bravo.jpg">
                                        <div class=" heart-o">
                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                        <div class="carousel-caption">
                                            <h4>tempor invidunt ut labore et dolore</h4>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. fa-heart-o</p>
                                        </div>
                                    </div><!-- End Item -->
                                </div><!-- End Carousel Inner -->

                                <ul class="list-group col-sm-4">
                                    <li data-target="#myCarousel8" data-slide-to="0" class="list-group-item active"><h4>Lorem ipsum dolor sit </h4></li>
                                    <li data-target="#myCarousel8" data-slide-to="1" class="list-group-item"><h4>consetetur sadipscing elitr, </h4></li>
                                    <li data-target="#myCarousel8" data-slide-to="2" class="list-group-item"><h4>tempor invidunt r invidunt</h4></li>
                                    <li data-target="#myCarousel8" data-slide-to="3" class="list-group-item"><h4>magna aliquyam e</h4></li>
                                    <li data-target="#myCarousel8" data-slide-to="4" class="list-group-item"><h4>tempor inviduntr invidunt </h4></li>
                                </ul>

                                <!-- Controls -->
                                <div class="carousel-controls">
                                    <a class="left carousel-control" href="#myCarousel8" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel8" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>

                            </div><!-- End Carousel -->

                        <hr>
                        <h4>Recent Articles</h4>
                        <div class="col-md-12 article">
                            <img class="pull-left" src="images/img11.jpg">
                            <div class=" heart-o">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <h3>United Bravo Launch Ceremony by PakWheels Live</h3>
                            <h5>2 days ago on Auto Events, Cars in Pakistan, Events, Featured, Pakistan by Web Desk</h5>
                            <p>We are bringing you coverage of United Bravo launch ceremony live from Faletti’s Hotel Lahore. Bravo is arguably one of the most-anticipated cars in Pakistan. Stay tune...</p>
                        </div>
                        <div class="col-md-12 article">
                            <img class="pull-left" src="images/img21.jpg">
                            <div class=" heart-o">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <h3>United Bravo Launch Ceremony by PakWheels Live</h3>
                            <h5>2 days ago on Auto Events, Cars in Pakistan, Events, Featured, Pakistan by Web Desk</h5>
                            <p>We are bringing you coverage of United Bravo launch ceremony live from Faletti’s Hotel Lahore. Bravo is arguably one of the most-anticipated cars in Pakistan. Stay tune...</p>
                        </div>
                        <div class="col-md-12 article">
                            <img class="pull-left" src="images/img31.jpg">
                            <div class=" heart-o">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </div>
                            <h3>United Bravo Launch Ceremony by PakWheels Live</h3>
                            <h5>2 days ago on Auto Events, Cars in Pakistan, Events, Featured, Pakistan by Web Desk</h5>
                            <p>We are bringing you coverage of United Bravo launch ceremony live from Faletti’s Hotel Lahore. Bravo is arguably one of the most-anticipated cars in Pakistan. Stay tune...</p>
                        </div>
                        <!-- Post Content -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
                        <hr>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Sidebar Widgets Column -->
                    <div class="col-md-4 col-sm-4 col-xs-12 sidebar">

                        <!-- Search Widget -->
                        <div class="card my-4">
                            <h5 class="card-header">Search</h5>
                            <div class="card-body">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
                                </div>
                            </div>
                        </div>

                        <!-- Categories Widget -->
                        <div class="card my-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <h5 class="card-header">POPULAR NEWS</h5>
                                        <h5 class="days">Last 7 days</h5>
                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                Pak Suzuki to discontinue Mehran finally!
                                                <small>11,143 views</small></li>

                                                <li>United Bravo Launch Ceremony by PakWheels Live
                                                    <small>10,342 views</small></li>
                                            <li>
                                                United Bravo launched with a price tag 850,000 PKR
                                                <small>10,015 views</small>Web Design
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Side Widget -->
                        <div class="card my-4">
                            <h5 class="card-header days">Side Widget</h5>
                            <div class="card-body">
                                You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                            </div>
                        </div>
                         <div class=" card my-4">
                             <ul class="nav nav-tabs">
                                 <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                                 <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                                 <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                             </ul>

                             <div class="tab-content">
                                 <div id="home" class="tab-pane fade in active">
                                    <ul>
                                        <li> <div class="col-md-3">
                                            <img class="img-responsive" src="images/bravo.jpg">
                                        </div>
                                            <h4>Bravo</h4>
                                            <p>some content in the box here</p>
                                        </li>
                                        <li> <div class="col-md-3">
                                            <img class="img-responsive" src="images/bravo.jpg">
                                        </div>
                                            <h4>Bravo</h4>
                                            <p>some content in the box here</p>
                                        </li>
                                        <li> <div class="col-md-3">
                                            <img class="img-responsive" src="images/bravo.jpg">
                                        </div>
                                            <h4>Bravo</h4>
                                            <p>some content in the box here</p>
                                        </li>
                                        <li> <div class="col-md-3">
                                            <img class="img-responsive" src="images/bravo.jpg">
                                        </div>
                                            <h4>Bravo</h4>
                                            <p>some content in the box here</p>
                                        </li>
                                        <li> <div class="col-md-3">
                                            <img class="img-responsive" src="images/bravo.jpg">
                                        </div>
                                            <h4>Bravo</h4>
                                            <p>some content in the box here</p>
                                        </li>
                                        <li> <div class="col-md-3">
                                            <img class="img-responsive" src="images/bravo.jpg">
                                        </div>
                                            <h4>Bravo</h4>
                                            <p>some content in the box here</p>
                                        </li>
                                        <li> <div class="col-md-3">
                                            <img class="img-responsive" src="images/bravo.jpg">
                                        </div>
                                            <h4>Bravo</h4>
                                            <p>some content in the box here</p>
                                        </li>
                                        <li> <div class="col-md-3">
                                            <img class="img-responsive" src="images/bravo.jpg">
                                        </div>
                                            <h4>Bravo</h4>
                                            <p>some content in the box here</p>
                                        </li>
                                    </ul>

                                 </div>
                                 <div id="menu1" class="tab-pane fade">
                                     <ul>
                                         <li> <div class="col-md-3">
                                             <img class="img-responsive" src="images/bravo.jpg">
                                         </div>
                                             <h4>Bravo</h4>
                                             <p>some content in the box here</p>
                                         </li>
                                         <li> <div class="col-md-3">
                                             <img class="img-responsive" src="images/bravo.jpg">
                                         </div>
                                             <h4>Bravo</h4>
                                             <p>some content in the box here</p>
                                         </li>
                                         <li> <div class="col-md-3">
                                             <img class="img-responsive" src="images/bravo.jpg">
                                         </div>
                                             <h4>Bravo</h4>
                                             <p>some content in the box here</p>
                                         </li>
                                   </ul>
                                 </div>
                                 <div id="menu2" class="tab-pane fade">
                                     <ul>
                                         <li> <div class="col-md-3">
                                             <img class="img-responsive" src="images/bravo.jpg">
                                         </div>
                                             <h4>Bravo</h4>
                                             <p>some content in the box here</p>
                                         </li>
                                         <li> <div class="col-md-3">
                                             <img class="img-responsive" src="images/bravo.jpg">
                                         </div>
                                             <h4>Bravo</h4>
                                             <p>some content in the box here</p>
                                         </li>
                                         <li> <div class="col-md-3">
                                             <img class="img-responsive" src="images/bravo.jpg">
                                         </div>
                                             <h4>Bravo</h4>
                                             <p>some content in the box here</p>
                                         </li>
                                         <li> <div class="col-md-3">
                                             <img class="img-responsive" src="images/bravo.jpg">
                                         </div>
                                             <h4>Bravo</h4>
                                             <p>some content in the box here</p>
                                         </li>
                                     </ul>
                                 </div>
                             </div>

                         </div>
                    </div>

                </div>
                <!-- /.row -->

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

  <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
        <script>
            $(document).ready(function(){

                var clickEvent = false;
                $('#myCarousel8').carousel({
                    interval:   4000
                }).on('click', '.list-group li', function() {
                    clickEvent = true;
                    $('.list-group li').removeClass('active');
                    $(this).addClass('active');
                }).on('slid.bs.carousel', function(e) {
                    if(!clickEvent) {
                        var count = $('.list-group').children().length -1;
                        var current = $('.list-group li.active');
                        current.removeClass('active').next().addClass('active');
                        var id = parseInt(current.data('slide-to'));
                        if(count == id) {
                            $('.list-group li').first().addClass('active');
                        }
                    }
                    clickEvent = false;
                });
            })

            $(window).load(function() {
                var boxheight = $('#myCarousel8 .carousel-inner').innerHeight();
                var itemlength = $('#myCarousel8 .item').length;
                var triggerheight = Math.round(boxheight/itemlength+1);
                $('#myCarousel8 .list-group-item').outerHeight(triggerheight);
            });
        </script>
        </div>
</body>
</html>
