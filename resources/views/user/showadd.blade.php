@extends('layouts/layout')
@section('content')

    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/jquery.flexslider.js')}}"></script>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
        });
    </script>
    <script src="{{asset('js/lightgallery-all.min.js')}}"></script>
    <link href="{{asset('css/lightgallery.css')}}" rel="stylesheet">
    <!--<link rel="stylesheet" href="css/lightbox.min.css1">-->

    <link href="{{asset('css/flexslider.css')}}" rel="stylesheet">

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Title -->
                    <h1 class="mt-4">{{$bike->name}}</h1>
{{--                        <button class="m-lg-5"><i class="fa fa-heart-o" aria-hidden="true"></i></button>--}}
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/0/bikes/">Bikes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Details</li>
                        </ol>
                    </nav>
                    <!-- Post Content Column -->
                </div>

                <div class="col-md-8 slider">
                    <div class="flexslider">
                        <div class="demo-gallery">
                            <ul id="lightgallery" class="list-unstyled row slides">
                                @foreach($photos as $photo)
                                    <li class="col-md-4 col-sm-4 col-xs-6"
                                        data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800"
                                        data-src="images/light.jpg" data-sub-html="">
                                        <a href="{{asset($photo->getPicture())}}">
                                            <img class=" img-responsive" style="width:200%;height:300px;" src="{{asset($photo->getPicture())}}">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12">
                            <h2 class="mt-4">{{$bike->brand.' '. $bike->body_type.' '. $bike->engine_type}}</h2>
                        <h3><i class="fa fa-money" aria-hidden="true"></i> {{$bike->price}} RS</h3>
                        <h3><i class="fa fa-map-marker"></i> {{$bike->city_area.', '.$bike->city.', '.$bike->province}}</h3>
                        <h3><i class="fa fa-cogs" aria-hidden="true"></i> {{$bike->engine_type.', '.$bike->engine_capacity}}</h3>
                        <h3><i class="fa fa-motorcycle" aria-hidden="true"></i> {{$bike->body_type}}</h3>
                        <h3><i class="fa fa-paint-brush" aria-hidden="true"></i> {{$bike->color}}</h3>
                        <h3> <i class="fa fa-tachometer" aria-hidden="true"></i> {{$bike->mileage.' Km'}}</h3>
                        <h3> Registered in {{$bike->registration_city}}</h3>
                        <h3> Description</h3>
                        <p>{{$bike->description}}</p>
                        <hr>
                    </div>

                </div>
                <!-- Sidebar Widgets Column -->
                <div class="col-md-4 col-sm-4 col-xs-12 bikes">
                    <div class="panel panel-default">
                        <div class="overlay-card2">
                            <img src="https://images.unsplash.com/photo-1500397822960-47532107e0e4?auto=format&fit=crop&w=1310&q=80"
                                 class="img-rounded center-block img-responsive">
                            <div class="row text-center">
                                <h5 style="color: #fff;">{{$bike->seller_name}}</h5>
{{--                                <a class="btn btn-follow btn-sm text-center" href="#" role="button">Send Message</a>--}}
                            </div>
                        </div>
                        <div class="panel-body text-center">
                            <ul>
                                @if(auth()->guest())
                                    <li style="text-align: -webkit-center;"><button class="btn btn-sm btn-default" href="/0/bikes/create">Signin to buy </button></li>
                                @else
                                    <li style="text-align: -webkit-center;"><button class="btn btn-sm btn-default" href="{{'/'.$bike->id.'/cart'}}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('addtocart-form').submit();">
                                            Add to cart </button></li>
                                    <form id="addtocart-form" action="{{'/'.$bike->id.'/cart'}}" method="POST" style="display: none;">
                                        @csrf

                                    </form>
                                @endif
                            </ul>
                            <div id="show-hidden-menu"><i class="fa fa-phone"></i> &nbsp;Phone Number</div>
                            <div class="hidden-menu" style="display: none;">
                                {{$bike->seller_phone}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')


    <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
    <script defer src="public/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                // animationLoop: false,
                itemWidth: 210,
                itemMargin: 5,
                maxItems:3,
                minItems:1,
                start: function(slider){
                    $('body').removeClass('loading');

                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#show-hidden-menu').click(function() {
                $('.hidden-menu').slideToggle("slow");
                // Alternative animation for example
                // slideToggle("fast");
            });
        });

    </script>
@endsection

