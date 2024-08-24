@extends('layout.master')


@section('content')

<div class="container mt-5">
    <div style="text-align: right;">

        <a class="btn btn-primary"  href="{{route('admins.employee.createForm')}}">Add New employee</a>
    </div>
    <h2 class="mb-4">Employee List</h2>

    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>

                <th scope="col">EmployeeName</th>
                <th scope="col">address</th>
                <th scope="col">address</th>

                <th scope="col">ManagerName</th>
                <th scope="col">DepartmentName</th>
                <th scope="col"> </th>
                <th scope="col"> </th>
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>EmployeeName</td>
                    <td>address</td>

                    <td>salary</td>

                    <td>ManagerName</td>
                    <td>DepartmentName</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">Show</a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                    </td>

                    <td>
                    <a href="employees/handlers/delete-employee.php?id="
                           class="btn btn-danger btn-sm"
                           onclick="return confirmDelete();">Delete</a>  </td>
                </tr>

                <tr>
                    <td>EmployeeName</td>
                    <td>address</td>

                    <td>salary</td>

                    <td>ManagerName</td>
                    <td>DepartmentName</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">Show</a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                    </td>

                    <td>
                    <a href="employees/handlers/delete-employee.php?id="
                           class="btn btn-danger btn-sm"
                           onclick="return confirmDelete();">Delete</a>  </td>
                </tr>

        </tbody>
    </table>
</div>


@section('script')
<script>
function confirmDelete() {
    return confirm("Are you sure you want to delete this employee?");
}
</script>
@endsection


@endsection
