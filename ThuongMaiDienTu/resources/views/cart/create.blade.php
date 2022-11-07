@extends('_layout.layout')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="cart">
        <div class="cart-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Thêm sản phẩm</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('home')}}" class="btn btn-primary float-end">Danh sách sản phẩm</a>
                </div>
            </div>
        </div>
        <div class="cart-body">
            <form action="{{route('getproduct')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Mã sản phẩm</strong>
                            <input type="text" name="pro_sku" class="form-control" placeholder="Nhập mã sản phẩm">
                        </div>
                        <div class="form-group">
                            <strong>Tên sản phẩm</strong>
                            <input type="text" name="pro_name" class="form-control" placeholder="Nhập tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <strong>Phân loại</strong>
                            <input type="text" name="pro_keyword" class="form-control" placeholder="Phân loại sản phẩm">
                        </div>
                        <div class="form-group">
                            <strong>Mô tả</strong>
                            <input type="text" name="pro_descr" class="form-control" placeholder="Mô tả sản phẩm">
                        </div>
                        <div class="form-group">
                            <strong>Giá</strong>
                            <input type="text" name="pro_cost" class="form-control" placeholder="Giá sản phẩm">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2">Save</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
@endsection
