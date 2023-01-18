
@extends('admin.layout.adminlayout')
@section('title',"AddProduct")
@section('content')
    <div class="container mt-2 px-3">
    <h1 class="text-center">Add Product</h1>
    <form action="{{route ('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="mb-3">
    <label for="exampleInputName" class="form-label">Product Name</label>
    <input type="text" class="form-control" name="ProductName" value ="{{old('ProductName')}}">
    @error('ProductName')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputprice" class="form-label">Product Price</label>
    <input type="number" class="form-control" name="ProductPrice" value ="{{old('ProductPrice')}}"/>
    @error('ProductPrice')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputquantity" class="form-label">Category:&nbsp;&nbsp;</label>
    <select name="category_id" id="" class="px-4 p-1">
      @foreach($data as $row)
      <option value="{{$row->id}}">{{$row->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputquantity" class="form-label">Quantity</label>
    <input type="number" class="form-control" name="Quantity" value ="{{old('Quantity')}}">
    @error('Quantity')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputImage" class="form-label">Product Image</label>
    <input type="file" class="form-control" name="ProductImage" value ="{{old('ProductImage')}}">
    @error('ProductImage')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-danger">Submit</button>
</form>
    </div>
</div>
@endsection