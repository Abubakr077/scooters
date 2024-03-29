@extends('layouts/layout')

@section('content')

    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
            <h2 class="title">Checkout</h2>
            <div class="so-onepagecheckout ">
                <form role="form" method="post" action="{{'/'.auth()->user()->id.'/orders'}}" enctype="multipart/form-data">
                    @csrf
                <div class="col-left col-sm-3">
                    <div class="panel panel-default">
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
                        </div>
                        <div class="panel-body">
                            <fieldset id="account">
                                <div class="form-group required">
                                    <label for="input-payment-firstname" class="control-label">Name</label>
                                    <input type="text" class="form-control" id="input-payment-firstname" placeholder="Name" value="{{auth()->user()->name}}" name="user_name">
                                </div>
                                <div class="form-group required">
                                    <label for="input-payment-email" class="control-label">E-Mail</label>
                                    <input type="text" class="form-control" id="input-payment-email" placeholder="E-Mail" value="{{auth()->user()->email}}" name="user_email">
                                </div>
                                <div class="form-group required">
                                    <label for="input-payment-telephone" class="control-label">Telephone</label>
                                    <input type="text" class="form-control" id="input-payment-telephone" placeholder="Telephone" value="{{auth()->user()->phone}}" name="user_phone">
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><i class="fa fa-book"></i> Your Address</h4>
                        </div>
                        <div class="panel-body">
                            <fieldset id="address" class="required">
                                <div class="form-group required">
                                    <label for="input-payment-address-1" class="control-label">Address</label>
                                    <input type="text" class="form-control" id="input-payment-address-1" placeholder="Address" value="{{ old('address', auth()->user()->city_area) }}" name="address">
                                </div>
                                <div class="form-group required">
                                    <label for="input-payment-zone" class="control-label">City</label>
                                    <select class="form-control" id="input-payment-zone" name="city">
                                        <option value=""> --- Please Select --- </option>
                                        @foreach((array)config('constants.CITIES') as $city)
                                            <option value="{{$city}}" {{ auth()->user()->city==$city ? 'selected' : '' }}>
                                                {{$city}}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                                <label class="contact">Province
                                    <select class="form-control" name="postcode">
                                        <option value=""> --- Please Select --- </option>
                                        <option value="Punjab" {{ auth()->user()->province=='Punjab' ? 'selected' : ''  }}>Punjab</option>
                                        <option value="Sindh" {{ auth()->user()->province=='Sindh' ? 'selected' : ''  }}>Sindh</option>
                                        <option value="KPK" {{ auth()->user()->province=='KPK' ? 'selected' : ''  }}>KPK</option>
                                        <option value="Balochistan" {{ auth()->user()->province=='Balochistan' ? 'selected' : ''  }}>Balochistan</option>
                                        <option value="Azad Kashmir" {{ auth()->user()->province=='Azad Kashmir' ? 'selected' : ''  }}>Azad Kashmir</option>
                                        <option value="Federally Administered Tribal Areas" {{ auth()->user()->province=='Federally Administered Tribal Areas' ? 'selected' : ''  }}>Federally Administered Tribal Areas</option>
                                    </select></label>
                                <div class="form-group required">
                                    <label for="input-payment-country" class="control-label">Country</label>
                                    <select class="form-control" id="input-payment-country" name="country">
                                        <option value="pakistan">Pakistan</option>
                                    </select>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked="checked" value="1" name="shipping_address">
                                        My delivery and billing addresses are the same.</label>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-right col-sm-9">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default no-padding">

                                <div class="col-sm-6  checkout-payment-methods">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method</h4>
                                    </div>
                                    <div class="panel-body">
                                        <p>Please select the preferred payment method to use on this order.</p>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" checked="checked" name="Payment">Cash On Delivery</label>
                                        </div>

                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="Payment">Jazz Cash</label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="Payment">EasyPaisa</label>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>


                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <td class="text-center">Image</td>
                                                <td class="text-left">Product Name</td>
                                                <td class="text-left">Quantity</td>
                                                <td class="text-right">Unit Price</td>
                                                <td class="text-right">Total</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($items as $item)
                                            <tr>
                                                <td class="text-center"><a href="#"><img width="60px" src="{{asset($item->options->picture)}}" alt="Xitefun Causal Wear Fancy Shoes" title="Xitefun Causal Wear Fancy Shoes" class="img-thumbnail"></a></td>
                                                <td class="text-left"><a href="#">{{$item->name}}</a></td>
                                                <td class="text-left"><div class="input-group btn-block checkout" style="min-width: 100px;">
                                                        <input type="text" disabled value="{{$item->qty}}" size="1" class="form-control">
                                                        <span class="input-group-btn">
																											<button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
																											<button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
																										</span></div></td>
                                                <td class="text-right">RS {{$item->price}}</td>
                                                <td class="text-right">RS {{$item->price*$item->qty}}</td>
                                            </tr>
                                            @endforeach

                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
                                                <td class="text-right">RS {{$total}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="4"><strong>Flat Shipping Rate:</strong></td>
                                                <td class="text-right">RS 0</td>
                                            </tr>


                                            <tr>
                                                <td class="text-right" colspan="4"><strong>Total:</strong></td>
                                                <td class="text-right">RS {{$total}}</td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-ticket"></i> Do you Have a Coupon or Voucher?</h4>
                                </div>
                                <div class="panel-body row">
                                    <div class="col-sm-6 ">
                                        <div class="input-group panel-body-1">
                                            <input type="text" class="form-control" id="input-coupon" placeholder="Enter your coupon here" value="" name="coupon">
                                            <span class="input-group-btn">
																						<input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-coupon" value="Apply Coupon">
																					</span></div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="input-voucher" placeholder="Enter your gift voucher code here" value="" name="voucher">
                                            <span class="input-group-btn">
																							<input type="submit" class="btn btn-primary" data-loading-text="Loading..." id="button-voucher" value="Apply Voucher">
																						</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-pencil"></i> Add Comments About Your Order</h4>
                                </div>
                                <div class="panel-body">
                                    <textarea rows="4" class="form-control" id="confirm_comment" name="comment"></textarea>
                                    <br>
                                    <label class="control-label" for="confirm_agree">
                                        <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
                                        <span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a></span> </label>
                                    <div class="buttons">
                                        <div class="pull-right">
                                            <input type="submit" class="btn btn-primary" id="button-confirm" value="Confirm Order">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!--Middle Part End -->

    </div>
    @endsection
