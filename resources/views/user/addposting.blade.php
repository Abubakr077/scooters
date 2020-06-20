@extends('layouts/layout')
@section('content')
    <div class=" search-main-wraper no-bg create-post">
        <div class="container">
            <form role="form" method="post" action="/{{ Auth::user()->id }}/accessories" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-md-12 group-1">
                    <h1>Create post</h1>

                    <div class="form-group">
                        <label>Type</label>
                        <select class="form-control " name="type" required>
                            <option value="" > --- Please Select --- </option>
                            <option value="Accessory">Accessory</option>
                            <option value="Auto Parts">Auto Parts</option>
                        </select>
                    </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control " name="category" required>
                                <option value="" > --- Please Select --- </option>
                                <option value="Body Parts">Body Parts</option>
                                <option value="Wheels, Tyres and Rims">Wheels, Tyres and Rims</option>
                                <option value="Engine and Engine Parts">Engine and Engine Parts</option>
                                <option value="Wrecking">Wrecking</option>
                                <option value="Brakes and Suspensions">Brakes and Suspensions</option>
                                <option value="Oil, Liquids">Oil, Liquids</option>
                                <option value="Other Parts">Other Parts</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title <span class="require">*</span></label>
                            <input type="text" class="form-control" required name="name" />
                        </div>

                        <div class="group-1 free-edit">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Description</h3>
                                    <textarea rows="5" required class="form-control" name="description"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <i class="fa fa-edit"></i> Did you know it's FREE to edit your listing for the full duration of your ad?</p>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="group-1">
                    <div class="form-group col-md-5">
                        <label>Price <span class="require">*</span></label>
                        <input type="number" required class="form-control" name="price" placeholder="RS." />
                    </div>
                    <div class="form-group col-md-7 amount">
                        <label>
                            <input type="radio" name="price_type" value="amount" />Amount</label>
                        <label>
                            <input type="radio" name="price_type" value="negotiable" />Negotiable</label>
                        <label>
                            <input type="radio" name="price_type" value="free" />Free</label>
                        <label>
                            <input type="radio" name="price_type" value="swap/trade" />Swap/Trade</label>

                    </div>
                </div>

                <div class="row group-1">
                    <div class="col-md-4 ">
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
                    <div class="col-md-4">
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
                    <div class="col-md-4 amount">
                        <label><input type="checkbox"> &nbsp; Would you like to set a minimum Amount?</label>
                    </div>
                </div>

                <div class="row group-1">
                    <div class="col-md-6">
                        <h3>Condition</h3>
                        <label>
                            <input type="radio" name="condition" value="new"/>New</label>

                        <label>
                            <input type="radio" name="condition" value="old"/>Old</label>
                    </div>
                    <div class="col-md-6">
                        <h3>Offer Type</h3>
                        <label>
                            <input type="radio" name="offer"  value="offer"/>Offer</label>

                        <label>
                            <input type="radio" name="offer" value="wanted"/>Wanted</label>
                    </div>
                </div>


