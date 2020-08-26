@extends('layouts/layout')
@section('content')

    <section class="page-section" style="margin-bottom: 60px;">
        <div class="container sec-1">
            <div class="row">
                <h2>Auto Parts</h2>
                <p>It's the fastest and simplest way to sell your automobile Parts!</p>
            </div>
        </div>
        <div class="container bikes-sec">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12 result">
                    <h4 class="show">Show Results by:</h4>
                    <form role="form" method="get" action="/accessories/search" enctype="multipart/form-data">
                        @csrf
                        <ul>
                            <input type="text" name="keyword" id="keyword" value="{{$filters['keyword']}}" class="form-control" placeholder="Search">
                            <li>
                                <h4>Category</h4>
                                <select class="form-control" name="category">
                                    <option value=""> --- Please Select --- </option>
                                    <option value="Body Parts" {{ $filters['category']=='Body Parts' ? 'selected' : '' }}>Body Parts</option>
                                    <option value="Wheels, Tyres and Rims" {{ $filters['category']=='Wheels, Tyres and Rims' ? 'selected' : '' }}>Wheels, Tyres and Rims</option>
                                    <option value="Engine and Engine Parts" {{ $filters['category']=='Engine and Engine Parts' ? 'selected' : '' }}>Engine and Engine Parts</option>
                                    <option value="Wrecking" {{ $filters['category']=='Wrecking' ? 'selected' : '' }}>Wrecking</option>
                                    <option value="Brakes and Suspensions" {{ $filters['category']=='Brakes and Suspensions' ? 'selected' : '' }}>Brakes and Suspensions</option>
                                    <option value="Oil, Liquids" {{ $filters['category']=='Oil, Liquids' ? 'selected' : '' }}>Oil, Liquids</option>
                                    <option value="Other Parts" {{ $filters['category']=='Other Parts' ? 'selected' : '' }}>Other Parts</option>
                                </select>
                            </li>
                            <li>
                                <h4>City</h4>
                                <select class="form-control" name="city">
                                    <option value=""> --- Please Select --- </option>
                                    @foreach((array)config('constants.CITIES') as $city)
                                        <option value="{{$city}}"
                                            {{ $filters['city'] == $city ? 'selected' : '' }}>
                                            {{$city}}
                                        </option>
                                    @endforeach
                                </select>
                            </li>
                            <li>
                                <h4>Province</h4>
                                <select class="form-control" name="province">
                                    <option value=""> --- Please Select --- </option>
                                    <option value="Punjab" {{ $filters['province']=='Punjab' ? 'selected' : ''  }}>Punjab</option>
                                    <option value="Sindh" {{ $filters['province']=='Sindh' ? 'selected' : ''  }}>Sindh</option>
                                    <option value="KPK" {{ $filters['province']=='KPK' ? 'selected' : ''  }}>KPK</option>
                                    <option value="Balochistan" {{ $filters['province']=='Balochistan' ? 'selected' : ''  }}>Balochistan</option>
                                    <option value="Azad Kashmir" {{ $filters['province']=='Azad Kashmir' ? 'selected' : ''  }}>Azad Kashmir</option>
                                    <option value="Federally Administered Tribal Areas" {{ $filters['province']=='Federally Administered Tribal Areas' ? 'selected' : ''  }}>Federally Administered Tribal Areas</option>
                                </select>
                            </li>
                            <li>
                                <h4>Price</h4>
                                <section class="range-slider">
                                    <span class="rangeValues"></span>
                                    <input value="{{ $filters['minPrice'] != '' ? $filters['minPrice'] : '1000' }}" min="1000" max="250000" step="1000" type="range" name="minPrice">
                                    <input value="{{ $filters['maxPrice'] != '' ? $filters['maxPrice'] : '250000' }}" min="1000" max="250000" step="5000" type="range" name="maxPrice">
                                </section>
                            </li>
                            <li>
                                <h4>Price Type</h4>
                                <select class="form-control" name="price_type">
                                    <option value=""> --- Please Select --- </option>
                                    <option value="amount" {{ $filters['price_type']=='amount' ? 'selected' : '' }}>Amount</option>
                                    <option value="negotiable" {{ $filters['price_type']=='negotiable' ? 'selected' : '' }}>Negotiable</option>
                                    <option value="free" {{ $filters['price_type']=='free' ? 'selected' : '' }}>Free</option>
                                    <option value="swap/trade" {{ $filters['price_type']=='swap/trade' ? 'selected' : '' }}>Swap/Trade</option>
                                </select>
                            </li>
                            <li>
                                <h4>Brand</h4>
                                <select class="form-control" name="brand">
                                    <option value=""> --- Please Select --- </option>
                                    @foreach((array)config('constants.BRANDS') as $brand)
                                        <option value="{{$brand}}"
                                            {{ $filters['brand'] == $brand ? 'selected' : '' }}>
                                            {{$brand}}
                                        </option>
                                    @endforeach
                                </select>
                            </li>
                            <li>
                                <h4>Color</h4>
                                <select class="form-control" name="color">
                                    <option value=""> --- Please Select --- </option>
                                    <option value="Red" {{ $filters['color']=='Red' ? 'selected' : '' }}>Red</option>
                                    <option value="Black" {{ $filters['color']=='Black' ? 'selected' : '' }}>Black</option>
                                    <option value="White" {{ $filters['color']=='White' ? 'selected' : '' }}>White</option>
                                    <option value="Green" {{ $filters['color']=='Green' ? 'selected' : '' }}>Green</option>
                                    <option value="Blue" {{ $filters['color']=='Blue' ? 'selected' : '' }}>Blue</option>
                                    <option value="Orange" {{ $filters['color']=='Orange' ? 'selected' : '' }}>Orange</option>
                                    <option value="Yellow" {{ $filters['color']=='Yellow' ? 'selected' : '' }}>Yellow</option>
                                    <option value="Multi" {{ $filters['color']=='Multi' ? 'selected' : '' }}>Multi</option>
                                </select>
                            </li>
                            <li>
                                <h4>Condition</h4>
                                <select class="form-control" name="condition">
                                    <option value=""> --- Please Select --- </option>
                                    <option value="new" {{ $filters['condition']=='new' ? 'selected' : '' }}>New</option>
                                    <option value="old" {{ $filters['condition']=='old' ? 'selected' : '' }}>Old</option>
                                </select>
                            </li>
                            <li>
                                <h4>Offer Type</h4>
                                <select class="form-control" name="offer">
                                    <option value=""> --- Please Select --- </option>
                                    <option value="offer" {{ $filters['offer']=='offer' ? 'selected' : '' }}>Offer</option>
                                    <option value="wanted" {{ $filters['offer']=='wanted' ? 'selected' : '' }}>Wanted</option>
                                </select>
                            </li>
                            <li>
                                <h4>Seller Type</h4>
                                <select class="form-control" name="dealer">
                                    <option value=""> --- Please Select --- </option>
                                    <option value="Dealer" {{ $filters['dealer']=='Dealer' ? 'selected' : '' }}>Dealer</option>
                                    <option value="Individual" {{ $filters['dealer']=='Individual' ? 'selected' : '' }}>Individual</option>
                                </select>
                            </li>
                            <button class="btn btn-default" type="submit">Submit</button>
                        </ul>
                    </form>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    @foreach($accessories as $item)
                        <div class="col-md-4">

                            <div class="cs-services bag">
                                <figure> <img class="img-responsive" src="{{url($item->photos()->first()->getPicture())}}">
                                    <div class=" heart-o">
                                        <a href="#" ><i class="fa fa-heart-o" ></i></a>
                                        <div class=" heart-i">
                                            <a href="{{'/'.$item->id.'/fav_accessory'}}" ><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </figure>
                                <div  class="heading"><h5 style="overflow: hidden;height:20px;"><a href="#">{{$item->name}}</a></h5>
                                    <p>PKR {{$item->price}}</p>
                                    <small>{{$item->category}}</small>
                                </div>
                                <div class="h-over">
                                    <a class="btn btn-default" href="#">Buy Now</a>
                                    <a class="btn btn-default" href="{{'/0/auto_parts/'.$item->id}}">View</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <main class="wow fadeInDown page-section" style="visibility: visible; animation-name: fadeInDown;">
        @include('layouts.footer')
    </main>

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
