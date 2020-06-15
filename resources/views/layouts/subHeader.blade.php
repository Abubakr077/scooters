<ul class="nav navbar-nav">
    <li><a href="/0/bikes">Used Bikes</a></li>
    <li ><a class="{{ (request()->is('bikes')) ? 'active' : '' }}" href="/0/bikes">New Bikes</a></li>

    <li ><a class="{{ (request()->is('accessories')) ? 'active' : '' }}" href="/0/accessories">Accessories </a></li>
    <li ><a  href="/0/accessories">Auto Parts</a></li>

    <!--                                    <li class="dropdown">-->
    <!--                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"-->
    <!--                                           aria-haspopup="true" aria-expanded="false">Dealers<span-->
    <!--                                                class="caret"></span> <span class="sr-only">(current)</span></a>-->
    <!--                                        <ul class="dropdown-menu">-->
    <!--                                            <li><a href="#">Trusted Dealers</a></li>-->

    <!--                                        </ul>-->
    <!--                                    </li>-->

    <!--                                    <li><a href="#" class=" dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>-->
    <!--                                        <ul class="dropdown-menu">-->
    <!--                                            <li><a href="rakshaw.blade.php">Rikshaw</a></li>-->
    <!--                                            <li><a href="blog.blade.php">Blog</a></li>-->
    <!--                                            <li><a href="#">Forum</a></li>-->
    <!--                                        </ul>-->
    <!--                                    </li>-->

    <li><a href="#" class=" dropdown-toggle add-post" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Post an add <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li class="{{ (request()->is('/bikes/create')) ? 'active' : '' }}"><a href="/0/bikes/create">Sell bike</a></li>
            <li><a href="/0/accessories/create">Post an add</a></li>
        </ul>
    </li>
    @if (auth()->guest())
        <li>
            <a href="#" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Guest <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#" data-toggle="modal" data-target="#myModal"  role="button" onClick="$('#signupbox').hide(); $('#loginbox').show()"><i class="fa fa-user"></i> signin</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal"  role="button" onClick="$('#loginbox').hide(); $('#signupbox').show()"><i class="fa fa-user"></i> signup</a></li>
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
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div style="margin-bottom: 25px" class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input  id="email" type="email" class="form-control" name="email" value="" placeholder="email">
                                            </div>

                                            <div style="margin-bottom: 25px" class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input  id="password"  type="password" class="form-control" name="password" placeholder="password">
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
                                                    <button id="btn-login" type="submit" class="btn btn-primary">Login  </button>
                                                    <a id="btn-fblogin" href="signup-complete.html" class="btn btn-primary">Login with Facebook</a>
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

                                        <div style=" font-size: 85%; position: relative;"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign Up</a></div>
                                    </div>
                                    <div class="panel-body" >
                                        <form class="form-horizontal" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                            @csrf


                                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                                <p>Error:</p>
                                                <span></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="email" class="col-md-3 control-label">Email</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="firstname" class="col-md-3 control-label">Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="name" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="col-md-3 control-label">Password</label>
                                                <div class="col-md-9">
                                                    <input type="password" id="password" class="form-control" placeholder="Password" name="password" required autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="col-md-3 control-label">Confirm Password</label>
                                                <div class="col-md-9">
                                                    <input type="password" id="password" class="form-control" placeholder="Password" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="col-md-3 control-label">Phone</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="phone" class="form-control" placeholder="Phone" name="phone" required autocomplete="phone">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- Button -->
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button id="btn-signup" type="submit" value="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
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
    @else
        <li>
            <a href="#" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/profile">Profile</a></li>
                <li ><a  href="/1/cart">Show Cart</a></li>
                <li ><a  href="{{'/'.auth()->user()->id.'/orders'}}">Orders History</a></li>
                <li><a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-user"></i> {{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    @endif

</ul>
