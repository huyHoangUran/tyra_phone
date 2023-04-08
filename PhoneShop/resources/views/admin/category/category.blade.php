@extends('layouts.master')
@section('title','danh mục sản phẩm')
@section('content-title','Danh sách danh mục')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sanh mục</th>
                <th> <a class="btn btn-success" href="{{route('admin.category.create')}}">Thêm</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cate as $key=> $item )
                <tr>
                    <td scope="row">{{$key+=1}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.category.edit',['id'=>$item->id])}}">Sửa</a>
                        <form action="{{route('admin.category.destroy',['id'=>$item->id])}}" method="POST">
                            @csrf
                            @method('delete')
        
                            <button class="btn btn-danger" >Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection