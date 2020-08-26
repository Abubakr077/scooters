<div class="menu-bar">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1 class="navbar-brand logo"><a href="/"><img class="img-responsive"
                                                                                     src="{{asset('images/wheel.png')}}">
                            </a></h1>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        @include('layouts.subHeader')
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('message') !!}</em></div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span><em>
                                {!! session('error') !!}
                            </em></div>
                    @endif
                    @if(count($errors))
                    <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span><em>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </em></div>
                    @endif
                </div>
            </nav>
        </div>
    </div>
</div>
