<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url(Auth::user()->picture)}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

                    <li class="active"><a href="/admin/home"><i class="fa fa-home"></i>Home</a></li>
                    <li class=""><a href="/admin_bikes"><i class="fa fa-bar-chart"></i> Bikes</a></li>
{{--                    <li class=""><a href="{{url('/qrcodes/category')}}"><i class="fa fa-bar-chart"></i> Category Codes</a></li>--}}
{{--                    <li class=""><a href="/admin/products/create"><i class="fa fa-plus-square"></i> Add Product</a></li>--}}
{{--                    <li class=""><a href="/admin/profile"><i class="fa fa-user-plus"></i> Profile</a></li>--}}
        </ul>
    </section>
</aside>
