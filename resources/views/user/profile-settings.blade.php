@extends('layouts/layout')
@section('content')
<div class="wraper">
    <main class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
        <section class="page-section profile">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="border-bottom: 1px solid #ccc; margin-bottom: 30px">
                        <div class="col-md-4">
                            <h2><span><a href="/profile?ads=live"> View Profile</a></span></h2>
                        </div>
                    </div>

                    <form class="form-horizontal" method="post" action="/profile-update/{{Auth::user()->id}}" enctype="multipart/form-data">
                        @csrf
                    <div class="col-md-12">
                        <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0 profile-setings">
                            <div class="card">
                                <div class="col-md-4 col-sm-4 col-xs-12" style="padding: 15px;"><figure><img class="img-responsive" src="{{Auth::user()->picture}}"> </figure></div>
                                <div class="col-md-8 col-sm-8 col-xs-12" style="padding: 15px;">
                                    <label class="contact">Contact Name
                                        <input type="text" class="form-control"  name="name" value="{{ old('name', $user->name) }}" placeholder="Contact Name"></label>
                                    <label class="contact">Phone Number
                                        <input type="text" class="form-control" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="Phone"></label>
                                    <label class="contact">Email
                                        <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" placeholder="Email"></label>
                                    <label class="contact">Password
                                        <input type="password" class="form-control" placeholder="Password" name="password"></label>
                                    <label class="contact">Confirm Password
                                        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation"></label>
                                    <label class="contact">Location
                                        <input type="text" class="form-control" name="city_area" value="{{ old('city_area', $user->city_area) }}" placeholder="Location">
                                    </label>
                                    <label class="contact">City
                                        <select class="form-control" name="city"  >
                                            <option value="" > --- Please Select --- </option>
                                            @foreach((array)config('constants.CITIES') as $city)
                                                <option value="{{$city}}" {{ $user->city==$city ? 'selected' : '' }}>
                                                    {{$city}}
                                                </option>
                                            @endforeach
                                        </select></label>
                                    <label class="contact">Province
                                        <select class="form-control" name="province">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="Punjab" {{ $user->province=='Punjab' ? 'selected' : ''  }}>Punjab</option>
                                            <option value="Sindh" {{ $user->province=='Sindh' ? 'selected' : ''  }}>Sindh</option>
                                            <option value="KPK" {{ $user->province=='KPK' ? 'selected' : ''  }}>KPK</option>
                                            <option value="Balochistan" {{ $user->province=='Balochistan' ? 'selected' : ''  }}>Balochistan</option>
                                            <option value="Azad Kashmir" {{ $user->province=='Azad Kashmir' ? 'selected' : ''  }}>Azad Kashmir</option>
                                            <option value="Federally Administered Tribal Areas" {{ $user->province=='Federally Administered Tribal Areas' ? 'selected' : ''  }}>Federally Administered Tribal Areas</option>
                                        </select></label>
{{--                                    <p class="map"><a href="#"><i class="fa fa-map-marker"></i> Use My Location</a></p>--}}
{{--                                    <label class="contact">New--}}
{{--                                        <input type="radio" name="condition" value="new"/>--}}
{{--                                    </label>--}}
                                    <p><button type="submit" class="btn btn-default">Save</button></p>
                                </div>

                            </div>
                        </div>

                    </div>
                    </form>
                </div>
            </div>

        </section>

        @include('layouts.footer')
    </main>
</div>

@endsection
