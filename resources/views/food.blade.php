@extends('layouts.bodytemp')
@section('title',"Food Section")
@section('content')
<body>
  <header>
    <div>
      <nav class="navbar navbar-expand-lg nav-wrap">
        <div class="container">
          <x-navbar />
        </div>
      </nav>
    </div>
  </header>
  <section class="container pt-5">
    <div class="row mb-3">
      @forelse ($products as $prod)
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{asset('uploads/'.$prod->ProductImage)}}" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title capitalLetter">{{$prod->ProductName}}</h5>
          </div>
          <div class="d-inline p-3">
            @if($prod->Quantity > 0)
            <span class="px-3 text-success">In Stock</span>
            @else
            <span class="px-3 text-danger">Out of Stock</span>
            @endif
            <span class="px-4">${{$prod->ProductPrice}}</span>
          </div>

        </div>
      </div>
      @empty
      <div class="container text-center text-danger">
        <h3>No product available for {{$productCategory->name}}</h3>
      </div>
      @endforelse
    </div>

  </section>
@endsection