{{--                <div class="row group-1 duration">--}}
{{--                    <div class="col-md-3">--}}
{{--                        <a href="#" class="thumbnail">--}}
{{--                            <img src="http://placehold.it/260x180" alt="">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-9">--}}
{{--                        <h3>urgent ? $300 for 7days</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, id nec conceptam conclusionemque. Et eam tation option.</p>--}}
{{--                        <p><a class="btn" href="#">Add</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row group-1 duration decrease">--}}
{{--                    <div class="col-md-3">--}}
{{--                        <a href="#" class="thumbnail">--}}
{{--                            <img src="http://placehold.it/260x180" alt="">--}}
{{--                            <div class="sold">For sale</div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-9">--}}
{{--                        <h3>urgent ? Not <strike>$300</strike> <span style="color: red;"> $200 </span> for 7days</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, id nec conceptam conclusionemque. Et eam tation option.</p>--}}
{{--                        <p><a class="btn" href="#">Add</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}

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
                                <!--<article>-->
                                <!--<label for="files">Select multiple files: </label>-->
                                <!--<input id="files" type="file" multiple/>-->
                                <!--<output id="result" />-->
                                <!--</article>-->

                            </div>
                        </div>

                    </div>
                </div>

                <div class="group-1">
                    <div class="col-md-8">
                        <h3>Contact Details</h3>
                        <p class="col-md-10">{{auth()->user()->name.' '.auth()->user()->phone}}</p>
                        <a class="pull-right" style="color:#ef4416; font-size: 20px" href="#"><i class="fa fa-edit"></i> Edit</a>
                    </div>
                    <div class="col-md-4  amount">
                        <label>Seller Type</label>
                        <select class="form-control" name="dealer" required >
                            <option value="" > --- Please Select --- </option>
                            <option value="Dealer">Dealer</option>
                            <option value="Individual">Individual</option>
                        </select>
                    </div>
                </div>
                <div class="group-1">
                    <div class="col-md-12">
                        <h3>Address</h3>
                        <div class="col-md-4">
                            <label>Address</label>
                            <input type="text" name="address" id="city_area" class="form-control" required placeholder="Address">
                        </div>
                        <div class="col-md-4 ">
                            <label>City</label>
                            <select class="form-control" name="city" required >
                                <option value="" > --- Please Select --- </option>
                                @foreach((array)config('constants.CITIES') as $city)
                                    <option value="{{$city}}">
                                        {{$city}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 ">
                            <label>Province</label>
                            <select class="form-control" name="province" required >
                                <option value="" > --- Please Select --- </option>
                                <option value="Punjab">Punjab</option>
                                <option value="Sindh">Sindh</option>
                                <option value="KPK">KPK</option>
                                <option value="Balochistan">Balochistan</option>
                                <option value="Azad Kashmir">Azad Kashmir</option>
                                <option value="Federally Administered Tribal Areas">Federally Administered Tribal Areas</option>
                            </select>
                        </div>

                    </div>
                </div>

{{--                <div class="row group-1">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <h3>Select Your add type</h3>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">--}}
{{--                                <div class="db-wrapper">--}}
{{--                                    <div class="db-pricing-one">--}}
{{--                                        <div class="pricing-header db-bk-color-one">--}}
{{--                                            <h3>Free</h3>--}}
{{--                                            <hr>--}}
{{--                                            Your Standard Add--}}
{{--                                        </div>--}}
{{--                                        <ul class="ultimate">--}}
{{--                                            <li class="db-color-two"><strong>Unlimited Edits</strong></li>--}}
{{--                                            <li>Upto 10 Photos</li>--}}
{{--                                            <li>Upto 10 Photos</li>--}}
{{--                                            <li>Upto 10 Photos</li>--}}
{{--                                        </ul>--}}
{{--                                        <div class="pricing-footer db-bk-color-one">--}}

{{--                                            <a href="#" class="btn db-button-trans-black ">Select</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">--}}
{{--                                <div class="db-wrapper">--}}
{{--                                    <div class="db-pricing-one">--}}
{{--                                        <div class="pricing-header db-bk-color-three">--}}
{{--                                            <h3>Plus</h3>--}}
{{--                                            <hr>--}}
{{--                                            Your Standard Add--}}
{{--                                        </div>--}}
{{--                                        <ul>--}}
{{--                                            <li class="db-color-two"><strong>Highlighted backgrounds</strong></li>--}}
{{--                                            <li>Website Links</li>--}}
{{--                                            <li>Website Links</li>--}}
{{--                                            <li>Website Links</li>--}}
{{--                                        </ul>--}}
{{--                                        <div class="pricing-footer db-bk-color-two">--}}

{{--                                            <a href="#" class="btn db-button-trans-black ">Select</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">--}}
{{--                                <div class="db-wrapper">--}}
{{--                                    <div class="db-pricing-one">--}}
{{--                                        <div class="pricing-header db-bk-color-two">--}}
{{--                                            <h3>Featured</h3>--}}
{{--                                            <hr>--}}
{{--                                            $54 Increase Views--}}
{{--                                        </div>--}}
{{--                                        <ul>--}}
{{--                                            <li class="db-color-two"><strong>Unlimited Edits</strong></li>--}}
{{--                                            <li>Upto 20 Photos</li>--}}
{{--                                            <li>Upto 20 Photos</li>--}}
{{--                                            <li>Upto 20 Photos</li>--}}
{{--                                        </ul>--}}
{{--                                        <div class="pricing-footer db-bk-color-three">--}}
{{--                                            <a href="#" class="btn db-button-trans-black ">Select</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="row group-1">
                    <div class="col-md-12">
                        <p>Your ad will be live for 30 days.</p>
                        <p>*Based on average results across all categories compared to Free ad</p>
                    </div>
                </div>

                <div class="row group-1">
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary">
                            Create
                        </button>
                        <button class="btn btn-default">
                            Cancel
                        </button>
                    </div>
                </div>

            </div>
            </form>
        </div>
    </div>


    @include('layouts.footer')

    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script>
        window.onload = function(){

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
        }

    </script>
@endsection
