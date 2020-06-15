<!DOCTYPE html>
<html lang="en">

@include('layouts/head')


<body>
<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
<div class="wrapper">
    <div class="banner">
        @include('layouts.mainheader')
        @yield('search')
    </div>
    @yield('content')
</div>
</body>
</html>
