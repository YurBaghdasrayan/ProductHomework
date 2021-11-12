<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Models\User;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user',function(Request $request){
    return $request->user();
});

Route::group(['middleware'=>['auth:api']],function(){
    Route::get('/product-list', [ProductController::class, 'getApiProducts']);
});

Route::get('test',function(){
    return response()->json([
        'name' => 'John',
        'age' => '25'
    ]);
});



Route::get('test',function(){

    $user = User::first();
//    $user = User::latest();
//    $user = User::find(2);
//    $user = User::where();
//    $user = User::where('id','>',5)->get();
//    $user = User::where('id','>',5)->count();
//    $user = User::select('id','>','email')->where('id','>',5)->first();
//    $user = User::where('id','>',5)->orderBy('id','desc')->get();
//        $user = User::where('id','>',5)->orWhere('id','<',2)->get();
    //    $user = User::where('id','>',5)->where('id','<','2')->get();
//    $user = User::where('id','>',5)->orderBy('id','desc')->toSql();
//    $query = User::where('id','>',5)->where('id','<',5);
//    dd(
//        $query->toSql(),
//        $query->getBindings()
//    );
//    $products = Product::where('user_id',22)->get();
//
//    dd($products);

//    $products = User::find('products')->get();
//
//    dd($users);

//    $users = User::has('products')->get();

//    $users = User::dosentHave('products')->get();

//    $users = User::whereHas('products',function($query){
//        $query->where('id', '>',7);
//    })->get();

//    dd($users);
//    eagar loading
//    $user = User::whth('products')->find(11);
//    foreach ($user->products as $product) {
//        dump($product->id);
//    }

//    $user = User::find(20);
//    $user->load('products');
//    foreach ($user->products as $product) {
//        dump($product->id);
//    }

//    1.user
//    2.products
//    2calls

});

