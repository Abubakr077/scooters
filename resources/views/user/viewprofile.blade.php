@extends('layouts/layout')
@section('content')
    <main class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
        <section class="page-section profile">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <h2><span><a href="/profile-setting"> Profile Settings</a></span></h2>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <ul class="pull-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage adds<span class="caret"></span> <span class="sr-only">(current)</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/profile?ads=live">Manage Ads</a></li>
                                        <li><a href="/profile?ads=pending">Pending Ads</a></li>
                                        <li><a href="/profile?ads=fav">Favorite Ads</a></li>
                                        <li><a href="{{'/'.auth()->user()->id.'/orders'}}">Orders History</a></li>
                                    </ul>
                                </li>
{{--                                <li><a href="#">Messages</a></li>--}}
{{--                                <li><a href="#">Search alerts</a></li>--}}
{{--                                <li><a href="#">Profile settings</a></li>--}}
{{--                                <li><a class="active" href="#">View my full profile</a></li>--}}
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="card">
                                <h2><figure><img src="{{Auth::user()->picture}}"> </figure> <span>{{Auth::user()->name}}</span>
                                    <p> <small>{{Auth::user()->email}}</small></p>
                                    <p> <small>{{Auth::user()->phone}}</small></p>
                                </h2>

                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            @if($bikes)
                            <div class="card">
                                <h2 style = "text-transform:capitalize;">{{$ads}} ads</h2>
                                <div class="add-area">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @foreach($bikes as $item)
                                            <div class="col-md-12">
                                                <div class="cs-services box right">
                                                    <figure> <img class="img-responsive" src="{{url($item->photos()->first()->getPicture())}}"></figure>
                                                    <div class="heading"><h5>
                                                            <a href="{{url()->current().'/'.$item->id}}">{{$item->name}}</a>
                                                        </h5>
                                                        <p>{{$item->price}}</p>
                                                        <p>{{$item->description}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                            @foreach($accessories as $item)
                                                <div class="col-md-12">
                                                    <div class="cs-services box right">
                                                        <figure> <img class="img-responsive" src="{{url($item->photos()->first()->getPicture())}}"></figure>
                                                        <div class="heading"><h5>
                                                                <a href="{{url()->current().'/'.$item->id}}">{{$item->name}}</a>
                                                            </h5>
                                                            <p>{{$item->price}}</p>
                                                            <p>{{$item->description}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                    </div>
                                </div>
                            </div>
                            @endif
                                @if($favBikes)
                            <div class="card">
                                <h2>Favorite Ads</h2>
                                <div class="add-area">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @foreach($favBikes as $item)
                                            @if($item)
                                                <div class="col-md-12">
                                                    <div class="cs-services box right">
                                                        <figure> <img class="img-responsive" src="{{url($item->photos()->first()->getPicture())}}"></figure>
                                                        <div class="heading"><h5>
                                                                <a href="{{url()->current().'/'.$item->id}}">{{$item->name}}</a>
                                                            </h5>
                                                            <p>{{$item->price}}</p>
                                                            <p>{{$item->description}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        @foreach($favAccessories as $item)
                                                @if($item)
                                                    <div class="col-md-12">
                                                <div class="cs-services box right">
                                                    <figure> <img class="img-responsive" src="{{url($item->photos()->first()->getPicture())}}"></figure>
                                                    <div class="heading"><h5>
                                                            <a href="{{url()->current().'/'.$item->id}}">{{$item->name}}</a>
                                                        </h5>
                                                        <p>{{$item->price}}</p>
                                                        <p>{{$item->description}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                                @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                                @endif
                        </div>
                    </div>
                </div>
            </div>

        </section>

        @include('layouts.footer')
    </main>
@endsection
