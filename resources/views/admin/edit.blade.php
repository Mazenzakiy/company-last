@extends('layout.master')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Edit Admin</h2>
    <form action="{{route('admins.edit')}}" method="post" enctype="multipart/form-data">

        @csrf

        <input type="hidden" name="id" value="">
        <div class="form-group">
            <label for="fn"> Name</label>
            <input type="text" class="form-control" id="fn" value="mazen adel mohamed" name="name">
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="Email" value="mazen@gmail.com" name="email">
        </div>
        <div class="form-group">
            <label for="password">NewPassword</label>
            <input type="password" class="form-control" id="password" placeholder="put your new password" name="password">
        </div>

        <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" class="form-control" id="confirm-password" placeholder="confirm password" name="confirm-password">
        </div>

        <button class="btn btn-primary" type="submit" name="submit">Edit</button>
    </form>
</div>

@endsection
