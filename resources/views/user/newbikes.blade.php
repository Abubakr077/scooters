@extends('layouts/layout')

@section('content')
    <section class="page-section text-left">
        <div class="container sec-1">
            <div class="row">
                <h2>Available Bikes</h2>
                <p>See which frenchise is selling in your area. Find a bike close to home.</p>
            </div>
        </div>
        <div class="container bikes-sec">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12 result">
                    <h4 class="show">Show Results by:</h4>
                    <form role="form" method="get" action="/bikes/search" enctype="multipart/form-data">
                        @csrf
                    <ul>
                            <input type="text" name="keyword" id="keyword" value="{{$filters['keyword']}}" class="form-control" placeholder="Search">
                        <li>
                            <h4>Brand</h4>
                            <select class="form-control" name="brand">
                                <option value=""> --- Please Select --- </option>
                                <option value="Honda" {{ $filters['brand'] == 'Honda' ? 'selected' : '' }}>Honda</option>
                                <option value="Yamaha" {{ $filters['brand'] == 'Yamaha' ? 'selected' : '' }}>Yamaha</option>
                                <option value="Suzuki" {{ $filters['brand'] == 'Suzuki' ? 'selected' : '' }}>Suzuki</option>
                                <option value="Super Power" {{ $filters['brand'] == 'Super Power' ? 'selected' : '' }}>Super Power</option>
                                <option value="United" {{ $filters['brand'] == 'United' ? 'selected' : '' }}>United</option>
                                <option value="Unique" {{ $filters['brand'] == 'Unique' ? 'selected' : '' }}>Unique</option>
                                <option value="Kawasaki" {{ $filters['brand'] == 'Kawasaki' ? 'selected' : '' }}>Kawasaki</option>
                            </select>
                        </li>
                        <li>
                            <h4>Year Range</h4>
                            <section class="range-slider">
                                <span class="rangeValues"></span>
                                <input value="{{ $filters['minYear'] != '' ? $filters['minYear'] : '1980' }}" min="1980" max="2021" step="1" type="range" name="minYear">
                                <input value="{{ $filters['maxYear'] != '' ? $filters['maxYear'] : '2021' }}" min="1980" max="2021" step="1" type="range" name="maxYear">
                            </section>
                        </li>
                        <li>
                            <h4>Price Range</h4>
                            <section class="range-slider">
                                <span class="rangeValues"></span>
                                <input value="{{ $filters['minPrice'] != '' ? $filters['minPrice'] : '8000' }}" min="8000" max="250000" step="8000" type="range" name="minPrice">
                                <input value="{{ $filters['maxPrice'] != '' ? $filters['maxPrice'] : '250000' }}" min="8000" max="250000" step="500" type="range" name="maxPrice">
                            </section>
                        </li>
                        <li>
                            <h4>Registration City</h4>
                            <select class="form-control" name="regCity">
                                <option value=""> --- Please Select --- </option>
                                <option value="Lahore" {{ $filters['regCity'] == 'Lahore' ? 'selected' : '' }}>Lahore</option>
                                <option value="Karachi" {{ $filters['regCity'] == 'Karachi' ? 'selected' : '' }}>Karachi</option>
                                <option value="Islamabad" {{ $filters['regCity'] == 'Islamabad' ? 'selected' : '' }}>Islamabad</option>
                                <option value="Multan" {{ $filters['regCity'] == 'Multan' ? 'selected' : '' }}>Multan</option>
                                <option value="Bwp" {{ $filters['regCity'] == 'Bwp' ? 'selected' : '' }}>Bwp</option>
                                <option value="Rawalpindi" {{ $filters['regCity'] == 'Rawalpindi' ? 'selected' : '' }}>Rawalpindi</option>
                                <option value="Peshawar" {{ $filters['regCity'] == 'Peshawar' ? 'selected' : '' }}>Peshawar</option>
                                <option value="Quetta" {{ $filters['regCity']=='Quetta' ? 'selected' : ''  }}>Quetta</option>
                            </select>
                        </li>
                        <li>
                            <h4>City</h4>
                            <select class="form-control" name="city">
                                <option value=""> --- Please Select --- </option>
                                <option value="Lahore" {{ $filters['city'] == 'Lahore' ? 'selected' : '' }}>Lahore</option>
                                <option value="Karachi" {{ $filters['city'] == 'Karachi' ? 'selected' : '' }}>Karachi</option>
                                <option value="Islamabad" {{ $filters['city'] == 'Islamabad' ? 'selected' : '' }}>Islamabad</option>
                                <option value="Multan" {{ $filters['city'] == 'Multan' ? 'selected' : '' }}>Multan</option>
                                <option value="Bwp" {{ $filters['city'] == 'Bwp' ? 'selected' : '' }}>Bwp</option>
                                <option value="Rawalpindi" {{ $filters['city'] == 'Rawalpindi' ? 'selected' : '' }}>Rawalpindi</option>
                                <option value="Peshawar" {{ $filters['city'] == 'Peshawar' ? 'selected' : '' }}>Peshawar</option>
                                <option value="Quetta" {{ $filters['city']=='Quetta' ? 'selected' : ''  }}>Quetta</option>
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
                            <h4>Mileage Range</h4>
                            <section class="range-slider">
                                <span class="rangeValues"></span>
                                <input value="{{ $filters['minMileage'] != '' ? $filters['minMileage'] : '15' }}" min="15" max="200" step="5" type="range" name="minMileage">
                                <input value="{{ $filters['maxMileage'] != '' ? $filters['maxMileage'] : '200' }}" min="15" max="200" step="5" type="range" name="maxMileage">
                            </section>
                        </li>
                        <li>
                            <h4>Engine Type</h4>
                            <select class="form-control" name="type">
                                <option value=""> --- Please Select --- </option>
                                <option value="4 Stroke" {{ $filters['type']=='4 Stroke' ? 'selected' : '' }}>4 Stroke</option>
                                <option value="2 Stroke" {{ $filters['type']=='2 Stroke' ? 'selected' : '' }}>2 Stroke</option>
                                <option value="Electric" {{ $filters['type']=='Electric' ? 'selected' : '' }}>Electric</option>
                            </select>
                        </li>
                        <li>
                            <h4>Engine Capacity</h4>
                            <section class="range-slider">
                                <span class="rangeValues"></span>
                                <input value="{{ $filters['minCapacity'] != '' ? $filters['minCapacity'] : '70' }}" min="70" max="700" step="10" type="range" name="minCapacity">
                                <input value="{{ $filters['maxCapacity'] != '' ? $filters['maxCapacity'] : '700' }}" min="70" max="700" step="10" type="range" name="maxCapacity">
                            </section>
                        </li>
                        <li>
                            <h4>Body Type</h4>
                            <select class="form-control" name="bodyType">
                                <option value=""> --- Please Select --- </option>
                                <option value="ATV" {{ $filters['bodyType']=='ATV' ? 'selected' : '' }}>ATV</option>
                                <option value="Cruiser" {{ $filters['bodyType']=='Cruiser' ? 'selected' : '' }}>Cruiser</option>
                                <option value="Scooter" {{ $filters['bodyType']=='Scooter' ? 'selected' : '' }}>Scooter</option>
                                <option value="Sports" {{ $filters['bodyType']=='Sports' ? 'selected' : '' }}>Sports</option>
                                <option value="Standard" {{ $filters['bodyType']=='Standard' ? 'selected' : '' }}>Standard</option>
                                <option value="Tourer" {{ $filters['bodyType']=='Tourer' ? 'selected' : '' }}>Tourer</option>
                                <option value="Trail" {{ $filters['bodyType']=='Trail' ? 'selected' : '' }}>Trail</option>
                                <option value="Others" {{ $filters['bodyType']=='Others' ? 'selected' : '' }}>Others</option>
                            </select>
                        </li>

                        <button class="btn btn-default" type="submit">Submit</button>
                    </ul>
                    </form>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12">
                    @foreach($bikes as $item)
                    <div class="col-md-12">
                        <div class="cs-services box right">
                            <figure> <img class="img-responsive" src="{{url($item->photos()->first()->getPicture())}}"></figure>
                            <div class="heading"><h5>
                                    <a href="{{'/0/bikes/'.$item->id}}">{{$item->name}}</a>
                                </h5>
                                <p>{{$item->price}}</p>
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                        {!! $bikes->links() !!}
                </div>
            </div>
        </div>
    </section>

    <section class="page-section">
        <div class="container sec-1 happy-customers">
            <div class="row">
                <h2>Happy Customers</h2>
                <p>See which frenchise is selling in your area. Find a bike close to home.</p>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h3><strong>Testimonial</strong></h3>
                    <div class="seprator"></div>
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row" style="padding: 20px">
                                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                                    <p class="testimonial_para">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en.</p><br>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/jack.jpg" class="img-responsive" style="width: 80px">
                                        </div>
                                        <div class="col-sm-10">
                                            <h4><strong>Jack Andreson</strong></h4>
                                            <p class="testimonial_subtitle"><span>Chlinical Chemistry Technologist</span><br>
                                                <span>Officeal All Star Cafe</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row" style="padding: 20px">
                                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                                    <p class="testimonial_para">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en.</p><br>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/kiara.jpg" class="img-responsive" style="width: 80px">
                                        </div>
                                        <div class="col-sm-10">
                                            <h4><strong>Kiara Andreson</strong></h4>
                                            <p class="testimonial_subtitle"><span>Chlinical Chemistry Technologist</span><br>
                                                <span>Officeal All Star Cafe</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="controls testimonial_control pull-right">
                        <a class="left fa fa-chevron-left btn btn-default testimonial_btn" href="#carousel-example-generic"
                           data-slide="prev"></a>

                        <a class="right fa fa-chevron-right btn btn-default testimonial_btn" href="#carousel-example-generic"
                           data-slide="next"></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h3><strong>Testimonial</strong></h3>
                    <div class="seprator"></div>
                    <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row" style="padding: 20px">
                                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                                    <p class="testimonial_para">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en.</p><br>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/jack.jpg" class="img-responsive" style="width: 80px">
                                        </div>
                                        <div class="col-sm-10">
                                            <h4><strong>Jack Andreson</strong></h4>
                                            <p class="testimonial_subtitle"><span>Chlinical Chemistry Technologist</span><br>
                                                <span>Officeal All Star Cafe</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row" style="padding: 20px">
                                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                                    <p class="testimonial_para">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en.</p><br>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/kiara.jpg" class="img-responsive" style="width: 80px">
                                        </div>
                                        <div class="col-sm-10">
                                            <h4><strong>Kiara Andreson</strong></h4>
                                            <p class="testimonial_subtitle"><span>Chlinical Chemistry Technologist</span><br>
                                                <span>Officeal All Star Cafe</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="controls testimonial_control pull-right">
                        <a class="left fa fa-chevron-left btn btn-default testimonial_btn" href="#carousel-example-generic2"
                           data-slide="prev"></a>

                        <a class="right fa fa-chevron-right btn btn-default testimonial_btn" href="#carousel-example-generic2"
                           data-slide="next"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main class="wow fadeInDown page-section" style="visibility: visible; animation-name: fadeInDown;">
        @include('layouts.footer')
    </main>

    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
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
            displayElement.innerHTML = "" + slide1 + " - " + slide2 + "";

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
