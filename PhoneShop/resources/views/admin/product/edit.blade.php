@extends('layouts.master')
@section('title','Create a product')
@section('content-title','sửa sản phẩm')
@section('content')
<div class="col-md-8 ">
  <form method="POST" action="{{route('admin.product.update',['id'=>$data->id])}}" enctype="multipart/form-data">
    @csrf
    @method('put')

    {{-- input product name --}}


    <div class="form-group">
      <label for="exampleInputEmail1">Product name</label>
      <input type="text" class="form-control" name="product_name" placeholder="Enter product name" value="{{$data->product_name}}">
      @error('product_name')
          <p class="text-danger">{{ $message }}</p>
          
      @enderror
    </div>
    {{-- input product price --}}

    <div class="form-group">
        <label for="exampleInputEmail1">Product price</label>
        <input type="text" class="form-control" name="price" placeholder="Enter product price" value="{{$data->price}}">
        @error('price')
          <p class="text-danger">{{ $message }}</p>
          
        @enderror
    </div>
    {{-- input product quantity --}}
    
    <div class="form-group">
      <label for="exampleInputEmail1">Product quantity</label>
      <input type="text" class="form-control" name="quantity" placeholder="Enter product quantity" value="{{$data->quantity}}">
      @error('quantity')
          <p class="text-danger">{{ $message }}</p>
          
      @enderror
    </div>
    {{-- input product image --}}

    <div class="form-group">
      <label for="">Product image</label>
      <input type="file" class="form-control"  name="image" >
      <img
          class="w-25"
          src="{{ $data->image?asset('storage/'.$data->image):'' }}"
          alt=""
      />
    </div>
    {{-- input product name --}}

    <div class="form-group">
      <label for="">Product description</label>
      <div>
        <textarea name="description" id="" class="block" cols="80" rows="10" >{{$data->description}}</textarea>
      </div>
      @error('description')
          <p class="text-danger">{{ $message }}</p>
          
      @enderror
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Product category</label>
      <select name="category_id"  id="">
          @foreach($cate as $item):
          <option value="{{$item->id}}" {{$data->category_id == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
          @endforeach
      </select>
      @error('category_id')
          <p class="text-danger">{{ $message }}</p>
          
      @enderror
    </div>
   

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
