<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Products</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<div>
    <div class="container mt-5 p-5">
    <h1 class="text-center">Update Product</h1>
    <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="mb-3">
    <label for="exampleInputName" class="form-label">Product Name</label>
    <input type="text" class="form-control" name="ProductName" value="{{$product->ProductName}}">
    @error('ProductName')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputprice" class="form-label">Product Price</label>
    <input type="number" class="form-control" name="ProductPrice" value="{{$product->ProductPrice}}">
    @error('ProductPrice')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputquantity" class="form-label">Quantity</label>
    <input type="number" class="form-control" name="Quantity" value="{{$product->Quantity}}">
    @error('Quantity')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputImage" class="form-label">Product Image</label>
    <input type="file" class="form-control" name="ProductImage" value="{{asset('uploads/'.$product->ProductImage)}}">
    <img src="{{asset('uploads/'.$product->ProductImage)}}" width="60px" height="60px">
    @error('ProductImage')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-danger">Submit</button>
</form>
    </div>
</div>
</body>
</html>