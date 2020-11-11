@extends('admin/layout')

@section('content')
    <link rel="stylesheet" href="{{asset('admin/plugins/ekko-lightbox/ekko-lightbox.css')}}">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Users
                <small> {{$user->name}}</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"> User</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Details</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="/admin_users/{{$user->id}}" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="word"> Name</label>
                                        <input type="text" class="form-control" id="name" name="name"  value="{{$user->name}}" placeholder="Enter Name of user" >
                                    </div>
                                    <div class="form-group">
                                        <label for="description"> Email</label>
                                        <input type="text" class="form-control" id="email" name="email"  value="{{$user->email}}" placeholder="Enter Email of user" >
                                    </div>
                                    <div class="form-group">
                                        <label for="description"> Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone"  value="{{$user->phone}}" placeholder="Enter Phone of user" >
                                    </div>
                                    <div class="form-group">
                                        <label>User Role</label>
                                        <select class="form-control " name="user_role" required>
                                            <option value="" > --- Please Select --- </option>
                                            <option {{ $user->user_role==0 ? 'selected' : ''  }} value="0">User</option>
                                            <option {{ $user->user_role==1 ? 'selected' : ''  }} value="1">Admin</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="description"> Address</label>
                                        <input type="text" class="form-control" id="city_area" name="city_area" value="{{$user->city_area}}" placeholder="Enter Address">
                                    </div>

                                    <div class="form-group">
                                        <label>City</label>
                                        <select class="form-control" name="city"  >
                                            <option value="" > --- Please Select --- </option>
                                            @foreach((array)config('constants.CITIES') as $city)
                                                <option value="{{$city}}" {{ $user->city==$city ? 'selected' : '' }}>
                                                    {{$city}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Province</label>
                                        <select class="form-control" name="province">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="Punjab" {{ $user->province=='Punjab' ? 'selected' : ''  }}>Punjab</option>
                                            <option value="Sindh" {{ $user->province=='Sindh' ? 'selected' : ''  }}>Sindh</option>
                                            <option value="KPK" {{ $user->province=='KPK' ? 'selected' : ''  }}>KPK</option>
                                            <option value="Balochistan" {{ $user->province=='Balochistan' ? 'selected' : ''  }}>Balochistan</option>
                                            <option value="Azad Kashmir" {{ $user->province=='Azad Kashmir' ? 'selected' : ''  }}>Azad Kashmir</option>
                                            <option value="Federally Administered Tribal Areas" {{ $user->province=='Federally Administered Tribal Areas' ? 'selected' : ''  }}>Federally Administered Tribal Areas</option>
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

                                    <input type="text" value="{{$user->id}}" name="id" id="id" hidden >

                                </div>

                            </div>
                            <div class="box-footer">
                                <input type="submit" name="submit" value="update"  class="btn btn-primary">
                                <input type="submit" name="submit" value="delete"  class="btn btn-danger">
                            </div>
                        </form>
                    </div>
                </div>

                <!-- /.col-->
            </div>
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
    <script src="{{asset('admin/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
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

        $(function () {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({gutterPixels: 3});
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>
@endsection
