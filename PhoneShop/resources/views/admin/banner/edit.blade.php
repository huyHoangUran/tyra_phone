@extends('layouts.master')
@section('title', 'Edit a category')
@section('content-title', 'Sửa Banner')
@section('content')
    <div class="col-md-8 ">
        <form method="POST" action="{{ route('admin.banner.update', ['id' => $data->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('put')




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
