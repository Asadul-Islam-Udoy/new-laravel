<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\District;

class DistrictController extends Controller
{
    public function index(){
        $district = District::orderBy('name','asc')->with('division')->get();
        return view('db+bis.district',compact('district'));
    }
    public function create(){
        $divisions = Division::orderBy('priority','asc')->get();
        return view('db+bis.district_create',compact('divisions'));
    }
    public function store(Request $request){
        $district = new District();
        $district->name = $request->name;
        $district->division_id = $request->division_id;
        $district->save();
        return redirect()->route('district.index');
    }
    public function delete(Request $request,$id){
     $district = District::findOrFail($id);
     $district ->delete();
     return redirect()->route('district.index');
    }
}
