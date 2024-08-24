<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        return view('admin.department.index');
    }

    public function create(){
        return view('admin.employee.add-employee');
    }

    public function store(Request $request){
        return view('admin.employee.index');
    }

    public function editForm(){
        return view('admin.edit');
    }

    public function edit(Request $request){
        return view('admin.index');
    }

    public function profile(){
        return view('admin.profile');
    }

}
