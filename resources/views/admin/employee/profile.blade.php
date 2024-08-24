@extends('layout.master')


@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Profile</h2>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>mazen adel mohamed zakiy</td>
                <td>mazen@admin.com</td>
                <td>
                    <a href="{{route('admins.edit')}}" class="btn btn-primary btn-sm">Edit</a>
                </td>
            </tr>


        </tbody>
    </table>
</div>
@endsection
