@extends('layouts.master')
@section('title','Trang chủ')
@section('content-title','Danh sách sản phẩm')
@section('content')
<table class="table ">
    <a href="{{route('admin.product.archive')}}">Đã xóa</a>
    <thead class="thead-inverse">
        
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Loại sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>ảnh</th>
            <th> <a href="{{route('admin.product.create')}}" class="btn btn-success">Tạo mới</a>
            </th>
        </tr>
        </thead>
        <tbody>
           @foreach($all as $key=> $item)
           <tr>
            <td>{{$key+=1}}</td>
            <td>{{$item->product_name}}</td>
            <td>{{$item->Category->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->quantity}}</td>
            <td ><img class="w-25" src="{{$item->image?asset('storage/'.$item->image):''}}" alt=""></td>
            <td>
                <a href="{{route('admin.product.edit',['id'=>$item->id])}}" class="btn btn-primary">Sửa</a>
                <form action="{{route('admin.product.destroy',['id'=>$item->id])}}" method="POST">
                    @csrf
                    @method('delete')

                    <button class="btn btn-danger" >Xóa</button>
                </form>
            </tr>
           @endforeach
            
        </tbody>
</table>
@endsection
