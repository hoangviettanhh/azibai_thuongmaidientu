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
                    <h3>Sửa sản phẩm</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('home')}}" class="btn btn-primary float-end">Danh sách sản phẩm</a>
                </div>
            </div>
        </div>
        <div class="cart-body">
            @foreach($product as $value)
            <form action="{{route('updateproduct')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Tên sản phẩm</strong>
                            <input type="text" name="pro_name"  class="form-control" value="{{$value->pro_name}}">
                        </div>
                        <div class="form-group">
                            <strong>Mã sản phẩm</strong>
                            <input type="text" name="pro_sku" class="form-control" value="{{$value->pro_sku}}">
                        </div>
                        <div class="form-group">
                            <strong>Phân loại</strong>
                            <input type="text" name="pro_keyword"  class="form-control" value="{{$value->pro_keyword}}">
                        </div>
                        <div class="form-group">
                            <strong>Mô tả</strong>
                            <input type="text" name="pro_descr"  class="form-control" value="{{$value->pro_descr}}">
                        </div>
                        <div class="form-group">
                            <strong>Giá</strong>
                            <input type="text" name="pro_cost"  class="form-control" value="{{$value->pro_cost}}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2">Cập nhật</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>
@endsection
