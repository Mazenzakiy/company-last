@extends('layout.master')


@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Add New Admin</h2>

    <form action="{{route('admins.store')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label for="fn"> Name</label>
            <input type="text" class="form-control" id="fn" placeholder="Name Here" name="name">
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="Email" placeholder="Email Here" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="put your password" name="password">
        </div>

        <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" class="form-control" id="confirm-password" placeholder="confirm password" name="confirm-password">
        </div>

        <button class="btn btn-primary" type="submit" name="submit">Add</button>
    </form>
</div>



@endsection
