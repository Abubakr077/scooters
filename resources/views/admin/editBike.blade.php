@extends('admin/layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Bikes
                <small> {{$product->name}}</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"> Product</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Details</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="/admin_bikes/{{$product->id}}" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="word"> Name</label>
                                        <input type="text" class="form-control" id="name" name="name"  value="{{$product->name}}" placeholder="Enter Name of product" >
                                    </div>
                                    <div class="form-group">
                                        <label for="description"> Description</label>
                                        <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Description of product">
                                            {{$product->description}}
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="description"> Manufacture Date</label>
                                        <input type="date" class="form-control" id="date" name="date" value="{{$product->date}}" placeholder="Enter Manufacture Date">
                                    </div>
                                    <div class="form-group">
                                        <label for="description"> Address</label>
                                        <input type="text" class="form-control" id="city_area" name="city_area" value="{{$product->city_area}}" placeholder="Enter Address">
                                    </div>
                                    <div class="form-group">
                                        <label>Registered City</label>
                                        <select class="form-control" name="registration_city"  >
                                            <option value="" > --- Please Select --- </option>
                                            @foreach((array)config('constants.CITIES') as $city)
                                                <option value="{{$city}}" {{ $product->city==$city ? 'selected' : '' }}>
                                                    {{$city}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>City</label>
                                        <select class="form-control" name="city"  >
                                            <option value="" > --- Please Select --- </option>
                                            @foreach((array)config('constants.CITIES') as $city)
                                                <option value="{{$city}}" {{ $product->city==$city ? 'selected' : '' }}>
                                                    {{$city}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Province</label>
                                        <select class="form-control" name="province">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="Punjab" {{ $product->province=='Punjab' ? 'selected' : ''  }}>Punjab</option>
                                            <option value="Sindh" {{ $product->province=='Sindh' ? 'selected' : ''  }}>Sindh</option>
                                            <option value="KPK" {{ $product->province=='KPK' ? 'selected' : ''  }}>KPK</option>
                                            <option value="Balochistan" {{ $product->province=='Balochistan' ? 'selected' : ''  }}>Balochistan</option>
                                            <option value="Azad Kashmir" {{ $product->province=='Azad Kashmir' ? 'selected' : ''  }}>Azad Kashmir</option>
                                            <option value="Federally Administered Tribal Areas" {{ $product->province=='Federally Administered Tribal Areas' ? 'selected' : ''  }}>Federally Administered Tribal Areas</option>
                                        </select>
                                    </div>


                                </div>
                                <div class="col-lg-6">

{{--                                    <div class="form-group">--}}
{{--                                        <label>Engine Capacity</label>--}}
{{--                                        <div class="rangemenu">--}}
{{--                                            <div class="freeformPrice ">--}}
{{--                                                <section class="range-slider align-content-center">--}}
{{--                                                    <span class="rangeValues"></span>--}}
{{--                                                    <input value="0" min="0" max="5000" step="10" type="range" name="engine_capacity">--}}
{{--                                                </section>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <input type="text" value="{{$product->id}}" name="id" id="id" hidden >
                                    <div class="form-group">
                                        <label for="description"> Seller Name</label>
                                        <input type="text" class="form-control"  value="{{$product->seller_name}}" readonly >
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Seller Number</label>
                                        <input  class="form-control" readonly value="{{$product->date}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Body Type</label>
                                        <select class="form-control" name="body_type"  >
                                            <option  value="" > --- Please Select --- </option>
                                            <option {{ $product->body_type=='ATV' ? 'selected' : ''  }} value="ATV">ATV</option>
                                            <option {{ $product->body_type=='Cruiser' ? 'selected' : ''  }} value="Cruiser">Cruiser</option>
                                            <option {{ $product->body_type=='Scooter' ? 'selected' : ''  }} value="Scooter">Scooter</option>
                                            <option {{ $product->body_type=='Sports' ? 'selected' : ''  }} value="Sports">Sports</option>
                                            <option {{ $product->body_type=='Standard' ? 'selected' : ''  }} value="Standard">Standard</option>
                                            <option {{ $product->body_type=='Tourer' ? 'selected' : ''  }} value="Tourer">Tourer</option>
                                            <option {{ $product->body_type=='Trail' ? 'selected' : ''  }} value="Trail">Trail</option>
                                            <option {{ $product->body_type=='Others' ? 'selected' : ''  }} value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Color</label>
                                        <select class="form-control" name="color"  >
                                            <option value="" > --- Please Select --- </option>
                                            <option {{ $product->color=='Red' ? 'selected' : ''  }} value="Red">Red</option>
                                            <option {{ $product->color=='Black' ? 'selected' : ''  }} value="Black">Black</option>
                                            <option {{ $product->color=='White' ? 'selected' : ''  }} value="White">White</option>
                                            <option {{ $product->color=='Green' ? 'selected' : ''  }} value="Green">Green</option>
                                            <option {{ $product->color=='Blue' ? 'selected' : ''  }} value="Blue">Blue</option>
                                            <option {{ $product->color=='Orange' ? 'selected' : ''  }} value="Orange">Orange</option>
                                            <option {{ $product->color=='Yellow' ? 'selected' : ''  }} value="Yellow">Yellow</option>
                                            <option {{ $product->color=='Multi' ? 'selected' : ''  }} value="Multi">Multi</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Condition</label>
                                        <select class="form-control" name="condition"  >
                                            <option value="" > --- Please Select --- </option>
                                            <option {{ $product->condition=='new' ? 'selected' : ''  }} value="new">New</option>
                                            <option {{ $product->condition=='used' ? 'selected' : ''  }} value="used">Used</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="description"> Price</label>
                                        <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}" placeholder="Enter Price of product">
                                    </div>
                                    <div class="form-group">
                                        <label>Engine Type</label>
                                        <select class="form-control" name="engine_type" required id="engine_type">
                                            <option value="" > --- Please Select --- </option>
                                            <option {{ $product->engine_type=='4 Stroke' ? 'selected' : ''  }} value="4 Stroke">4 Stroke</option>
                                            <option {{ $product->engine_type=='2 Stroke' ? 'selected' : ''  }} value="2 Stroke">2 Stroke</option>
                                            <option {{ $product->engine_type=='Electric' ? 'selected' : ''  }} value="Electric">Electric</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="box-footer">
                                <input type="submit" name="submit" value="approve"  class="btn btn-primary">
                                <input type="submit" name="submit" value="delete"  class="btn btn-danger">
                                <input type="submit" name="submit" value="update"  class="btn btn-outline-secondary">
                            </div>
                        </form>
                    </div>
                </div>

                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
    <script>
        window.onload = function(){
            function getVals(){
                // Get slider values
                var parent = this.parentNode;
                var slides = parent.getElementsByTagName("input");
                var slide1 = parseFloat( slides[0].value );

                var displayElement = parent.getElementsByClassName("rangeValues")[0];
                var type = document.getElementById("engine_type").value;
                console.log('here',type);
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
