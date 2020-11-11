@extends('layouts/layout')
@section('content')

    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/jquery.flexslider.js')}}"></script>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/lightgallery-all.min.js')}}"></script>
    <link href="{{asset('css/lightgallery.css')}}" rel="stylesheet">
    <!--<link rel="stylesheet" href="css/lightbox.min.css1">-->

    <link href="{{asset('css/flexslider.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

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
                            <li class="breadcrumb-item"><a href="/0/accessories/">Accessories</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Details</li>
                        </ol>
                    </nav>
                    <!-- Post Content Column -->
                </div>

                <div class="col-md-8">
                    <div id="slider" class="flexslider">
                        <div class="demo-gallery">
                            <ul id="lightgallery" class="list-unstyled row slides">
                                @foreach($photos as $photo)
                                    <li class="col-md-4 col-sm-4 col-xs-6"
                                        data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800"
                                        data-src="{{asset($photo->getPicture())}}" data-sub-html=""
                                    >
                                        <a href="{{asset($photo->getPicture())}}">
                                            <img class=" img-responsive" style="width:200%;height:400px;" src="{{asset($photo->getPicture())}}">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div id="carousel" class="flexslider">
                        <div class="demo-gallery">
                            <ul id="lightgallery" class="list-unstyled row slides">
                                @foreach($photos as $photo)
                                    <li class="col-md-4 col-sm-4 col-xs-6"
                                        data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800"
                                        data-src="{{asset($photo->getPicture())}}" data-sub-html=""
                                    >
                                        <a href="{{asset($photo->getPicture())}}">
                                            <img class=" img-responsive"  src="{{asset($photo->getPicture())}}">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <h3><i class="fa fa-motorcycle" aria-hidden="true"></i> {{$bike->brand}}</h3>
                        <h3><i class="fa fa-money" aria-hidden="true"></i> {{$bike->price}} RS</h3>
                        <h3><i class="fa fa-map-marker"></i> {{$bike->address.', '.$bike->city.', '.$bike->province}}</h3>
                        <h3><i class="fa fa-cart-plus" aria-hidden="true"></i> {{$bike->offer}}</h3>
                        <h3><i class="fa fa-paint-brush" aria-hidden="true"></i> {{$bike->color}}</h3>
                        <h3> <i class="fa fa-user-secret" aria-hidden="true"></i> {{$bike->dealer}}</h3>
                                                @if($bike->condition === 'new')
                                                    <h3> <i class="fa fa-check" aria-hidden="true"></i> {{$bike->condition}}</h3>
                                                @else
                                                    <h3> <i class="fa fa-times" aria-hidden="true"></i></i> {{$bike->condition}}</h3>
                                                @endif
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
                                    <form id="addtocart-form" action="{{'/'.$bike->id.'/accessory/cart'}}" method="POST" style="display: none;">
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
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 210,
                itemMargin: 5,
                asNavFor: '#slider'
            });

            $('#slider').flexslider({
                animation: "slide",
                controlNav: true,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel"
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
    <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>
    <script>
        // lightGallery(document.getElementById('lightgallery'));
        $("#lightgallery").lightGallery(
            {
                thumbnail:true,
                cssEasing: 'cubic-bezier(0.680, -0.550, 0.265, 1.550)',
                download: false,
            }
        );
        $('body').on('contextmenu', '.lg-image', function(e){
            e.preventDefault();
        });
    </script>
@endsection

