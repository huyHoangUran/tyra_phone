@extends('layouts.master')
@section('title', 'Show banner')
@section('content-title', 'Banner')
@section('content')
    <table class="table ">
        <a href="{{ route('admin.product.archive') }}">Đã xóa</a>
        <thead class="thead-inverse">

            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Ảnh</th>
                <th>Trạng thái</th>
                <th> <a href="" class="btn btn-success">Tạo mới</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $key => $item)
                <tr>
                    <td>{{ $key += 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td><img class="w-50 h-50" src="{{ $item->image ? asset('storage/' . $item->image) : '' }}" alt="">
                    </td>
                    <td>
                        {{ $item->status == 1 ? 'Hiện' : 'Ẩn' }}



                    </td>
                    <td>
                        <a href="{{ route('admin.product.edit', ['id' => $item->id]) }}" class="btn btn-primary">Sửa</a>
                        <form action="{{ route('admin.product.destroy', ['id' => $item->id]) }}" method="POST">
                            @csrf
                            @method('delete')

                            <button class="btn btn-danger">Xóa</button>
                        </form>
                </tr>
            @endforeach

        </tbody>
    </table>


@endsection
