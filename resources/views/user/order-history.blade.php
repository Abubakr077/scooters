@extends('layouts.layout')

@section('content')
    <section>
        <div class="container">
                <div class="col-lg-12">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Orders</li>
        </ol>
    </nav>
                </div>

    <div class="row">
        <div id="content" class="col-sm-12">
            <h2 class="title">Order History</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <td class="text-center">Image</td>
                        <td class="text-left">Product Name</td>
                        <td class="text-center">Order ID</td>
                        <td class="text-center">Quantity</td>
                        <td class="text-center">Status</td>
                        <td class="text-center">Address</td>
                        <td class="text-center">Date Added</td>
                        <td class="text-right">Total</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td class="text-center">
                            <a href="#"><img width="85" class="img-thumbnail" title="kheri" alt="" src="{{asset($order->picture)}}">
                            </a>
                        </td>
                        <td class="text-left"><a href="#">{{$order->name}}</a>
                        </td>
                        <td class="text-center">{{$order->id}}</td>
                        <td class="text-center">{{$order->quantity}}</td>
                        <td class="text-center">Shipped</td>
                        <td class="text-center">{{$order->house. ' '. $order->address. ' '.$order->city.' Pakistan'}}</td>
                        <td class="text-center">{{$order->created_at}}</td>
                        <td class="text-right">RS {{$order->price}}</td>
                        <td class="text-center"><a class="btn btn-info" title="" data-toggle="tooltip" href="#" data-original-title="View"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
        </div>
    </section>
@endsection
