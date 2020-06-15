@extends('layouts/layout')
@section('content')
    <main class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
        <section class="page-section profile">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="col-md-12">
                            <ul class="pull-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false">Manage adds<span
                                            class="caret"></span> <span class="sr-only">(current)</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">All Ads (0)</a></li>
                                        <li><a href="#">Current Ads (0)</a></li>
                                        <li><a href="#">Expired Ads (0)</a></li>
                                        <li><a href="#">Pending Ads (0)</a></li>
                                        <li><a href="#">All Ads (0)</a></li>
                                    </ul>
                                </li>
                                <li><a href="message.blade.php">Messages</a></li>
                                <li><a href="search-alerts.blade.php">Search alerts</a></li>
                                <li><a href="profile-settings.blade.php">Profile settings</a></li>
                                <li><a href="viewprofile.blade.php">View my full profile</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 col-sm-offset-0 col-xs-offset-0">
                            <div class="col-md-12">
                                <h2><figure><img src="images/news2.jpg"> </figure> <span>User Profile</span></h2>
                            </div>
                            <form>
                                <div class="form-row ">
                                    <input type="text" class="form-control" name="name" placeholder="First Name" value="">
                                </div>
                                <div class="form-row ">
                                    <input type="text" class="form-control" name="" placeholder="Last Name" value="">
                                </div>

                                <div class="form-row row">
                                    <div class="col-md-6">
                                        <select class="form-control">
                                            <option>City</option>
                                            <option>Lahore</option>
                                            <option>Karachi</option>
                                            <option>Islamabad</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="" placeholder="City Name" value="">
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <input type="text" class="form-control" name="" placeholder="Province" value="">
                                </div>
                                <div class="form-row ">
                                    <input type="text" class="form-control" name="" placeholder="Home address" value="">
                                </div>
                                <div class="form-row ">
                                    <input type="text" class="form-control" placeholder="Email" value="">
                                </div>
                                <div class="form-row ">
                                    <input type="password" class="form-control" placeholder="Password" value="">
                                </div>
                                <div class="form-row ">
                                    <input type="password" class="form-control" placeholder="Retype Password" value="">
                                </div>

                                <div class="form-row ">
                                    <a href="#" class="btn btn-default">Submit</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        @include('layouts.footer')
    </main>
@endsection
