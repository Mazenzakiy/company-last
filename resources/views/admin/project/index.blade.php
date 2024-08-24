@extends('layout.master')


@section('content')

<div class="container mt-5">
        <h2 class="mb-4">Project List</h2>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">projectId</th>
                    <th scope="col">projectName</th>
                    <th scope="col">projectLocation</th>
                    <th scope="col">city</th>
                    <th scope="col">departmentName</th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>


                <tr>
                    <td>Id</td>
                    <td>projectName</td>
                    <td>projectLocation</td>
                    <td>city</td>
                    <td>departmentName</td>
                    <td>
                        <a href="#?id=" class="btn btn-primary btn-sm">Edit</a>

                        <a href="#?id=" class="btn btn-danger btn-sm">delete</a>
                    </td>
                </tr>

                <tr>
                    <td>Id</td>
                    <td>projectName</td>
                    <td>projectLocation</td>
                    <td>city</td>
                    <td>departmentName</td>
                    <td>
                        <a href="#?id=" class="btn btn-primary btn-sm">Edit</a>

                        <a href="#?id=" class="btn btn-danger btn-sm">delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
