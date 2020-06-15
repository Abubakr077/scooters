<!DOCTYPE html>
<html lang="en">

@include('layouts/head')


<body>
<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
<div class="wrapper">
{{--    <div class="banner">--}}
        @include('layouts.header')
        @yield('search')
{{--    </div>--}}
    @yield('content')
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wow.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
</div>
</body>
</html>
