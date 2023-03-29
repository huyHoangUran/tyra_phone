@extends('layouts.master')
@section('title','Trang chủ')
@section('content-title','Danh sách sản phẩm')
@section('content')
<table class="table ">
    <thead class="thead-inverse">
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Loại sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>ảnh</th>
            <th> <a href="/admin/product/create">Tạo mới</a>
            </th>
        </tr>
        </thead>
        <tbody>
           @foreach($all as $key=> $item)
           <tr>
            <td>{{$key}}</td>
            <td>{{$item->product_name}}</td>
            <td>{{$item->Category->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->quantity}}</td>
            <td><img src="{{$item->image?asset('storage/'.$item->image):''}}" alt=""></td>
            </tr>
           @endforeach
            
        </tbody>
</table>
@endsection
