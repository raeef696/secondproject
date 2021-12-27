@extends('layouts.admin');


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Products</h3>
                </div>
            </div>

            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th width="280px">Actions</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Shirt 1</td>
                    <td>29.49 $</td>
                    <td>5</td>
                    <td>
                        <a class="btn btn-info" href="#">Edit</a>

                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Shirt 2</td>
                    <td>24.99 $</td>
                    <td>8</td>
                    <td>
                        <a class="btn btn-info" href="#">Edit</a>

                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Shirt 3</td>
                    <td>19.95 $</td>
                    <td>1</td>
                    <td>
                        <a class="btn btn-info" href="#">Edit</a>

                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
            </table>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection




