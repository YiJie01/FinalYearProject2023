<?php

use Illuminate\Support\Facades\Route;

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
//page 
Route::get('/', function () {
    return view('UserHome');
});

Route::get('/admin', function () {
    return view('AdminHome');
});

Route::get('/categorylist', function () {
    return view('FoodCategory');
});

Route::get('/addCategory',function(){
    return view('addCategory');
});

Route::get('/home',function(){
    return view('UserHome');
});

Route::get('/myCart',function(){
    return view('usercart');
});

Route::get('/Order',function(){
    return view('userOrder');
});

Route::get('/Booking',function(){
    return view('UserReserve');
});
//end page

//Category
Route::post('/addCategory',[App\Http\Controllers\CategoryController::class,'add'])->name('addCategory');

Route::get('/categorylist', [App\Http\Controllers\CategoryController::class, 'show'])->name('FoodCategory');

Route::get('/deleteCategory/{id}',[App\Http\Controllers\CategoryController::class,'delete'])->name('deleteCategory');

Route::get('/categoryDetail/{id}',[App\Http\Controllers\CategoryController::class,'edit'])->name('editCategory');

Route::post('/updateCategory',[App\Http\Controllers\CategoryController::class,'update'])->name('updateCategory');
//end category

//FoodManage
Route::get('/foodManage', function () {
    return view('FoodManage');
}); 

//user home
Route::get('/home', [App\Http\Controllers\FoodController::class, 'userfoodmenulist'])->name('FoodManage');
//end

//food
Route::post('/addFood',[App\Http\Controllers\FoodController::class,'add'])->name('addFood');

Route::get('/addFood', [App\Http\Controllers\FoodController::class, 'show'])->name('addFood');

Route::get('/addFood', [App\Http\Controllers\FoodController::class, 'showCategory'])->name('addFood');

Route::get('/foodManage', [App\Http\Controllers\FoodController::class, 'foodmenulist'])->name('FoodManage');

Route::get('/deleteFood/{id}',[App\Http\Controllers\FoodController::class,'delete'])->name('deleteFood');

Route::get('/editFood/{id}',[App\Http\Controllers\FoodController::class,'edit'])->name('editFood');

Route::post('/updateFood',[App\Http\Controllers\FoodController::class,'updatefood'])->name('updateFood');

Route::get('/foodMenu', [App\Http\Controllers\FoodController::class, 'userfoodmenu'])->name('foodMenu');


//detail
Route::get('/Food/{foodid}', [App\Http\Controllers\FoodController::class, 'foodcontent'])->name('foodcontent');

//end food

//Cart 
Route::post('/myCart',[App\Http\Controllers\CartController::class,'add'])->name('usercart');

Route::get('/myCart', [App\Http\Controllers\CartController::class, 'showcart'])->name('my.cart');

Route::get('/myCart/{id}', [App\Http\Controllers\CartController::class, 'delete'])->name('deletecart');



//end cart

//Order 
Route::post('/createorder',[App\Http\Controllers\OrderController::class,'add'])->name('create.userOrder');

Route::get('/Order', [App\Http\Controllers\OrderController::class, 'showorder'])->name('userOrder');

Route::get('/adminorder', [App\Http\Controllers\OrderController::class, 'adminshoworder'])->name('AdminOrder');

Route::post('/paymented',[App\Http\Controllers\OrderController::class,'paymented'])->name('paymented');


//sttop here , : order admin page , report , E.A , slide , video , Github , tunitin report , 



Route::get('/myorder',[
    'uses'=>'OrderController@show',
    'as'=>'my.order'
]);

Route::get('/myOrder/delete',[
    'uses'=>'OrderController@delete', 
    'as'=>'delete.order'
]);

//end Order

//Reserve
Route::post('/Booking',[App\Http\Controllers\ReserveController::class,'book'])->name('UserReserve');

Route::get('/adminReserve', [App\Http\Controllers\ReserveController::class, 'showBook'])->name('AdminReserve');

Route::get('/deleteReserve/{id}',[App\Http\Controllers\ReserveController::class,'deleteBook'])->name('deleteBooking');

//end Reserve

Auth::routes();

Route::get('/home1', [App\Http\Controllers\HomeController::class, 'index'])->name('AdminHome');


//拜3 做 Order， payment ，UI , search

//拜4 full report and submit things


