@extends('layout.master')


@section('content')

<div class="container mt-5">
    <div class="btn-container" style="text-align: right;  margin-bottom: 10px;">
      {{-- <button class="btn btn-primary" href="{{route('admins.create')}}">Add New Admin</button> --}}
      <a href="{{route('admins.create')}}" class="btn btn-primary btn-sm">Add New Admin</a>
    </div>
    <h2 class="mb-4">Admins List</h2>




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
            <div class="container" style="margin: 10px;">
          <div class="row justify-content-end">
              <div class="col-auto">
                  <a href="edit-admin.php?id=" class="btn btn-primary btn-sm">Edit</a>
              </div>
              <div class="col-auto">
                  <a href="handlers/edit-admin-status.php?id=" class="btn btn-primary btn-sm">Active</a>
              </div>
          </div>
      </div>


            </td>
          </tr>


          <tr>
            <td>shady adel mohamed zakiy</td>
            <td>shady@admin.com</td>
            <td>
            <div class="container" style="margin: 10px;">
          <div class="row justify-content-end">
              <div class="col-auto">
                  <a href="edit-admin.php?id=" class="btn btn-primary btn-sm">Edit</a>
              </div>
              <div class="col-auto">
                  <a href="handlers/edit-admin-status.php?id=" class="btn btn-primary btn-sm">Active</a>
              </div>
          </div>
      </div>


            </td>
          </tr>

      </tbody>
    </table>
  </div>

@endsection
