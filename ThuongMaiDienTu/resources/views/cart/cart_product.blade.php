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
{{--                @if(\Session::has('thongbao'))--}}
{{--                    <div class="alert alert-success">--}}
{{--                        {{Session::get('thongbao')}}--}}
{{--                    </div>--}}
{{--                @endif--}}
                <div class="row " style="margin-top: 100px;margin-bottom: 30px">
                    <div class="col-md-4">
                        <h3>Quản lý sản phẩm</h3>
                    </div>
                    <div class="col-md-4">
                        <a href="{{route('index')}}" class="btn btn-primary float-right">Thêm mới</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{route('loguot')}}" class="btn btn-primary float-right">Đăng xuất</a>
                    </div>
                </div>
            </div>
            <div class="cart-body">
                @if(\Session::has('thongbao'))
                    <div class="alert alert-success">
                        {{Session::get('thongbao')}}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Phân loại</th>
                        <th>Mô tả</th>
                        <th>Giá</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($product as $pr)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$pr->pro_sku}}</td>
                                <td>{{$pr->pro_name}}</td>
                                <td>{{$pr->pro_keyword}}</td>
                                <td>{{$pr->pro_descr}}</td>
                                <td>{{$pr->pro_cost}}</td>
                                <td><a href="edit/{{$pr->id}}" class="btn btn-primary">Sửa</a></td>
                                <td><a href="delete/{{$pr->id}}" class="btn btn-danger">Xóa</a></td>
{{--                                <td>--}}
{{--                                    <form action="{{route('delete',$pr->id)}}" method="post">--}}
{{--                                        <a href="{{route('viewedit',$pr->id)}}" class="btn btn-info"> Sửa</a>--}}
{{--                                        <a type="submit" class="btn btn-danger">Xóa</a>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
