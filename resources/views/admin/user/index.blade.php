@extends('admin.layout.adminlayout')
@section('title',"All Users")
@section('content')

  <div class="container mt-1">
    <!-- <div class="text-right">
      <button type="button" class="btn btn-outline-success fw-bold">
        <a href="{{url('/')}}/admin/addUsers" class="link">AddUsers</a>
      </button>
    </div> -->
    <h3>All Users</h3>
    @if ($customers)
    <x-display-user :customers="$customers"/> 
     @endif
@endsection