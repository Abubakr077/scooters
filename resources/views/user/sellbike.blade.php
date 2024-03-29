@extends('layouts/layout')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <section class="popular sell-items">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="page-wrapper">
                        <form role="form" method="post" action="/{{ Auth::user()->id }}/bikes" enctype="multipart/form-data">
                            @csrf

                        <h1 class="">Sell Your Bike</h1>

                        <h3>Bike Information</h3>
                            <div class="col-md-12 cities row">
                                <label>Title</label>
                                <input type="text" name="name" id="name" class="form-control" required placeholder="Title">
                            </div>

                            <div class="col-md-12 cities ">
                                <label>Registration City</label>
                                <select class="form-control" name="registration_city" required >
                                    <option value="" > --- Please Select --- </option>
                                    <option value="Un-Registered" >Un-Registered</option>
                                    @foreach((array)config('constants.CITIES') as $city)
                                        <option value="{{$city}}">
                                            {{$city}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 cities ">
                                <label>Brand</label>
                                <select class="form-control" name="brand" required >
                                    <option value="" > --- Please Select --- </option>
                                    @foreach((array)config('constants.BRANDS') as $brand)
                                        <option value="{{$brand}}">
                                            {{$brand}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
{{--                        <div class="col-md-12 cities text-field">--}}
{{--                            <label>Bike Information</label>--}}

{{--                            <!-- Trigger the modal with a button -->--}}
{{--                            <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Open Modal</button>-->--}}

{{--                            <!-- Modal -->--}}
{{--                            <!--<div id="myModal3" class="modal fade" role="dialog">-->--}}
{{--                            <!--<div class="modal-dialog">-->--}}

{{--                            <!--&lt;!&ndash; Modal content&ndash;&gt;-->--}}
{{--                            <!--<div class="modal-content">-->--}}
{{--                            <!--<div class="modal-header">-->--}}
{{--                            <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->--}}
{{--                            <!--<h4 class="modal-title">Modal Header</h4>-->--}}
{{--                            <!--</div>-->--}}
{{--                            <!--<div class="modal-body">-->--}}
{{--                            <!--<ul class="nav nav-pills">-->--}}
{{--                            <!--<li><a href="#">Australia</a></li>-->--}}


{{--                            <!--<li class="dropdown">-->--}}
{{--                            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Country List<span class="caret"></span></a>-->--}}
{{--                            <!--<ul class="dropdown-menu">-->--}}
{{--                            <!--<li><a href="#">India</a>-->--}}
{{--                            <!--<ul class="dropdown-menu menu2">-->--}}
{{--                            <!--<li><a href="#">India</a></li>-->--}}
{{--                            <!--<li><a href="#">Australia</a></li>-->--}}
{{--                            <!--<li><a href="#">Srilanka</a></li>-->--}}
{{--                            <!--<li><a href="#">South Africa</a></li>-->--}}
{{--                            <!--<li><a href="#">New Zealand</a></li>-->--}}
{{--                            <!--</ul>-->--}}
{{--                            <!--</li>-->--}}
{{--                            <!--<li><a href="#">Australia</a></li>-->--}}
{{--                            <!--<li><a href="#">Srilanka</a></li>-->--}}
{{--                            <!--<li><a href="#">South Africa</a></li>-->--}}
{{--                            <!--<li><a href="#">New Zealand</a></li>-->--}}
{{--                            <!--</ul>-->--}}
{{--                            <!--</li>-->--}}
{{--                            <!--</ul>-->--}}

{{--                            <!--</div>-->--}}
{{--                            <!--<div class="modal-footer">-->--}}
{{--                            <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->--}}
{{--                            <!--</div>-->--}}
{{--                            <!--</div>-->--}}

{{--                            <!--</div>-->--}}
{{--                            <!--</div>-->--}}


{{--                            <input class="form-control" type="text" id="default" list="rabbit-cities3" placeholder="info">--}}
{{--                            <datalist id="rabbit-cities3">--}}
{{--                                <option value="A">--}}
{{--                                <option value="B">--}}
{{--                                <option value="C">--}}
{{--                            </datalist>--}}
{{--                        </div>--}}
                        <div class="col-md-12 cities">
                            <label>Mileage</label>
                            <input class="form-control"  required type="number" id="default" list="rabbit-cities5" placeholder="Mileage" name="mileage">
                        </div>
                            <div class="col-md-12 cities">
                                <label>Date of manufacture</label>
                                <input class="form-control date" required type="date"
{{--                                       pattern="\d{1,2}/\d{1,2}/\d{4}"--}}
                                       value="{{ date("dd-mm-yyyy") }}"
                                       list="rabbit-cities5" placeholder="Date of manufacture" name="date">
                            </div>
                        <div class="col-md-12 cities ">
                            <label>Engine Type</label>
                            <select class="form-control" name="engine_type" required id="engine_type">
                                <option value="" > --- Please Select --- </option>
                                <option value="4 Stroke">4 Stroke</option>
                                <option value="2 Stroke">2 Stroke</option>
                                <option value="Electric">Electric</option>
                            </select>
                        </div>
                            <div class="col-md-12 cities ">
                                <label>Engine Capacity</label>
                                <div class="rangemenu">
                                    <div class="freeformPrice ">
                                        <section class="range-slider align-content-center">
                                            <span class="rangeValues"></span>
                                            <input value="0" min="0" max="2000" step="5" type="range" name="engine_capacity">
                                        </section>
                                    </div>
                            </div>

                            <div class="col-md-12 cities ">
                                <label>Body Type</label>
                                <select class="form-control" name="body_type" required >
                                    <option value="" > --- Please Select --- </option>
                                    <option value="ATV">ATV</option>
                                    <option value="Cruiser">Cruiser</option>
                                    <option value="Scooter">Scooter</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Motorcycle">Motorcycle</option>
                                    <option value="Tourer">Tourer</option>
                                    <option value="Trail">Trail</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                                <div class="col-md-12 cities ">
                                    <label>Transmission</label>
                                    <select class="form-control" name="transmission" required >
                                        <option value="" > --- Please Select --- </option>
                                        <option value="ATV">Self</option>
                                        <option value="Cruiser">Kick</option>
                                    </select>
                                </div>

                            <div class="col-md-12 cities">
                                <label>Color</label>
                                <select class="form-control" name="color" required >
                                    <option value="" > --- Please Select --- </option>
                                    <option value="Red">Red</option>
                                    <option value="Black">Black</option>
                                    <option value="White">White</option>
                                    <option value="Green">Green</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Orange">Orange</option>
                                    <option value="Yellow">Yellow</option>
                                    <option value="Multi">Multi</option>
                                </select>
                            </div>
                        <div class="col-md-12 cities ">
                            <label>Price</label>
                            <input class="form-control"  required type="number" id="default" list="rabbit-cities7" placeholder="Price" name="price">
                        </div>
                        <div class="col-md-12 cities">

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Describe your Bike</label>
                                <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" required rows="10" name="description"></textarea>
                            </div>
                        </div>
                            <div class="col-md-12 cities">
                                    <h3>Condition</h3>
{{--                                    <label>--}}
{{--                                        <input type="radio" name="condition" value="new"/>New</label>--}}
{{--                                    <label>--}}
{{--                                        <input type="radio" name="condition" value="used"/>Used</label>--}}

                                <div class="col-md-6"><label><input type="checkbox" name="condition" value="new"/> New </label></div>
                                <div class="col-md-6"><label><input type="checkbox" name="condition" value="used"/> Used </label></div>

                            </div>
                        <div class="col-md-12 cities">
                            <h3>Additional Information</h3>
                            <h4>Feature</h4>
                            <div class="col-md-6"><label><input type="checkbox"> Anti Theft Lock </label></div>
                            <div class="col-md-6"><label><input type="checkbox"> Disc Brake </label></div>
                            <div class="col-md-6"><label><input type="checkbox"> Led Light </label></div>
                            <div class="col-md-6"><label><input type="checkbox"> Wind Shield </label></div>
                        </div>
                            <div class="row group-1">
                                <div class="col-md-12 duration">
                                    <h3>Pictures</h3>
                                    <div class="row">
                                        <div class="box col-md-12">
                                            <article>
                                                <div class="upload-btn-wrapper">
                                                    <button class="btn">Add Pictures</button>
                                                    <input id="files" type="file" multiple name="picture[]"/>
                                                    <output id="result" />
                                                </div>
                                            </article>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <div class="col-md-12 cities">
                            <h3>Contact Information</h3>
                            <input type="text" name="seller_name" required  id="seller_name" value="{{Auth::user()->name}}" class="form-control" placeholder="Seller Name">
                            <br />
                            <input type="text"  class="form-control"  required placeholder="Seller Mobile Number" name="seller_phone" id="seller_phone" value="{{Auth::user()->phone}}">
                        </div>
                                <div class="col-md-12 cities">
                                    <h3>Address</h3>
                                        <input type="text" name="city_area" id="city_area" value="{{ old('name', auth()->user()->city_area) }}" class="form-control" placeholder="Address">
                                    <br />
                                    <br />
                                        <select class="form-control" name="city" required >
                                            <option value="" > --- Please Select City --- </option>
                                            @foreach((array)config('constants.CITIES') as $city)
                                                <option value="{{$city}}" {{ auth()->user()->city==$city ? 'selected' : '' }}>
                                                    {{$city}}
                                                </option>
                                            @endforeach
                                        </select>
                                    <br />
                                        <select class="form-control" name="province" required >
                                            <option value=""> --- Please Select Province --- </option>
                                            <option value="Punjab" {{ auth()->user()->province=='Punjab' ? 'selected' : ''  }}>Punjab</option>
                                            <option value="Sindh" {{ auth()->user()->province=='Sindh' ? 'selected' : ''  }}>Sindh</option>
                                            <option value="KPK" {{ auth()->user()->province=='KPK' ? 'selected' : ''  }}>KPK</option>
                                            <option value="Balochistan" {{ auth()->user()->province=='Balochistan' ? 'selected' : ''  }}>Balochistan</option>
                                            <option value="Azad Kashmir" {{ auth()->user()->province=='Azad Kashmir' ? 'selected' : ''  }}>Azad Kashmir</option>
                                            <option value="Federally Administered Tribal Areas" {{ auth()->user()->province=='Federally Administered Tribal Areas' ? 'selected' : ''  }}>Federally Administered Tribal Areas</option>
                                        </select>
                                    <br />

                                </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-default submit">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    <script>
        window.onload = function(){
            // $('.date').datetimepicker({
            //     format: 'DD/MM/YYYY',
            //     locale: 'en'
            // });
            function getVals(){
                // Get slider values
                var parent = this.parentNode;
                var slides = parent.getElementsByTagName("input");
                var slide1 = parseFloat( slides[0].value );

                var displayElement = parent.getElementsByClassName("rangeValues")[0];
                var type = document.getElementById("engine_type").value;
                if(type === 'Electric'){
                    displayElement.innerHTML = "W " + slide1 ;
                    // document.getElementById('price_range1').innerHTML = "W " + slide1;
                }else{
                    displayElement.innerHTML = "CC " + slide1 ;
                    // document.getElementById('price_range1').innerHTML = "CC " + slide1;
                }
            }
            //Check File API support
            if(window.File && window.FileList && window.FileReader)
            {
                var filesInput = document.getElementById("files");

                filesInput.addEventListener("change", function(event){

                    var files = event.target.files; //FileList object
                    var output = document.getElementById("result");

                    for(var i = 0; i< files.length; i++)
                    {
                        var file = files[i];

                        //Only pics
                        if(!file.type.match('image'))
                            continue;

                        var picReader = new FileReader();

                        picReader.addEventListener("load",function(event){

                            var picFile = event.target;

                            var div = document.createElement("div");

                            div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
                                "title='" + picFile.name + "'/> <a href='#' class='remove_pict'>X</a>";

                            output.insertBefore(div,null);
                            div.children[1].addEventListener("click", function(event){
                                div.parentNode.removeChild(div);
                            });

                        });

                        //Read the image
                        picReader.readAsDataURL(file);
                    }

                });
            }
            else
            {
                console.log("Your browser does not support File API");
            }
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
