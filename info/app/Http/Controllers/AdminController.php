<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\District;

class AdminController extends Controller
{
    public function index(){
        return view("admin.dashbord");
    }
    public function create(){
        $division = Division::orderBy('priority','asc')->get();
        $district = District::orderBy('name','asc')->get();
        return view('admin.registration_create',compact('division','district'));
    }
}
