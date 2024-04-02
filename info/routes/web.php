<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//verify
Route::group(['middleware' => ['verified']], function () {
    Route::get('user', [App\Http\Controllers\passController::class, 'login'])->name('user');
    Route::get('users', [App\Http\Controllers\passController::class, 'update'])->name('users');
    });
    //searchber
    Route::get('/homes',[App\Http\Controllers\PassController::class,'home'])->name('user.home');
    Route::get('/search',[App\Http\Controllers\PassController::class,'search'])->name('search');
   

    //category route
Route::get('/categorys',[App\Http\Controllers\CategoryController::class,'index'])->name('category');
Route::post('/category/store',[App\Http\Controllers\CategoryController::class,'store'])->name('categorys.store');
Route::get('/category/manage',[App\Http\Controllers\CategoryController::class,'manage'])->name('catrgory.manage');
Route::get('/category/show',[App\Http\Controllers\CategoryController::class,'show'])->name('category.show');
Route::get('/category/create',[App\Http\Controllers\CategoryController::class,'create'])->name('category.create');
Route::get('/category/edit_create/{id}',[App\Http\Controllers\CategoryController::class,'edit_create'])->name('category.edit_create');
Route::post('/category/edit/{id}',[App\Http\Controllers\CategoryController::class,'edit'])->name('categorys.edit');
Route::get('/category/delete/{id}',[App\Http\Controllers\CategoryController::class,'destory'])->name('category.delete');

//end category route

//user category
Route::get('/user/category',[App\Http\Controllers\UserCategoryController::class,'index'])->name('user.category');
Route::post('/user/category/store',[App\Http\Controllers\UserCategoryController::class,'store'])->name('user.category.store');
Route::get('/user/category/create',[App\Http\Controllers\UserCategoryController::class,'create'])->name('user.category.create');
Route::get('/user/category/edit_create/{id}',[App\Http\Controllers\UserCategoryController::class,'edit_create'])->name('user.category.edit_create');
Route::post('/user/category/edit/{id}',[App\Http\Controllers\UserCategoryController::class,'edit'])->name('user.category.edit');
Route::get('/user/category/delete/{id}',[App\Http\Controllers\UserCategoryController::class,'destory'])->name('user.category.destory');

//end user category

//home page route
//card route
Route::get('/manage',[App\Http\Controllers\CardController::class,'create'])->name('card');
Route::post('/card/store',[App\Http\Controllers\CardController::class,'store'])->name('card.store');
Route::post('/quantity/{id}',[App\Http\Controllers\CardController::class,'update'])->name('quantity_update');
Route::post('/card/delete/{id}',[App\Http\Controllers\CardController::class,'destory'])->name('card.delete');
//checkout route

Route::get('/checkout',[App\Http\Controllers\CheckOutController::class,'index'])->name('checkout');
Route::get('/checkout/store',[App\Http\Controllers\CheckOutController::class,'store'])->name('checkout.store');


//new product show
Route::get('/products/new/create',[App\Http\Controllers\ProductController::class,'Ncreate'])->name('products.Ncreate');
Route::post('/products/new/store',[App\Http\Controllers\ProductController::class,'Nstore'])->name('products.Nstore');

//product route
Route::get('/products/new',[App\Http\Controllers\ProductController::class,'new'])->name('product.new');
Route::get('/products',[App\Http\Controllers\ProductController::class,'index'])->name('product.index');
Route::get('/products/manage',[App\Http\Controllers\ProductController::class,'manage'])->name('products.manage');
Route::get('/products/create',[App\Http\Controllers\ProductController::class,'create'])->name('products.create');
Route::post('/products/store',[App\Http\Controllers\ProductController::class,'store'])->name('products.store');
Route::get('/products/edit_create/{id}',[App\Http\Controllers\ProductController::class,'edit_create'])->name('products.edit_create');
Route::post('/products/edit/{id}',[App\Http\Controllers\ProductController::class,'edit'])->name('products.edit');
Route::get('/products/delete/{id}',[App\Http\Controllers\ProductController::class,'destory'])->name('products.destory');
Route::post('/products/delete/',[App\Http\Controllers\ProductController::class,'delete'])->name('products.delete');
Route::get('/products/{slug}',[App\Http\Controllers\ProductController::class,'show'])->name('products.show');

//Division route start
Route::get('/division', [App\Http\Controllers\DivisionController::class, 'index'])->name('division.index');
Route::get('/division/create', [App\Http\Controllers\DivisionController::class, 'create'])->name('division.create');
Route::post('/division/create/store', [App\Http\Controllers\DivisionController::class, 'store'])->name('divisions');

//District route start
Route::get('/district', [App\Http\Controllers\DistrictController::class, 'index'])->name('district.index');
Route::get('/district/create', [App\Http\Controllers\DistrictController::class, 'create'])->name('district.create');
Route::post('/district/create/store', [App\Http\Controllers\DistrictController::class, 'store'])->name('district');
Route::get('/district/update', [App\Http\Controllers\DistrictController::class, 'update'])->name('distict.update');
Route::get('/district/delete/{id}', [App\Http\Controllers\DistrictController::class, 'delete'])->name('district.delete');
//District route end
//Dashbord route
Route::get('/dashbord',[App\Http\Controllers\AdminController::class,'index'])->name('dashbord');
//End Dashbord
//verification message show-2
Route::post('resend-email',[App\Http\Controllers\HomeController::class,'resend'])->name('verification.resend');
//registration
Route::get('/registration_create',[App\Http\Controllers\AdminController::class,'create'])->name('registration_create');

//end registration
//This is login to products
Auth::routes(['verify' => true]);
//This email verify route-1
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('login');
})->middleware(['auth', 'signed'])->name('verification.verify');
    //This verify shoe notice-2

Route::get('/email/verify',function(){
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

//send route
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

