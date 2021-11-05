<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cars;
use App\Models\Cartypes;


class MainController extends Controller
{
    public function getHome()
    {
        return view('MainBlade.online-market');
    }

    public function getLogin()
    {
        return view('login');
    }

    public function getSignup()
    {
        return view('signup');
    }

    public function getProfile()
    {

        return view('profile',[
            'products'=>Auth::user()->products
        ]);
    }

    public function getProduct()
    {
        $category = Category::get();
        return view('product',[
            'categories' => $category,
        ]);
    }

    public function getCars()
    {
        $cartypes = Cartypes::get();
        return view('cars',[
            'cartypes' => $cartypes,
        ]);
    }

    public function getCarslist(){
        $cars = Cars::get();
        
        return view('carslist',[
            'cars' => $cars,
        ]);
    }

    public function getUserlist()
    {
        return view('users-list');
    }

    public function getProdlist()
    {
        $products = Product::where('user_id', Auth::user()->id)->get();
//        dd($products);

        return view('product-list', [
            'products' => $products,
            'cars'=>Cars::where('user_id',Auth::user()->id)->get()
        ]);
    }
}
