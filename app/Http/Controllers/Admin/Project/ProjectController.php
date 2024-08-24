<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view('admin.project.index');
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
