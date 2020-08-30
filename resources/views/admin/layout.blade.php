<!DOCTYPE html>
<html lang="en">

@include('admin/head')



<body>
<div class="skin-green">
{{--    select admin panel main color from here--}}
    <div class="wrapper">
        @include('admin/header')

        @include('admin/sidebar')

        @yield('content')

        @include('admin/footer')
    </div>
</div>

</body>

<!-- Footer -->


</html>
