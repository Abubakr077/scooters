@extends('layouts.layout')

@section('content')
    <ul class="header-main ">
        <li class="home"><a href="#">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li> Order Infomation</li>
    </ul>

    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
            <h2 class="title">Order Information</h2>

            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <td colspan="2" class="text-left">Order Details</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style="width: 50%;" class="text-left"> <b>Order ID:</b> #214521
                        <br>
                        <b>Date Added:</b> 20/06/2016</td>
                    <td style="width: 50%;" class="text-left"> <b>Payment Method:</b> Cash On Delivery
                        <br>
                        <b>Shipping Method:</b> Flat Shipping Rate </td>
                </tr>
                </tbody>
            </table>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <td style="width: 50%; vertical-align: top;" class="text-left">Payment Address</td>
                    <td style="width: 50%; vertical-align: top;" class="text-left">Shipping Address</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-left">Moosa Ahmed
                        <br>House 17
                        <br>Garden Town
                        <br>Lahore
                        <br>Pakistan</td>
                    <td class="text-left">Moosa Ahmed
                        <br>House 17
                        <br>Garden town
                        <br>Lahore
                        <br>Pakistan</td>
                </tr>
                </tbody>
            </table>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <td class="text-left">Product Name</td>
                        <td class="text-left">Model</td>
                        <td class="text-right">Quantity</td>
                        <td class="text-right">Price</td>
                        <td class="text-right">Total</td>
                        <td style="width: 20px;"></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-left">Brown Kheri </td>
                        <td class="text-left">product 11</td>
                        <td class="text-right">1</td>
                        <td class="text-right">RS 4000</td>
                        <td class="text-right">RS 4000</td>
                        <td style="white-space: nowrap;" class="text-right"> <a class="btn btn-primary" title="" data-toggle="tooltip" href="#" data-original-title="Reorder"><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-danger" title="" data-toggle="tooltip" href="return.html" data-original-title="Return"><i class="fa fa-reply"></i></a>
                        </td>
                    </tr>

                    </tbody>
                    <tfoot>

                    <tr>
                        <td colspan="3"></td>
                        <td class="text-right"><b>Flat Shipping Rate</b>
                        </td>
                        <td class="text-right">RS 100</td>
                        <td></td>
                    </tr>
                    <tr>


                    </tr>

                    <tr>
                        <td colspan="3"></td>
                        <td class="text-right"><b>Total</b>
                        </td>
                        <td class="text-right">RS 4100</td>
                        <td></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <h3>Order History</h3>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <td class="text-left">Date Added</td>
                    <td class="text-left">Status</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-left">20/06/2016</td>
                    <td class="text-left">Processing</td>
                </tr>
                <tr>
                    <td class="text-left">21/06/2019</td>
                    <td class="text-left">Shipped</td>
                </tr>
                <tr>
                    <td class="text-left">24/06/2019</td>
                    <td class="text-left">Complete</td>
                </tr>
                </tbody>
            </table>
            <div class="buttons clearfix">
                <div class="pull-right"><a class="btn btn-primary" href="#">Continue</a>
                </div>
            </div>



        </div>
        <!--Middle Part End-->
        <!--Right Part Start -->
        <aside class="col-sm-3 hidden-xs" id="column-right">
            <h2 class="subtitle">Account</h2>
            <div class="list-group">
                <ul class="list-item">
                    <li><a href="{{route('login')}}">Login</a>
                    </li>
                    <li><a href="{{route('register')}}">Register</a>
                    </li>
                    <li><a href="#">Forgotten Password</a>
                    </li>
                    <li><a href="#">My Account</a>
                    </li>
                    <li><a href="#">Address Books</a>
                    </li>
                    <li><a href="#">Wish List</a>
                    </li>
                    <li><a href="#">Order History</a>
                    </li>

                </ul>
            </div>			</aside>
        <!--Right Part End -->
    </div>
@endsection
