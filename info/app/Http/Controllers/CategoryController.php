<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Image;
use File;
class CategoryController extends Controller
{
public function create(){
    return view('categorys.category_create');
}
public function store(Request $request){
    $category = new Category;
    $category->name = $request->name;
    $category->description = $request->description;
    $category->price = $request->price;
    if($request->hasFile('image')){
        $image = $request->file('image');
        $img = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('category/'.$img);
        Image::make($image)->save($location);
        $category->image = $img;
    }

    $category->save(); 
    return redirect()->route('catrgory.manage');
}
public function manage(){
    $category = Category::orderBy('id','desc')->get();
    return view('categorys.category_manage',compact('category'));
}
public function destory($id){
    $category = Category::find($id);
    if(File::exists('category/'.$category->image)){
        File::delete('category/'.$category->image);
      }
        $category->delete();
     
    
   
   

}
public function edit_create($id){
    $category = Category::find($id);
    return view('categorys.category_edit',compact('category'));
}
public function edit(Request $request,$id){
$category = Category::find($id);
$category->name = $request->name;
$category->description = $request->description;
$category->price = $request->price;
$category->quantity = $request->quantity;
if(File::exists('category/'.$category->image)){
    File::delete('category/'.$category->image);
}
if($request->hasFile('image')){
  
    $image = $request->file('image');
    $img = time().'.'.$image->getClientOriginalExtension();
    $location = public_path('category/'.$img);
    Image::make($image)->save($location);
    $category->image = $img;
    $category->save();
}
$category->save();
return redirect()->route('catrgory.manage');
}
}
