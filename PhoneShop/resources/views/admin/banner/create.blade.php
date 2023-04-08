@extends('layouts.master')
@section('title', 'Create a category')
@section('content-title', 'Thêm Banner')
@section('content')
    <div class="col-md-8 ">
        <form method="POST" action="{{ route('admin.banner.store') }}" enctype="multipart/form-data">
            @csrf
            {{-- input Banner name --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Banner name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter banner name"
                    value="{{ old('name') }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            {{-- input banner image --}}

            <div class="form-group">
                <label for="">Banner image</label>
                <input type="file" class="form-control" name="image">
            </div>

            {{-- input banner cate --}}

            <div class="form-group">
                <label for="exampleInputEmail1">banner status</label>
                <select name="status" id="">
                    <option selected value="0">Ẩn</option>
                    <option value="1">Hiện</option>
                </select>
                @error('status')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
