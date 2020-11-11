@extends('admin/layout')

@section('content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Feedback<small>details</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin/home"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Users Feedback</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content ">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Users Feedback</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>City</th>
                                    <th>Province</th>
                                    <th>Message</th>
                                    <th>Created At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($bikes as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->city}}</td>
                                        <td>{{$item->province}}</td>
                                        <td>{{$item->message}}</td>
                                        <td>{{$item->created_at}}</td>
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
