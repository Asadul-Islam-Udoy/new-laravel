<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;

class DivisionController extends Controller
{
    public function index(){
        $division = Division::orderBy('priority','asc')->get();
        return view('db+bis.division',compact('division'));
    }
    public function create(){
        return view('db+bis.division_create');
    }
    public function store(Request $request){
        $division = new Division();
        $division->name = $request->name;
        $division->priority = $request->priority;
        $division->save();
        return redirect()->route('division.index');
    }
   
}
