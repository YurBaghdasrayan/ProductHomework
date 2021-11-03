<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cars;

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
        return view('cars',);
    }

    public function getCarslist(){
        return view('carslist', [
            'cars'=>Cars::where('user_id',Auth::user()->cars)->get()
        ]);
    }

    public function getUserlist()
    {
        return view('users-list');
    }

    public function getProdlist()
    {
        $products = Product::where('user_id', Auth::user()->id)->get();

        return view('product-list', [
            'products' => $products,
            'cars'=>Cars::where('user_id',Auth::user()->cars)->get()
        ]);
    }
}
