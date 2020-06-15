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

                            <select class="form-control select " name="category" required>
                                <option>Select Category</option>
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
                    <div class="col-md-4  text-field">
                        <label>Brand</label>
                        <input class="form-control" required type="text" list="rabbit-brand" placeholder="Brand" name="brand">
                        <datalist id="rabbit-brand">
                            <option value="Honda">
                            <option value="Yamaha">
                            <option value="Suzuki">
                            <option value="Super Power">
                            <option value="United">
                            <option value="Unique">
                            <option value="Kawasaki">
                            <option value="Other">
                        </datalist>
                    </div>
                    <div class="col-md-4 text-field">
                        <label>Color</label>
                        <input class="form-control" type="text" required  id="default" list="rabbit-color" placeholder="Color" name="color">
                        <datalist id="rabbit-color">
                            <option value="Red">
                            <option value="Black">
                            <option value="White">
                            <option value="Green">
                            <option value="Blue">
                            <option value="Orange">
                            <option value="Yellow">
                            <option value="Multi">
                        </datalist>
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
                    <div class="col-md-4  text-field amount">
                        <label>Dealer Type</label>
                        <input class="form-control" required type="text" list="rabbit-dealer" placeholder="Dealer Type" name="dealer">
                        <datalist id="rabbit-dealer">
                            <option value="Dealer">
                            <option value="Individual">
                        </datalist>
                    </div>
                </div>
                <div class="group-1">
                    <div class="col-md-12">
                        <h3>Address</h3>
                        <div class="col-md-4">
                            <label>Address</label>
                            <input type="text" name="address" id="city_area" class="form-control" required placeholder="Address">
                        </div>
                        <div class="col-md-4  text-field">
                            <label>City</label>
                            <input class="form-control" required type="text" list="rabbit-cities" placeholder="City" name="city">
                            <datalist id="rabbit-cities">
                                <option value="Lahore">
                                <option value="Karachi">
                                <option value="Islamabad">
                                <option value="Multan">
                                <option value="Bwp">
                                <option value="Rawalpindi">
                                <option value="Peshawar">
                                <option value="Quetta">
                            </datalist>
                        </div>
                        <div class="col-md-4  text-field">
                            <label>Province</label>
                            <input class="form-control" type="text" required list="rabbit-province" placeholder="Province" name="province">
                            <datalist id="rabbit-province">
                                <option value="Punjab">
                                <option value="Sindh">
                                <option value="KPK">
                                <option value="Balochistan">
                                <option value="Azad Kashmir">
                                <option value="Federally Administered Tribal Areas">
                            </datalist>
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
