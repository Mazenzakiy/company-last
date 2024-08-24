<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function create(){
        return view('admin.add-admin');
    }

    public function store(Request $request){
        return view('admin.index');
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
