<div class="mt-5">
<table class="table">
 <thead class="bg-success text-white fw-bold">
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Quantity</th>
    <th>Product Image</th>
    <th>Edit</th>
    <th>Delete</th>
 </thead>
 <tbody>
 @foreach ($products as $product)
    <tr>
    <td class="align-middle">{{$product->ProductName}}</td>
    <td class="align-middle">{{$product->ProductPrice}}</td>
    <td class="align-middle">{{$product->Quantity}}</td>
    <td class="align-middle"><img src="{{ asset('uploads/' .$product->ProductImage) }}" class="img-thumbnail"></td>
    <td><a href="{{route('product.edit',$product->id)}}" class="btn btn-light">Edit</a></td>    
    <form action="{{route('product.destroy',$product->id)}}" method="POST">
        @csrf
        @method('DELETE')
    <!-- <td><a href="" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete')">Delete</a></td>     -->
    <td>
    <button type="submit" class="btn btn-light" onclick="return confirm('Are you sure you want to delete')"> Delete
</button>
    </td>

    </form>
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