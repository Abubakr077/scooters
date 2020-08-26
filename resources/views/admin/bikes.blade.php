@extends('admin/layout')

@section('content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Bikes<small>details</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin/home"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Bikes</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content ">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Bikes</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>Brand</th>
                                    <th>Manufacture Date</th>
                                    <th>Eng. Type</th>
                                    <th>Eng. Capacity</th>
                                    <th>Body Type</th>
                                    <th>Color</th>
                                    <th>Condition</th>
                                    <th>Seller Name</th>
                                    <th>Seller Phone</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Registered City</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Province</th>
                                    <th>Created At</th>
                                    <th>Update Item</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($bikes as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->brand}}</td>
                                        <td>{{$item->date}}</td>
                                        <td>{{$item->engine_type}}</td>
                                        <td>{{$item->engine_capacity}}</td>
                                        <td>{{$item->body_type}}</td>
                                        <td>{{$item->color}}</td>
                                        <td>{{$item->condition}}</td>
                                        <td>{{$item->seller_name}}</td>
                                        <td>{{$item->seller_phone}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>{{$item->registration_city}}</td>
                                        <td>{{$item->city_area}}</td>
                                        <td>{{$item->city}}</td>
                                        <td>{{$item->province}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <form action="/admin_bikes/{{$item->id}}/edit" method="get">
                                                <button type="submit" class="btn btn-primary ">Edit</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>



    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
@endsection
