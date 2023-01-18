
@extends('admin.layout.adminlayout')
@section('title',"ProductDisplay")
@section('content')

<div class="container mt-1">
@if($success = \Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
   {{$success}}
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<!-- <div class="text-right">
<button type="button" class="btn btn-outline-success fw-bold">
  <a href="{{route('product.create')}}" class="link">AddProduct</a>  
  </button>
<div> -->
  <h3>Display Products</h3>
@if($products)
<x-display-products :products="$products"/> 
@endif
</div>
</div>
</div>
@endsection
<!-- </body>
</html> -->