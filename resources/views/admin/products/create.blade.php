@extends('layouts.admin');

@section('content')
<div class="content-wrapper">
    <style>
        .uper {
            margin: 0px auto;
        }
    </style>
    <div class="card uper col-10">
        <div class="card-header">
            أضافة وجبة
        </div>
        <div class="card-body">
            <form method="post" action="{{url('/admin/products/store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">اسم منتج:</label>
                    <input type="text" class="form-control" name="product_name" />
                </div>
                <div class="form-group">
                    <label for="name">تفاصيل المنتج:</label>
                    <input type="textarea" class="form-control" name="product_details" />
                </div>
                <div class="form-group">
                    <label for="price">سعر المنتج :</label>
                    <input type="text" class="form-control" name="product_price" />
                </div>
                <div class="form-group">
                    <label for="quantity">كمية المنتج:</label>
                    <input type="text" class="form-control" name="product_quantity" />
                </div>
                <div class="form-group">
                    <label for=""> صورة المنتج :</label>
                    <input type="file" id="" class="form-control" name="image" required>
                </div>
                <button type="submit" class="btn btn-primary">إضافة المنتج</button>
            </form>
        </div>
    </div>
</div>
<script src="js/app.js" type="text/js"></script>

@endsection
