@extends('layouts/mainlayout')

@section('search')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center order-now">
                    <h1 style="color: #ef4416"> Find Used Bikes in Pakistan</h1>
{{--                    <h2>With thousands of bikes, we have just the right one for you</h2>--}}

                    <form role="form" method="get" action="/bikes/search" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <input type="text" placeholder="Bike model Or Make" class="cities" name="keyword">
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 col-sm-6 col-xs-12">
                            <select  name="brand">
                                <option value=""> --- Please Select Brand --- </option>
                                @foreach((array)config('constants.BRANDS') as $brand)
                                    <option value="{{$brand}}">
                                        {{$brand}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 col-sm-6 col-xs-12">
                            <select  name="city">
                                <option value=""> --- Please Select City --- </option>
                                @foreach((array)config('constants.CITIES') as $city)
                                    <option value="{{$city}}">
                                        {{$city}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 col-sm-6 col-xs-12">
                            <div class="col-md-12 investRange" style="padding: 0">
                                <div class="btn-group">
                                    <button id="min-max-price-range" class="form-control selectpicker select-btn  dropdown-toggle searchParams" href="#" data-toggle="dropdown" tabindex="6">
                                            <span class="filter-option pull-left span_price">
                                                <span id="price_range1"> </span> - <span id="price_range2">Price</span> </span>
                                        <span class="bs-caret" style="float: right;"><span class="caret"></span></span>
                                    </button>

                                    <div class="dropdown-menu ddRange" role="menu" style="width: 295px;">
                                        <div class="rangemenu">
                                            <div class="freeformPrice">
                                            <section class="range-slider">
                                                <span class="rangeValues"></span>
                                                <input value="0" min="0" max="999999" step="1000" type="range" name="minPrice">
                                                <input value="999999" min="0" max="999999" step="5000" type="range" name="maxPrice">
                                            </section>
                                            </div>
                                        </div>
{{--                                        <div class="rangemenu">--}}
{{--                                            <div class="freeformPrice">--}}
{{--                                                <div class="col-md-5" style="padding-right: 0">--}}
{{--                                                    <input name="minPrice" type="text" class="min_input form-control" placeholder="Min Price">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-2 "><span class="arrow"></span></div>--}}
{{--                                                <div class="col-md-5" style="padding-left: 0">--}}
{{--                                                    <input name="maxPrice" type="text" class="max_input form-control" placeholder="Max Price">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-12 text-center clear"><a href="#">Clear</a></div>--}}
{{--                                            </div>--}}

{{--                                            <div class="price_Ranges rangesMax col-md-5">--}}
{{--                                                <a class="max_value" value="" href="javascript:void(0)">Any Max</a>--}}
{{--                                                <a class="max_value" value="15000" href="javascript:void(0)">15000 </a>--}}
{{--                                                <a class="max_value" value="20000" href="javascript:void(0)">20000</a>--}}
{{--                                                <a class="max_value" value="25000" href="javascript:void(0)">25000</a>--}}
{{--                                                <a class="max_value" value="30000" href="javascript:void(0)">30000</a>--}}
{{--                                                <a class="max_value" value="35000" href="javascript:void(0)">35000</a>--}}
{{--                                                <a class="max_value" value="40000" href="javascript:void(0)">40000</a>--}}
{{--                                                <a class="max_value" value="450000" href="javascript:void(0)">45000</a>--}}
{{--                                                <a class="max_value" value="50000" href="javascript:void(0)">50000</a>--}}
{{--                                                <a class="max_value" value="55000" href="javascript:void(0)">55000</a>--}}
{{--                                                <a class="max_value" value="60000" href="javascript:void(0)">60000</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-2"> </div>--}}

{{--                                            <div class="price_Ranges rangesMin col-md-5">--}}
{{--                                                <a class="min_value" value="" href="javascript:void(0)">Any Min</a>--}}
{{--                                                <a class="min_value" value="15000" href="javascript:void(0)">15000 </a>--}}
{{--                                                <a class="min_value" value="20000" href="javascript:void(0)">20000</a>--}}
{{--                                                <a class="min_value" value="25000" href="javascript:void(0)">25000</a>--}}
{{--                                                <a class="min_value" value="30000" href="javascript:void(0)">30000</a>--}}
{{--                                                <a class="min_value" value="35000" href="javascript:void(0)">35000</a>--}}
{{--                                                <a class="min_value" value="40000" href="javascript:void(0)">40000</a>--}}
{{--                                                <a class="min_value" value="450000" href="javascript:void(0)">45000</a>--}}
{{--                                                <a class="min_value" value="50000" href="javascript:void(0)">50000</a>--}}
{{--                                                <a class="min_value" value="55000" href="javascript:void(0)">55000</a>--}}
{{--                                                <a class="min_value" value="60000" href="javascript:void(0)">60000</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}


                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-3 col-xs-12" style="padding: 0">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i> </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <main class="wow fadeInDown page-section" style="visibility: visible; animation-name: fadeInDown;">
        <!--<section class="page-section text-center">-->
        <!--<div class="container">-->
        <!--<div class="row">-->
        <!--<div class="col-md-12">-->

        <!--<h1>Welcome to <span style="color: #ee4416;">Scooters</span></h1>-->
        <!--<p>Our bikeSure experts inspect the bike on over 200 checkpoints so you get complete satisfaction and-->
        <!--peace of mind before buyingyou get complete satisfaction and-->
        <!--peace of mind before buyingyou get complete satisfaction and-->
        <!--peace of mind before buying.</p>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</section>-->


        <!--Featured Used Bikes-->
        <section class="page-section featured">
            <div class="container">
                <h1 class="col-md-12 mb">  <span style="color: #ee4416;">Featured</span> Used Bikes for Sale
                    <small class="pull-right"><a href="/0/bikes">View all</a></small> </h1>

                @foreach($bikes as $item)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="img-box">
                            <div class="featured-ribbon">
                                <i class="fa fa-star"></i>
                                FEATURED
                            </div>
                            <div class=" heart-o">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <div class=" heart-i">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>


                            <div class="featured-ribbon featured-ribbon-price">
                                Rs.{{$item->price}}
                            </div>
                            <div class="img-content img-valign">
                                <a href="{{'/0/bikes/'.$item->id}}"><img alt="New" class="lazy-car-slider pic" data-original=""
                                                 rel="nofollow" src="{{url($item->photos()->first()->getPicture())}}" title=""
                                                 style="display: inline;">
                                </a>
                                <div class="overlay"></div>
                            </div>

                        </div>
                        <div class="recent-vehicle-list-content">
                            <h3 class=" truncate"><a href="{{'/0/bikes/'.$item->id}}" rel="nofollow">{{$item->name}}</a></h3>

                            <div class="generic-grey">{{$item->city}}</div>
                        </div>
                    </div>
                @endforeach


            </div>
        </section>
        <!--sell your bike-->
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12 col-sm-12 col-xs-12 sell-ad-with-panel">
                            <div class="sell-your-ad mb40 well sell-blue clearfix">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <ul class="list-unstyled nomargin">
                                                <li>
                                                    <p class="fs18">
                                                        <i class="fa fa-check-circle-o generic-red point"></i>
                                                        <strong class="title">Post an Ad for Free:</strong>
                                                        Post your bike's ad for free in 30 seconds.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="fs18">
                                                        <i class="fa fa-check-circle-o generic-red point"></i>
                                                        <strong class="title">Thousands of genuine buyers:</strong>
                                                        Get authentic offers from verified buyers.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="fs18">
                                                        <i class="fa fa-check-circle-o generic-red point"></i>
                                                        <strong class="title">Sell Faster:</strong>
                                                        Sell your bike faster than others at a better price.
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-12">
                                            <div class="btn-container">
                                                <a href="/0/bikes/create">Sell Your Bike</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- col-md-10 sell-ad-with-panel -->

                        <!--                    <div class="col-md-3 col-sm-12 col-xs-12">-->
                        <!--                        <div class="well p10 text-center">-->
                        <!--                            <div class="suzuki-certified-logo-lg mt15 mb5">-->
                        <!--                                <img class="img-responsive" src="images/certified.png">-->
                        <!--                            </div>-->
                        <!--                            <a class="learn-more views mt20 mb10 show" href="#">View Certified Bikes</a>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                    </div><!-- row -->
                </div>
            </div>
        </section>
        <!--Popular used bikes-->
        <section class="page-section viewall">
            <div class="container">
                <h1 class="col-md-12 mb">  <span style="color: #ee4416;">Popular</span> Used Bikes
                    <small class="pull-right"><a href="/0/bikes">View all</a></small> </h1>

                @foreach($bikes as $item)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="img-box">
                        <div class="featured-ribbon">
                            <i class="fa fa-star"></i>
                            Popular
                        </div>
                        <div class=" heart-o">
                            <a href="#"><i class="fa fa-heart-o"></i></a>
                            <div class=" heart-i">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="featured-ribbon featured-ribbon-price">
                            Rs.{{$item->price}}
                        </div>
                        <div class="img-content img-valign">
                            <a href="/0/bikes/{{$item->id}}"><img alt="New" class="lazy-car-slider pic" data-original="" rel="nofollow" src="{{url($item->photos()->first()->getPicture())}}" title="" style="display: inline;">
                            </a>
                            <div class="overlay"></div>
                        </div>

                    </div>
                    <div class="recent-vehicle-list-content">
                        <h3 class="nomargin truncate"><a href="#" rel="nofollow">{{$item->name}}</a></h3>

                        <div class="generic-grey">{{$item->city}}</div>
                    </div>
                </div>
                @endforeach

            </div>
        </section>

        <!--used bikes bt city-->
        <section class="page-section used-bikes">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-left mb" style="padding-left: 15px"> <span style="color: #ee4416;">Used</span> bikes by City</h1>

                        <div class="col-md-3 col-sm-6 col-xs-6 city">
                            <div class="pull-left">
                                <a class="lhr" href="/bikes/search?city=Lahore"><img src="images/lhr.jpg"> </a></div>
                            <div class="pull-left">
                                <h3>Lahore</h3>
                                <p>12000+ Used Bikes</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 city">
                            <div class="pull-left">
                                <a class="lhr khi" href="/bikes/search?city=Karachi"><img src="images/khi.jpg"></a></div>
                            <div class="pull-left">
                                <h3>karachi</h3>
                                <p>12000+ Used Bikes</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 city">
                            <div class="pull-left">
                                <a class="lhr isb" href="/bikes/search?city=Islamabad"><img src="images/isb.jpg"></a></div>
                            <div class="pull-left">
                                <h3>Islamabad</h3>
                                <p>12000+ Used Bikes</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 city">
                            <div class="pull-left">
                                <a class="lhr isb" href="/bikes/search?city=Peshawer"><img src="images/peshawer.jpg"></a></div>
                            <div class="pull-left">
                                <h3> Peshawer</h3>
                                <p>12000+ Used Bikes</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-6 city">
                            <div class="pull-left">
                                <a class="lhr" href="/bikes/search?city=Faislabad"><img src="images/multan.jpg"></a></div>
                            <div class="pull-left">
                                <h3> Faislabad</h3>
                                <p>12000+ Used Bikes</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 city">
                            <div class="pull-left">
                                <a class="lhr khi" href="/bikes/search?city=Rawalpindi"><img src="images/bwp.jpg"></a></div>
                            <div class="pull-left">
                                <h3> Rawalpindi</h3>
                                <p>12000+ Used Bikes</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 city">
                            <div class="pull-left">
                                <a class="lhr isb" href="/bikes/search?city=Gujranwala"><img src="images/gnw.jpg"></a></div>
                            <div class="pull-left">
                                <h3> GNW</h3>
                                <p>12000+ Used Bikes</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 city">
                            <div class="pull-left">
                                <a class="lhr" href="/bikes/search?city=Sargodha"><img src="images/sialkot.jpg"></a></div>
                            <div class="pull-left">
                                <h3> Sargodha</h3>
                                <p>12000+ Used Bikes</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 city">
                            <div class="pull-left">
                                <a class="lhr khi" href="/bikes/search?city=Sialkot"><img src="images/sukk.jpg"></a></div>
                            <div class="pull-left">
                                <h3> Sialkot</h3>
                                <p>12000+ Used Bikes</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 city">
                            <div class="pull-left">
                                <a class="lhr khi" href="/bikes/search?city=Larkana"><img src="images/lhr.jpg"></a></div>
                            <div class="pull-left">
                                <h3> Larkana</h3>
                                <p>12000+ Used Bikes</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 city">
                            <div class="pull-left">
                                <a class="lhr isb" href="/bikes/search?city=Quetta"><img src="images/sargodha.jpg"></a></div>
                            <div class="pull-left">
                                <h3> Quetta</h3>
                                <p>12000+ Used Bikes</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 city">
                            <div class="pull-left">
                                <a class="lhr" href="/bikes/search?city=Bahawalpur"><img src="images/isb.jpg"></a></div>
                            <div class="pull-left">
                                <h3> Bahawalpur</h3>
                                <p>12000+ Used Bikes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Featured New Bikes-->
        <section class="page-section viewall">
            <div class="container">
                <h1 class="col-md-12 mb">  <span style="color: #ee4416;">Featured</span> New Bikes
                    <small class="pull-right"><a href="/0/bikes">View all</a></small> </h1>

                @foreach($bikes as $item)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="img-box">
                            <div class="featured-ribbon">
                                <i class="fa fa-star"></i>
                                FEATURED
                            </div>
                            <div class=" heart-o">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <div class=" heart-i">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>


                            <div class="featured-ribbon featured-ribbon-price">
                                Rs.{{$item->price}}
                            </div>
                            <div class="img-content img-valign">
                                <a href="{{'/0/bikes/'.$item->id}}"><img alt="New" class="lazy-car-slider pic" data-original=""
                                                                         rel="nofollow" src="{{url($item->photos()->first()->getPicture())}}" title=""
                                                                         style="display: inline;">
                                </a>
                                <div class="overlay"></div>
                            </div>

                        </div>
                        <div class="recent-vehicle-list-content">
                            <h3 class=" truncate"><a href="{{'/0/bikes/'.$item->id}}" rel="nofollow">{{$item->name}}</a></h3>

                            <div class="generic-grey">{{$item->city}}</div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>

        <!--New Bikes By Make-->
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-left mb" style="padding-left: 0; margin-left: 15px"> <span style="color: #ee4416;">New</span> Bikes by Make</h1>
                        <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <ul class="make-list list-unstyled">
                                        <li class="heading">
                                            <a href="/bikes/search?brand=Hero" id="amk_toyota4" title="Toyota Bikes in Pakistan">
                                                <div class="pw-make-80 toyota"></div>
                                                <h3 class="nomargin">Hero</h3>

                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="make-list list-unstyled">
                                        <li class="heading">
                                            <a href="/bikes/search?brand=Honda" id="amk_honda1" title="Honda Bikes in Pakistan">
                                                <div class="pw-make-80 honda"></div>
                                                <h3 class="nomargin">Honda</h3>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="make-list list-unstyled">
                                        <li class="heading">
                                            <a href="/bikes/search?brand=Suzuki" id="amk_suzuki2" title="Suzuki Bikes in Pakistan">
                                                <div class="pw-make-80 suzuki"></div>
                                                <h3 class="nomargin">Suzuki</h3>

                                            </a>
                                        </li>

                                    </ul>
                                    <ul class="make-list list-unstyled">
                                        <li class="heading">
                                            <a href="/bikes/search?brand=Yamaha" id="amk_bmw3" title="BMW Bikes in Pakistan">
                                                <div class="pw-make-80 yamaha"></div>
                                                <h3 class="nomargin">Yamaha</h3>

                                            </a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="item">
                                    <ul class="make-list list-unstyled">
                                        <li class="heading">
                                            <a href="/bikes/search?brand=Super+Power" id="amk_toyota5" title="Toyota Bikes in Pakistan">
                                                <div class="pw-make-80 toyota"></div>
                                                <h3 class="nomargin">Super Power</h3>

                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="make-list list-unstyled">
                                        <li class="heading">
                                            <a href="/bikes/search?brand=United" id="amk_honda6" title="Honda Bikes in Pakistan">
                                                <div class="pw-make-80 honda"></div>
                                                <h3 class="nomargin">United</h3>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="make-list list-unstyled">
                                        <li class="heading">
                                            <a href="/bikes/search?brand=Unique" id="amk_suzuki7" title="Suzuki Bikes in Pakistan">
                                                <div class="pw-make-80 suzuki"></div>
                                                <h3 class="nomargin">Unique</h3>

                                            </a>
                                        </li>

                                    </ul>
                                    <ul class="make-list list-unstyled">
                                        <li class="heading">
                                            <a href="/bikes/search?brand=Kawasaki" id="amk_bmw8" title="BMW Bikes in Pakistan">
                                                <div class="pw-make-80 yamaha"></div>
                                                <h3 class="nomargin">Kawasaki</h3>

                                            </a>
                                        </li>

                                    </ul>
                                </div>

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel3" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel3" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- container -->
        </section>

        <!--coming soon-->
        <!--        <section class="page-section viewall">-->
        <!--            <div class="container">-->
        <!--                <h1 class="col-md-12 mb">  <span style="color: #ee4416;">Coming </span>Soon-->
        <!--                    <small class="pull-right"><a href="viewall.blade.php">View all Popular Bikes</a></small> </h1>-->

        <!--                <div id="myCarousel4" class="carousel slide" data-ride="carousel">-->
        <!--                    &lt;!&ndash; Indicators &ndash;&gt;-->
        <!--                    <ol class="carousel-indicators">-->
        <!--                        <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>-->
        <!--                        <li data-target="#myCarousel4" data-slide-to="1"></li>-->
        <!--                        <li data-target="#myCarousel4" data-slide-to="2"></li>-->
        <!--                    </ol>-->

        <!--                    &lt;!&ndash; Wrapper for slides &ndash;&gt;-->
        <!--                    <div class="carousel-inner">-->
        <!--                        <div class="item active">-->
        <!--                            <div class="col-md-4 col-sm-4 col-xs-6">-->
        <!--                                <img class="img-responsive" src="images/bike1.jpg">-->
        <!--                                <h3 class="nomargin">Bike</h3>-->
        <!--                            </div>-->
        <!--                            <div class="col-md-4 col-sm-4 col-xs-6">-->
        <!--                                <img class="img-responsive" src="images/bike2.jpg">-->
        <!--                                <h3 class="nomargin">Bike</h3>-->
        <!--                            </div>-->
        <!--                            <div class="col-md-4 col-sm-4 col-xs-6">-->
        <!--                                <img class="img-responsive" src="images/bike3.jpg">-->
        <!--                                <h3 class="nomargin">Bike</h3>-->
        <!--                            </div>-->

        <!--                        </div>-->
        <!--                        <div class="item">-->
        <!--                            <div class="col-md-4 col-sm-4 col-xs-6">-->
        <!--                                <img class="img-responsive" src="images/bike1.jpg">-->
        <!--                                <h3 class="nomargin">Bike</h3>-->
        <!--                            </div>-->
        <!--                            <div class="col-md-4 col-sm-4 col-xs-6">-->
        <!--                                <img class="img-responsive" src="images/bike2.jpg">-->
        <!--                                <h3 class="nomargin">Bike</h3>-->
        <!--                            </div>-->
        <!--                            <div class="col-md-4 col-sm-4 col-xs-6">-->
        <!--                                <img class="img-responsive" src="images/bike3.jpg">-->
        <!--                                <h3 class="nomargin">Bike</h3>-->
        <!--                            </div>-->

        <!--                        </div>-->
        <!--                        <div class="item">-->
        <!--                            <div class="col-md-4 col-sm-4 col-xs-6">-->
        <!--                                <img class="img-responsive" src="images/bike1.jpg">-->
        <!--                                <h3 class="nomargin">Bike</h3>-->
        <!--                            </div>-->
        <!--                            <div class="col-md-4 col-sm-4 col-xs-6">-->
        <!--                                <img class="img-responsive" src="images/bike2.jpg">-->
        <!--                                <h3 class="nomargin">Bike</h3>-->
        <!--                            </div>-->
        <!--                            <div class="col-md-4 col-sm-4 col-xs-6">-->
        <!--                                <img class="img-responsive" src="images/bike3.jpg">-->
        <!--                                <h3 class="nomargin">Bike</h3>-->
        <!--                            </div>-->

        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->

        <!--            </div>-->
        <!--        </section>-->

        <!--imported bikes-->
        <section class="page-section viewall">
            <div class="container">
                <h1 class="col-md-12 mb">  <span style="color: #ee4416;">Imported</span> Bikes
                    <small class="pull-right"><a href="/0/bikes">View all</a></small> </h1>

                <div id="myCarousel4" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel4" data-slide-to="1"></li>
                        <li data-target="#myCarousel4" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <img class="img-responsive" src="images/bike1.jpg">
                                <h3 class="nomargin">Bike</h3>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <img class="img-responsive" src="images/bike2.jpg">
                                <h3 class="nomargin">Bike</h3>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <img class="img-responsive" src="images/bike3.jpg">
                                <h3 class="nomargin">Bike</h3>
                            </div>

                        </div>
                        <div class="item">
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <img class="img-responsive" src="images/bike1.jpg">
                                <h3 class="nomargin">Bike</h3>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <img class="img-responsive" src="images/bike2.jpg">
                                <h3 class="nomargin">Bike</h3>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <img class="img-responsive" src="images/bike3.jpg">
                                <h3 class="nomargin">Bike</h3>
                            </div>

                        </div>
                        <div class="item">
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <img class="img-responsive" src="images/bike1.jpg">
                                <h3 class="nomargin">Bike</h3>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <img class="img-responsive" src="images/bike2.jpg">
                                <h3 class="nomargin">Bike</h3>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <img class="img-responsive" src="images/bike3.jpg">
                                <h3 class="nomargin">Bike</h3>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--Bike comparison-->
        <!--        <section class="page-section comparison">-->
        <!--            <div class="container">-->
        <!--                <div class="row">-->
        <!--                    <div class="col-md-12">-->
        <!--                        <h1 class="text-left mb" style="margin-left: 15px"> <span style="color: #ee4416;">Bike</span> Comparison</h1>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-8 col-md-offset-2 bike-comparison">-->
        <!--                        <div class="col-md-5 col-sm-6 col-xs-5">-->
        <!--                            <a href="#"><img class="img-responsive" src="images/bike1.jpg"></a>-->
        <!--                            <h3>Bike1</h3>-->
        <!--                        </div>-->
        <!--                        <div class="car-view-vs">VS</div>-->
        <!--                        <div class="col-md-5 col-sm-6 col-xs-5">-->
        <!--                            <a href="#"><img class="img-responsive" src="images/bike2.jpg"></a>-->
        <!--                            <h3>Bike2</h3>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </section>-->

        <!--Accessories-->
        <section class="page-section viewall accessories">
            <div class="container">
                <h1 class="col-md-12 mb">  <span style="color: #ee4416;">Accessories</span> By Category
                    <small class="pull-right"><a href="/0/accessories">View all</a></small> </h1>
                <div class="row">
                    @foreach($accessories as $item)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="img-box">
                                <div class="featured-ribbon">
                                    <i class="fa fa-star"></i>
                                    FEATURED
                                </div>
                                <div class=" heart-o">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                    <div class=" heart-i">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class=" heart-o">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                    <div class=" heart-i">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="featured-ribbon featured-ribbon-price">
                                    Rs.{{$item->price}}
                                </div>
                                <div class="img-content img-valign">
                                    <a href="/0/accessories/{{$item->id}}"><img alt="New" class="lazy-car-slider pic" data-original="" rel="nofollow" src="{{url($item->photos()->first()->getPicture())}}" title="" style="display: inline;">
                                    </a>
                                    <div class="overlay"></div>
                                </div>

                            </div>
                            <div class="recent-vehicle-list-content">
                                <h3 class="nomargin truncate"><a href="/0/accessories" rel="nofollow">{{$item->name}}</a></h3>

                                <div class="generic-grey">{{$item->city}}</div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>

        @include('layouts.footer')
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script>
        $('.dropdown-menu.ddRange')
            .click(function(e) {
                e.stopPropagation();
            });

        function disableDropDownRangeOptions(max_values, minValue) {
            if (max_values) {
                max_values.each(function() {
                    var maxValue = $(this).attr("value");

                    if (parseInt(maxValue) < parseInt(minValue)) {
                        $(this).addClass('disabled');
                    } else {
                        $(this).removeClass('disabled');
                    }
                });
            }
        }

        function setuinvestRangeDropDownList(min_values, max_values, min_input, max_input, clearLink, dropDownControl) {
            min_values.click(function() {
                var minValue = $(this).attr('value');
                min_input.val(minValue);
                document.getElementById('price_range1').innerHTML = minValue;

                disableDropDownRangeOptions(max_values, minValue);

                validateDropDownInputs();
            });

            max_values.click(function() {
                var maxValue = $(this).attr('value');
                max_input.val(maxValue);
                document.getElementById('price_range2').innerHTML = maxValue;

                toggleDropDown();
            });

            clearLink.click(function() {
                min_input.val('');
                max_input.val('');

                disableDropDownRangeOptions(max_values);

                validateDropDownInputs();
            });

            min_input.on('input',
                function() {
                    var minValue = min_input.val();

                    disableDropDownRangeOptions(max_values, minValue);
                    validateDropDownInputs();
                });

            max_input.on('input', validateDropDownInputs);

            max_input.blur('input',
                function() {
                    toggleDropDown();
                });

            function validateDropDownInputs() {
                var minValue = parseInt(min_input.val());
                var maxValue = parseInt(max_input.val());

                if (maxValue > 0 && minValue > 0 && maxValue < minValue) {
                    min_input.addClass('inputError');
                    max_input.addClass('inputError');

                    return false;
                } else {
                    min_input.removeClass('inputError');
                    max_input.removeClass('inputError');

                    return true;
                }
            }

            function toggleDropDown() {
                if (validateDropDownInputs() &&
                    parseInt(min_input.val()) > 0 &&
                    parseInt(max_input.val()) > 0) {

                    // auto close if two values are valid
                    dropDownControl.dropdown('toggle');
                }
            }
        }

        setuinvestRangeDropDownList(
            $('.investRange .min_value'),
            $('.investRange .max_value'),
            $('.investRange .freeformPrice .min_input'),
            $('.investRange .freeformPrice .max_input'),
            $('.investRange .btnClear'),
            $('.investRange .dropdown-toggle'));

    </script>
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
    <script>
        function getVals(){
            // Get slider values
            var parent = this.parentNode;
            var slides = parent.getElementsByTagName("input");
            var slide1 = parseFloat( slides[0].value );
            var slide2 = parseFloat( slides[1].value );
            // Neither slider will clip the other, so make sure we determine which is larger
            if( slide1 > slide2 ){ var tmp = slide2; slide2 = slide1; slide1 = tmp; }

            var displayElement = parent.getElementsByClassName("rangeValues")[0];
            displayElement.innerHTML = "RS. " + slide1 + " - Rs." + slide2 + "";
            document.getElementById('price_range1').innerHTML = "RS. " + slide1;
            document.getElementById('price_range2').innerHTML =  " Rs. " + slide2 + " Price";
        }

        window.onload = function(){
            // Initialize Sliders
            var sliderSections = document.getElementsByClassName("range-slider");
            for( var x = 0; x < sliderSections.length; x++ ){
                var sliders = sliderSections[x].getElementsByTagName("input");
                for( var y = 0; y < sliders.length; y++ ){
                    if( sliders[y].type ==="range" ){
                        sliders[y].oninput = getVals;
                        // Manually trigger event first time to display values
                        sliders[y].oninput();
                    }
                }
            }
        }
    </script>
@endsection
