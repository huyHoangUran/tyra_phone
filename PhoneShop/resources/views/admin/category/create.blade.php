@extends('layouts.master')
@section('title','Create a category')
@section('content-title','Tạo mới danh mục')
@section('content')
<div class="col-md-8 ">
    <form method="POST" action="{{route('admin.category.store')}}" enctype="multipart/form-data">
      @csrf
      {{-- input category name --}}
      <div class="form-group">
        <label for="exampleInputEmail1">Category name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter category name" value="{{old('name')}}">
        @error('name')
            <p class="text-danger">{{ $message }}</p>
            
        @enderror
      </div>
  
      
  
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection