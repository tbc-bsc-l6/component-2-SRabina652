<div class="mt-5">
<table class="table table-hover">
 <thead class="bg-success text-white fw-bold">
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Quantity</th>
    <th>Product Image</th>
 </thead>
 <tbody>
 @foreach ($products as $product)
    <tr>
    <td class="align-middle">{{$product->ProductName}}</td>
    <td class="align-middle">{{$product->ProductPrice}}</td>
    <td class="align-middle">{{$product->Quantity}}</td>
    <td class="align-middle"><img src="{{ asset('uploads/' .$product->ProductImage) }}" class="img-thumbnail"></td>
    </tr>
 @endforeach
 </tbody>
</table>
<div class="d-flex">
    <div class="mx-auto">
        {!! $products->links() !!}
    </div>

</div>
</div>