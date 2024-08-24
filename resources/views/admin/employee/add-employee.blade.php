@extends('layout.master')


@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Add New employee</h2>
    <form action="{{route('admins.employee.store')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label for="ssn"> ssn</label>
            <input type="text" class="form-control" id="ssn" placeholder="ssn Here" name="ssn">
        </div>
        <div class="form-group">
            <label for="fn"> FName</label>
            <input type="text" class="form-control" id="fn" placeholder="FName Here" name="fname">
        </div>
        <div class="form-group">
            <label for="ln"> LName</label>
            <input type="text" class="form-control" id="ln" placeholder="LName Here" name="lname">
        </div>
        <div class="form-group">
            <label for="date"> Date</label>
            <input type="date" class="form-control" id="date" placeholder="date Here" name="date">
        </div>
        <div class="form-group">
            <label for="address"> Address</label>
            <input type="address" class="form-control" id="address" placeholder="address Here" name="address">
        </div>
        <div class="form-group">
            <label for="image"> images</label>
            <input type="file" class="form-control" id="image" placeholder="images Here" name="images[]" multiple>
        </div>

        <div class="form-check">
                        <input class="form-check-input" type="radio" id="male" name="gendre" value="m">
                        <label class="form-check-label" for="male">male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="female" name="gendre" value="f">
                        <label class="form-check-label" for="female">female</label>
                    </div>
        <div class="form-group">
            <label for="salary">salary</label>
            <input type="number" class="form-control" id="salary" placeholder="put your salary" name="salary">
        </div>

        <div class="form-group">
                        <label for="SuperVisorName">Choose a Super Visor Name:</label>
                        <select class="form-control" id="SuperVisorName" name="SuperVisorName">


                            <option value="1">EmployeeName 1</option>
                            <option value="2">EmployeeName 2</option>
                            <option value="3">EmployeeName 3</option>


                        </select>
        </div>

        <div class="form-group">
                        <label for="DepartmentName">Choose a DepartmentName:</label>
                        <select class="form-control" id="DepartmentName" name="DepartmentName">
                            <option value="department 1">department 1</option>
                            <option value="department 2">department 2</option>
                            <option value="department 3">department 3</option>
                        </select>
        </div>


        <button class="btn btn-primary" type="submit" name="submit">Add</button>
    </form>
</div>

@endsection
