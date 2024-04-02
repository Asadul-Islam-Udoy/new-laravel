<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Models\Product;
use App\Models\product_image;
use App\Models\NewPshow;
use File;

class ProductController extends Controller
{
public function index(){
    $products = Product::orderBy('id','desc')->with('images')->get();
    $img =  NewPshow::orderBy('id','desc')->get();
    return view('products.index',compact('products','img'));
}

public function create(){
    return view('products.product_create');
}
public function manage(){
    $products = Product::orderBy('id','desc')->with('images')->get();
    return view('products.product_manage',compact('products'));
}
public function store(Request $request){
     $products = new Product;
     $products->title = $request->title;
     $products->description = $request->description;
     $products->slug = str($products->title);
     $products->quantity = $request->quantity;
     $products->price = $request->price;
     $products->category_id = 1;
     $products->brand_id = 1;
     $products->admin_id = 1;
     $products->save();
    /* if ($request->hasFile('image')){

        $image = $request->file('image');
        $img = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('product/'.$img);
        Image::make($image)->save($location);
        $products->image = $img;
        $products->save();
     }*/
     if ($request->hasFile('image')){
        $image = $request->file('image');
        $img = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('product/'.$img);
        Image::make($image)->save($location);
        $product = new product_image();
         $product->product_id = $products->id;
         $product->image = $img;
         $product->save();
 }
     if(count($request->product_image) > 0){
        foreach( $request->product_image as $image){
             $img = time().'.'.$image->getClientOriginalExtension();
             $location = public_path('product/'.$img);
             Image::make($image)->save($location);
             $product = new product_image();
             $product->product_id = $products->id;
             $product->image = $img;
             $product->save();
        }
    }
        
     return redirect()->route('products.manage');
}
public function destory($id){
  $products = Product::findOrFail($id);
  $products->delete();
  $imagePath = product_image::select('image')->where('product_id',$id)->get();
  foreach($imagePath as $image){
    if(File::exists('product/'.$image->image)){
        File::delete('product/'.$image->image);
        $product = product_image::where('product_id',$id)->delete();
    }
    else{
        $product = product_image::where('product_id',$id)->delete();
    }
}
return redirect()->route('products.manage');
  }



  public function edit_create($id){
    $products = Product::find($id);
    return view ('products.product_edit',compact('products'));
  }

  public function edit(Request $request,$id){
    $products = Product::find($id);
    $products->title = $request->title;
    $products->description = $request->description;
    $products->price = $request->price;
    $products->quantity = $request->quantity;
    $products->slug = str ($products->title);
    $products->save();
    $imagePath = product_image::select('image')->where('product_id',$id)->get();
    foreach($imagePath as $image){
    if(File::exists('product/'.$image->image)){
        File::delete('product/'.$image->image);
        $peoducts = product_image::where('product_id',$id)->delete();
    }
    else{
        $peoducts = product_image::where('product_id',$id)->delete();
    }
}
if($request->hasFile('image')){
    $image = $request->file('image');
    $img = time().'.'.$image->getClientOriginalExtension();
    $location = public_path('product/'.$img);
    Image::make($image)->save($location);
    $cover_image = new product_image;
    $cover_image ->product_id = $products->id;
    $cover_image->image = $img;
    $cover_image->save();
}
if(count($request->product_image) > 0){
    foreach($request->product_image as $image){
    $img = time().'.'.$image->getClientOriginalExtension();
    $location = public_path('product/'.$img);
    Image::make($image)->save($location);
    $other_image = new product_image;
    $other_image ->product_id = $products->id;
    $other_image->image = $img;
    $other_image->save();
    }
}
    return redirect()->route('products.manage');

  }
 

public function show($slug){
    $products = Product::where('slug',$slug)->with('images')->firstOrFail();
    return view("products.showProduct",compact("products"));
}
public function delete(Request $request){
    $ids = $request->id;
   Product::whereIn('id',$ids)->delete();
   product_image::whereIn('product_id',$ids)->delete();

   return redirect()->route('products.manage');
}
public function Ncreate(){
    return view('products.newProductShow');
}
public function Nstore(Request $request){
}
}