@extends('layout.master')


@section('content')
<div class="container py-5">
    <div class="row">

        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Employees</div>
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between align-items-center">
                        <h5>800$</h5>
                        <a href="{{route('admins.employee.index')}}" class="btn btn-light">Show</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Deparments</div>
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between align-items-center">
                        <h5>500$</h5>
                        <a href="{{route('admins.department.index')}}" class="btn btn-light">Show</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Projects</div>
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between align-items-center">
                        <h5>600$</h5>
                        <a href="{{route('admins.project.index')}}" class="btn btn-light">Show</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
