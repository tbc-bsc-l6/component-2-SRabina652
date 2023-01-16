<div class="mt-5">
<table class="table">
      <thead class="bg-success text-white fw-bold">
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Email</th>
          <th>Address</th>
          <th>Dob</th>
          <th>Status</th>
          <th>Gender</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($customers as $customer)
        <tr>
          <td class="align-middle">{{$customer->id}}</td>
          <td class="align-middle">{{$customer->name}}</td>
          <td class="align-middle">{{$customer->email}}</td>
          <td class="align-middle">{{$customer->address}}</td>
          <td class="align-middle">{{$customer->dob}}</td>
          <td class="align-middle">{{$customer->status=='1'?'Admin':'User'}}</td>
          <td class="align-middle">{{$customer->gender}}</td>
          
          <form action="{{route('user.delete',$customer->id)}}" method="POST">
            @csrf
            {{method_field('delete')}}
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
        {!! $customers->links() !!}
    </div>

  </div>
</div>