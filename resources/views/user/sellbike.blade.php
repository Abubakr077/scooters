@extends('layouts/layout')
@section('content')
    <section class="popular sell-items">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="page-wrapper">
                        <form role="form" method="post" action="/{{ Auth::user()->id }}/bikes" enctype="multipart/form-data">
                            @csrf

                        <h1 class="">Sell Your Bike</h1>

                        <h3>Bike Information</h3>
                            <div class="col-md-12 cities">
                                <label>Title</label>
                                <input type="text" name="name" id="name" class="form-control" required placeholder="Title">
                            </div>
                            <div class="col-md-12 cities">
                                <label>Address</label>
                                <input type="text" name="city_area" id="city_area" class="form-control" placeholder="Address">
                            </div>
                        <div class="col-md-12 cities text-field">
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
                            <div class="col-md-12 cities text-field">
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
                            <div class="col-md-12 cities text-field">
                                <label>Registration City</label>
                                <input class="form-control" type="text"  required id="default" list="rabbit-cities4" placeholder="City" name="registration_city">
                                <datalist id="rabbit-cities4">
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
                            <div class="col-md-12 cities text-field">
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
                                <input class="form-control" required  type="date" id="default" list="rabbit-cities5" placeholder="Date of manufacture" name="date">
                            </div>
                        <div class="col-md-12 cities text-field">
                            <label>Engine Type</label>
                            <input class="form-control" type="text" required  id="default" list="rabbit-cities6" placeholder="Stroke" name="engine_type">
                            <datalist id="rabbit-cities6">
                                <option value="4 Stroke">
                                <option value="2 Stroke">
                                <option value="Electric">
                            </datalist>
                        </div>
                            <div class="col-md-12 cities text-field">
                                <label>Engine Capacity</label>
                                <input class="form-control" type="number" required  id="default" list="rabbit-capacity" placeholder="Engine Capacity" name="engine_capacity">
                                <datalist id="rabbit-capacity">
                                    <option value="70">
                                    <option value="110">
                                    <option value="125">
                                    <option value="150">
                                    <option value="200">
                                    <option value="660">
                                </datalist>
                            </div>

                            <div class="col-md-12 cities text-field">
                                <label>Body Type</label>
                                <input class="form-control" type="text"  required id="default" list="rabbit-body" placeholder="Body Type" name="body_type">
                                <datalist id="rabbit-body">
                                    <option value="ATV">
                                    <option value="Cruiser">
                                    <option value="Scooter">
                                    <option value="Sports">
                                    <option value="Standard">
                                    <option value="Tourer">
                                    <option value="Trail">
                                    <option value="Others">
                                </datalist>
                            </div>

                            <div class="col-md-12 cities text-field">
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
                            <h3>Additional Information</h3>
                            <h4>Feature</h4>
                            <div class="col-md-6"><label><input type="checkbox"> Anti Theft Lock </label></div>
                            <div class="col-md-6"><label><input type="checkbox"> Disc Brake </label></div>
                            <div class="col-md-6"><label><input type="checkbox"> Led Light </label></div>
                            <div class="col-md-6"><label><input type="checkbox"> Wind Shield </label></div>
                        </div>
                        <div class="col-md-12 cities">
                            <h3>upload Photos</h3>
                            <input multiple="multiple" type="file" required class="form-control" name="picture[]">
                        </div>
                        <div class="col-md-12 cities">
                            <h3>Contact Information</h3>
                            <input type="text" name="seller_name" required  id="seller_name" value="{{Auth::user()->name}}" class="form-control" placeholder="Seller Name">
                            <br />
                            <input type="text"  class="form-control"  required placeholder="Seller Mobile Number" name="seller_phone" id="seller_phone" value="{{Auth::user()->phone}}">
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

@endsection
