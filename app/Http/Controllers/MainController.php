<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('profile');
    }

    public function getProduct()
    {
        return view('product');
    }

    public function getUserlist()
    {
        return view('users-list');
    }

    public function getProdlist()
    {
        $products = Product::where('user_id', Auth::user()->id)->get();

        return view('product-list', [
            'products' => $products
        ]);
    }
}
