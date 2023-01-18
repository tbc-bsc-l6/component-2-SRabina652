
@extends('admin.layout.adminlayout')
@section('title',"Add Users")
@section('content')
    <div class="container mt-1 mx-5">
        <!-- <h1>Add user</h1> -->
        <form method="POST" action="{{url('/')}}/admin/addUsers">
            @csrf

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{old('email')}}" />
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">dob</label>
                <input type="date" class="form-control" name="dob" value="{{old('dob')}}">
                @error('dob')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">address</label>
                <input type="text" class="form-control" name="address" value="{{old('address')}}">
                @error('address')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Status:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                
                <input type="radio" id="Admin" name="status" value="1">
                <label for="Admin">Admin&nbsp;&nbsp;</label>
                <input type="radio" id="User" name="status" value="0">
                <label for="User">User&nbsp;&nbsp;</label>
                @error('status')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <!-- gender  -->
            <div class="mt-4">
                <label for="Male">Gender:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="radio" id="Male" name="gender" value="M">
                <label for="Male">Male&nbsp;&nbsp;</label>
                <input type="radio" id="Female" name="gender" value="F">
                <label for="Female">Female&nbsp;&nbsp;</label>
                <input type="radio" id="Other" name="gender" value="O">
                <label for="Other">Other</label><br>
            </div>

            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

                <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
    @endsection