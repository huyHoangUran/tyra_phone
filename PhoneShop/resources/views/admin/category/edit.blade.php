@extends('layouts.master')
@section('title','Edit a category')
@section('content-title','Sửa danh mục')
@section('content')
<div class="col-md-8 ">
    <form method="POST" action="{{route('admin.category.update',['id'=>$data->id])}}" enctype="multipart/form-data">
      @csrf
      @method('put')
      {{-- input category name --}}
      <div class="form-group">
        <label for="">Category name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter category name" value="{{$data->name}}">
        @error('name')
            <p class="text-danger">{{ $message }}</p>
            
        @enderror
      </div>
  
      
  
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection