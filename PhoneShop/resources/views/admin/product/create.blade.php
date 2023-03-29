@extends('layouts.master')
@section('title','Create a product')
@section('content-title','Tạo mới sản phẩm')
@section('content')
<div class="col-md-8 ">
  <form method="POST" action="/admin/product/store" enctype="multipart/form-data">
    @csrf
    {{-- input product name --}}
    <div class="form-group">
      <label for="exampleInputEmail1">Product name</label>
      <input type="text" class="form-control" name="product_name" placeholder="Enter product name">
      @error('product_name')
          <p class="text-danger">{{ $message }}</p>
          
      @enderror
    </div>
    {{-- input product price --}}

    <div class="form-group">
        <label for="exampleInputEmail1">Product price</label>
        <input type="text" class="form-control" name="price" placeholder="Enter product price">
        @error('price')
          <p class="text-danger">{{ $message }}</p>
          
        @enderror
    </div>
    {{-- input product quantity --}}
    
    <div class="form-group">
      <label for="exampleInputEmail1">Product quantity</label>
      <input type="text" class="form-control" name="quantity" placeholder="Enter product quantity">
      @error('quantity')
          <p class="text-danger">{{ $message }}</p>
          
      @enderror
    </div>
    {{-- input product image --}}

    <div class="form-group">
      <label for="exampleInputEmail1">Product image</label>
      <input type="file"  class="form-control" name="image"  placeholder="Enter product ">
    </div>
    {{-- input product name --}}

    <div class="form-group">
      <label for="exampleInputEmail1">Product description</label>
      {{-- <input type="text" class="form-control" name="description" placeholder="Enter product description"> --}}
      <textarea name="description" id="" cols="30" rows="10"></textarea>
      @error('description')
          <p class="text-danger">{{ $message }}</p>
          
      @enderror
    </div>
    {{-- input product cate --}}

    <div class="form-group">
      <label for="exampleInputEmail1">Product category</label>
      {{-- <input type="text" class="form-control" name="quantity" placeholder="Enter product quantity"> --}}
      <select name="category_id" id="">
          @foreach($listCategories as $item):
          <option value="{{$item->id}}">{{$item->name}}</option>
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
